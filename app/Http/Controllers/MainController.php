<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use App\Models\Library;


class MainController extends Controller
{

	private $dataSet;
	private $templateScore;
	private $distanceScore;
	private $limit;

	public function __construct()
	{
		$this->dataSet = $this->initDataSet();
		$this->templateScore = $this->initTemplateScore();
		$this->limit = 20;
	}

	public function actionIndex(Request $request)
	{
		$params = [
			'data' => $this->dataSet
		];
		return view('main.index', $params);
	}

	public function actionProcess(Request $request)
	{


		$id = $request->get('id');
		$result = false;
		try{
			$result = $this->calculateDistance($id);
		}catch(\Exception $e){
			$result = false;
		}

		if($result){
			$collection = collect($this->distanceScore)->sortBy('score')->values()->all();
			$response = $this->fetchData($collection);

			$params = [
				'status' => 'SUCCCESS',
				'code' => 200,
				'data' => $response
			];
		}else{
			$params = [
				'status' => 'FAILED',
				'code' => 500,
				'data' => []
			];
		}

		return response()->json($params);
	}

	private function fetchData($collection)
	{
		$selectedCollection = collect($collection)->take(10);
		$imageId = "";
		foreach ($selectedCollection as $key => $value) {
			$imageId .= $value['image_id'];
			$imageId .= ",";
		}

		$imageId .= "0";

		$data = Library::whereRaw("id IN (".$imageId.")")->orderByRaw("FIELD(id,".$imageId.")")->get();
		$result = [];
		foreach ($data as $key => $value) {
			$result[] = [
				'image_id' => $value->id,
				'name' => $value->image_name,
				'url' => url('public/images')."/".$value->image_name
			];
		}

		return $result;

	}

	private function calculateDistance($libraryId)
	{
		$selectedLibrary = $this->findOne($libraryId);
		if(is_null($selectedLibrary)){
			return false;
		}

		$histogramSelectedObject = json_decode($selectedLibrary->histogram);
		foreach ($this->dataSet as $key => $value) {
			$currentHistogram = json_decode($value->histogram);
			for ($a=0; $a < 3; $a++) { 
				for($i = 0; $i < 256; $i++){
					$this->templateScore[$value->id]['template_score'][$a][$i] = ($histogramSelectedObject[$a][$i] - $currentHistogram[$a][$i] );
				}
			}
		}

		$this->ecluidianDistance();
		return true;

	}


	private function ecluidianDistance()
	{
		foreach ($this->templateScore as $key => $value) {
			$tempScore = 0;
			foreach ($value['template_score'] as $a => $scores) {
				foreach ($scores as $k => $score) {
					$tempScore += pow($score, 2);
				}
			}
			if($tempScore > 0){
				$tempScore = sqrt($tempScore);
			}

			$this->distanceScore[$value['image_id']]['score'] += $tempScore;
		}
	}

	private function initDataSet()
	{
		$data = Library::all();
		return $data;
	}

	private function findOne($libraryId)
	{
		$object = Library::find($libraryId);
		return $object;
	}

	private function initTemplateScore()
	{
		$templateScore = [];
		$distanceScore = [];
		foreach ($this->dataSet as $key => $value) {
			$matrixValue = [];
			for ($a=0; $a < 3; $a++) { 
				$matrixValue[$a] = [];
				for($i = 0; $i<256; $i++){
					$matrixValue[$a][$i] = 0;
				}
			}

			$templateScore[$value->id] = [
				'image_id' => $value->id,
				'template_score' => $matrixValue
			];

			$distanceScore[$value->id] = [
				'image_id' => $value->id,
				'score' => 0
			];
		}

		$this->initDefaultDistanceScore($distanceScore);
		return $templateScore;
	}

	private function initDefaultDistanceScore($distanceScore)
	{
		$this->distanceScore = $distanceScore;
	}
}