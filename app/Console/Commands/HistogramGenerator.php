<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use App\Models\Library;

class HistogramGenerator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:histogram';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Histogram From Image';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info("Sedang menginisialisasi...");
        $listFiles = $this->openFiles();
        foreach ($listFiles as $key => $value) {
            $this->info($value['name'].' Berhasil di inisialisasi ke database');
            $this->histogram(storage_path("app/images")."/".$value['name'], $value['name']);
        }
        $this->info('Proses inisialisasi selesai...');

    }

    public function openFiles() {
      $arrayOfFiles = array();
      $files = Storage::disk('images')->files();
      foreach ($files as $key => $file) {
        $arrayOfFiles[$key]['name'] = $file;
      }
      

      return $arrayOfFiles;
    }

    private function histogram($sourceFile, $imageName)
    {
        try{
            $maximumHeight = 200;
            $barWidth = 2;

            $explode = explode(".", $sourceFile);
            $filetype = $explode[count($explode)-1];

            if ($filetype == 'jpg') {
                $image = imagecreatefromjpeg($sourceFile);
            } else
            if ($filetype == 'jpeg') {
                $image = imagecreatefromjpeg($sourceFile);
            } else
            if ($filetype == 'png') {
                $image = imagecreatefrompng($sourceFile);
            } else
            if ($filetype == 'gif') {
                $image = imagecreatefromgif($sourceFile);
            }

            $imageWidth = imagesx($image);
            $imageHeight = imagesy($image);

            $totalPixel = $imageWidth * $imageHeight;
            $histogram = [];

            //Init default histogram
            $histogram = $this->initHistogram();

            for ($i=0; $i<$imageWidth; $i++)
            {
                    for ($j=0; $j<$imageHeight; $j++)
                    {
                            // get the rgb value for current pixel
                            
                            $rgb = imagecolorat($image, $i, $j);
                            $colors = imagecolorsforindex($image, $rgb);
                            
                            // extract each value for r, g, b
                            
                            // $r = ($rgb >> 16) & 0xFF;
                            // $g = ($rgb >> 8) & 0xFF;
                            // $b = $rgb & 0xFF;

                            $r = $colors['red'];
                            $g = $colors['green'];
                            $b = $colors['blue'];
                            
                            // // get the Value from the RGB value
                            
                            // $V = round(($r + $g + $b) / 3);
                            
                            // // add the point to the histogram
                            
                            // $histogram[$V] += $V / $totalPixel;

                            $histogram[0][$r]+=1;
                            $histogram[1][$g]+=1;
                            $histogram[2][$b]+=1;
                    
                    }
            }

            /*$max = 0;
            for ($i=0; $i<255; $i++)
            {
                    if ($histogram[$i] > $max)
                    {
                            $max = $histogram[$i];
                    }
            }*/


            /*print_r($histogram);
            echo "\nMaksimum Histogram : ".$max;*/


            $model = new Library();
            $model->image_name = $imageName;
            $model->histogram = json_encode($histogram);
            $model->save();

        }catch(\Exception $e){
            $this->info($e->getMessage());
            $this->info(print_r($explode));
        }
    }


    private function initHistogram()
    {
        $histogram = [];
        for ($a=0; $a < 3; $a++) { 
            $histogram[$a] = [];
            for($i = 0; $i < 256; $i ++){
                $histogram[$a][$i] = 0;
            }
        }

        return $histogram;
    }
}
