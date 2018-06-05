<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Models\Library;

class MainController extends Controller
{
	public function actionIndex(Request $request)
	{
		return view('main.index');
	}
}