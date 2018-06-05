<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Models\Library;

class MainController extends Controller
{

	private $dataSet;
	private $templateScore;
	private $distanceScore;

	public function __construct()
	{
		$this->dataSet = $this->initDataSet();
		$this->templateScore = $this->initTemplateScore();
	}

	public function actionIndex(Request $request)
	{
		return view('main.index');
	}

	public function actionProcess()
	{
		try{

		}catch(\Exception $e){
			
		}
	}

	private function initDataSet()
	{
		$data = Library::all();
		return $data;
	}

	private function initTemplateScore()
	{
		$templateScore = [];
		$distanceScore = [];
		foreach ($this->dataSet as $key => $value) {
			$matrixValue = [];
			for($i = 0; $i<256; $i++){
				$matrixValue[$i] = 0;
			}

			$templateScore[$value->id] = [
				'image_id' => $value->id,
				'template_score' => $matrixValue
			];

			$distanceScore[$value->id] = 0;
		}

		$this->initDefaultDistanceScore($distanceScore);
		return $templateScore;
	}

	private function initDefaultDistanceScore($distanceScore)
	{
		$this->distanceScore = $distanceScore;
	}
}