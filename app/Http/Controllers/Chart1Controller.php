<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Charts;
use App\User;
use DB;
use App\Tracer;
use App\Overall;

class Chart1Controller extends Controller
{
    //
    public function index()
    {
        
         $month = date('m-1');
         $teamleadnames = Overall::whereRaw('Month(created_at)='.$month)
                            ->get()->pluck('teamleadname');
        $collections = Overall::whereRaw('Month(created_at)='.$month)
                     ->get()->pluck('collection');
        
        // $chart = Charts::database($performances, 'bar', 'highcharts')
		// 	      ->title("TEAM LEAD PERFORMANCE")
		// 	      ->elementLabel("Total Collection")
		// 	      ->dimensions(500, 500)
		// 	      ->responsive(true)
        // 	      ->groupByMonth(date('Y'), true);
        $chart1 = Charts::create( 'bar', 'highcharts')
        ->title('Team Performance')
        ->elementLabel('Settlement')
        ->labels($teamleadnames)
        ->values($collections)
        ->dimensions(500, 500)
        ->responsive(false);
        

return view('chart1',compact('chart1'));

    }
}
