<?php
 
namespace App\Http\Controllers;
 
use App\Customer;
use DB;
use Excel;
use Illuminate\Http\Request;
 
class MaatwebsiteDemoController extends Controller
{
 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function importExport()
    {
        return view('importExport');
    }
 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function downloadExcel($type)
    {
        $data = Customer::get()->toArray();
        
            
        return Excel::create('Customer_details', function($excel) use ($data) {
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
    public function importExcel(Request $request)
    {
        $request->validate([
            'import_file' => 'required'
        ]);
 
        $path = $request->file('import_file')->getRealPath();
        $data = Excel::load($path)->get();
 
        if($data->count()){
            foreach ($data as $key => $value) {
                $arr[] = ['customer_name' => $value->customer_name ,  
                'father_name' => $value->father_name, 
                'mobile_no' => $value->mobile_no, 
                'alt_no' => $value->alt_no, 
                'dob' => $value->dob, 
                'padd' => $value->padd, 
                'ladd' =>$value->ladd,
                'status' => $value->status
             ];
            }
 
            if(!empty($arr)){
               Customer::insert($arr);
            }
        }
 
        return back()->with('success', 'Insert Record successfully.');
    }

}