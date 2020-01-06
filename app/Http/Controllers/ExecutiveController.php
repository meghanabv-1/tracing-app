<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Executive;
use App\Fieldexecutive;

class ExecutiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $executives = Executive::all();

        return view('executives.index', compact('executives'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fieldexecutives=fieldexecutive::all()->pluck('executivename','id');
        return view('executives.create', compact('fieldexecutives'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'executivename'=>'required',
            'loan_application_no'=> 'required|integer',
            'initiative' => 'required|integer',
            'settlement' => 'required|integer',
            'installment' => 'required|integer',
            'date' => 'required'
          ]);
          $executive = new Executive([
            'executivename' => $request->get('executivename'),
            'loan_application_no'=> $request->get('loan_application_no'),
            'initiative'=> $request->get('initiative'),
            'settlement'=> $request->get('settlement'),
            'installment'=> $request->get('installment'),
            'date'=> $request->get('date')
            
          ]);

          $executive->save();
          return redirect('/executive')->with('success', 'Data has been added');
        }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
   {
       
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $executive = Executive::find($id);

        return view('executives.edit', compact('executive'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
{
      $request->validate([
        'executivename'=>'required|string',
        'loan_application_no'=> 'required|integer',
        'initiative' => 'required|integer',
        'settlement' => 'required|integer',
        'installment' => 'required|integer',
        'date' => 'required'
      ]);

      $executive = Executive::find($id);
      $executive->executivename = $request->get('executivename');
      $executive->loan_application_no = $request->get('loan_application_no');
      $executive->initiative = $request->get('initiative');
      $executive->settlement = $request->get('settlement');
      $executive->installment = $request->get('installment');
      $executive->date = $request->get('date');
      $executive->save();

      return redirect('/executive')->with('success', 'Data has been updated');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
     $executive = Executive::find($id);
     $executive->delete();

     return redirect('/executive')->with('success', 'Data has been deleted Successfully');
}
}
