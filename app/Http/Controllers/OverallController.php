<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teamlead;
use App\Bank;
use App\Tracer;
use App\Fieldexecutive;
use App\Overall;

class OverallController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $overalls = Overall::all();

      return view('overalls.index', compact('overalls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $teamleads=Teamlead::all()->pluck('teamleadname','id');
      $banks=Bank::all()->pluck('bankname','id');
      $tracers=Tracer::all()->pluck('tracername','id');
      $fieldexecutives=Fieldexecutive::all()->pluck('executivename','id');
      return view('overalls.create', compact('teamleads', 'banks', 'tracers', 'fieldexecutives'));
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
            'teamleadname'=>'required',
            'bankname'=>'required',
            'tracername'=>'required',
            'executivename'=>'required',
            'collection'=> 'required|integer',
            'date' => 'required'
          ]);
          $overall = new Overall([
            'teamleadname' => $request->get('teamleadname'),
            'bankname' => $request->get('bankname'),
            'tracername' => $request->get('tracername'),
            'executivename' => $request->get('executivename'),
            'collection'=> $request->get('collection'),
            'date'=> $request->get('date')
          ]);

          $overall->save();
          return redirect('/overall')->with('success', 'Data has been added');
        }
        
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $overall = Overall::find($id);

        return view('overalls.edit', compact('overall'));
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
        'teamleadname'=>'required',
            'bankname'=>'required',
            'tracername'=>'required',
            'executivename'=>'required',
            'collection'=> 'required|integer',
            'date' => 'required'
      ]);

      $overall = Overall::find($id);
      $overall->teamleadname = $request->get('teamleadname');
      $overall->bankname = $request->get('bankname');
      $overall->tracername = $request->get('tracername');
      $overall->executivename = $request->get('executivename');
      $overall->collection = $request->get('collection');
      $overall->date = $request->get('date');
      $overall->save();

      return redirect('/overall')->with('success', 'Data has been updated');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
     $overall = Overall::find($id);
     $overall->delete();

     return redirect('/overall')->with('success', 'Data has been deleted Successfully');
}
}

