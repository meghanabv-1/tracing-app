<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loaninfo;
use DB;
use Excel;

class MaatwebsiteController extends Controller
{
    
    public function import()
    {
        return view('import');
    }

    public function downloadEx($type)
    {
        $data = Loaninfo::get()->toArray();
            
        return Excel::create('Loan_details', function($excel) use ($data) {
            $excel->sheet('mySheet', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->download($type);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function importEx(Request $request)
    {
        $request->validate([
            'import_file' => 'required'
        ]);
 
        $path = $request->file('import_file')->getRealPath();
        $data = Excel::load($path)->get();
 
        if($data->count()){
            foreach ($data as $key => $value) {
                $arr[] = ['bankname' => $value->bankname,
                    'loan_application_no' => $value->loan_application_no,  
                'cust_name' => $value->cust_name, 
                'teamlead' => $value->teamlead, 
                'month' => $value->month, 
                'pos' => $value->pos,
                'status' => $value->status,
                'mobile' => $value->mobile
             ];
            }
 
            if(!empty($arr)){
               Loaninfo::insert($arr);
            }
        }
 
        return back()->with('success', 'Insert Record successfully.');
    }
}
