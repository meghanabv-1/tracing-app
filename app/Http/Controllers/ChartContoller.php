<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Charts;
use App\Overall;
use DB;

class ChartController extends Controller
{
    //
    public function index()
    {
		$month = date('m-1');
		$teamleadnames = Overall::whereRaw('Month(created_at)='.$month)
		->get()->pluck('teamleadname');
	   $collections = Overall::whereRaw('Month(created_at)='.$month)
	   ->get()->pluck('collection');

				  
		$pie  =	 Charts::create('pie', 'highcharts')
		->title('OVERALL TEAM CHART')
		->elementLabel('collection')
		->labels($teamleadnames)
		->values($collections)
		->dimensions(1000,500)
		->responsive(false);

		$month = date('m-1');
		$tracernames = Overall::whereRaw('Month(created_at)='.$month)
		->get()->pluck('tracername');
	   $collections = Overall::whereRaw('Month(created_at)='.$month)
	   ->get()->pluck('collection');


		$chart = Charts::create('bar', 'highcharts')
				  ->title("TRACER PERFORMANCE")
				  ->elementLabel('collection')
			      ->labels($tracernames)
		          ->values($collections)
			      ->dimensions(600, 500)
			      ->responsive(false);
			
				  
return view('chart',compact('pie','chart'));
			    
    }
}
