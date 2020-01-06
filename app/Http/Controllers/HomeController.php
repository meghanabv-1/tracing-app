<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Customer;
use App\User;
use DB;
use Charts;
use App\Performance;
use App\Teamlead;
use App\Bank;
use App\Tracer;
use App\Overall;
use App\Fieldexecutive;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function dashboard(){
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
        $chart = Charts::create( 'bar', 'highcharts')
        ->title('Team Performance')
        ->elementLabel('Metro solutions')
        ->labels($teamleadnames)
        ->values($collections)
        ->dimensions(700, 500)
        ->responsive(false);

return view('admin/dashboard',compact('chart'));
    
    }

    public function index()
    {
        $teamleads=Teamlead::all()->pluck('teamleadname','id');
        $banks=Bank::all()->pluck('bankname','id');
        $tracers=Tracer::all()->pluck('tracername','id');
        $fieldexecutives=Fieldexecutive::all()->pluck('executivename','id');
        return view('home', compact('teamleads', 'banks', 'tracers', 'fieldexecutives'));
    }

      public function company()
      {
          //
      }

      public function about()
      {
          //
      }
}
     






