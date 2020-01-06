<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Charts;
use App\User;
use App\Fieldexecutive;
use DB;
use App\Executive;
use Input;

class Chart3Controller extends Controller
{
        //
        public function index()
    {
              
       $month = date('m-1');
     $executivenames = Executive::whereRaw('Month(created_at)='.$month)
     ->get()->pluck('executivename');
    $settlements = Executive::whereRaw('Month(created_at)='.$month)
    ->get()->pluck('settlement');
    

                
        $chart3 = Charts::create( 'bar', 'highcharts')
        ->title('Executives Performance')
        ->elementLabel('settlement')
        ->labels($executivenames)
        ->values($settlements)
        ->dimensions(500, 500)
        ->responsive(false);
       

return view('chart3',compact('chart3','executivenames'));
    }

    public function show()
    {
        $name= Input::get('name');
        $executivenames = Executive::where('executivename',$name)->first();
      
          return $executivenames;
              
    }
}