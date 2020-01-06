<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Performance;

class PerformanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $performances = Performance::all();

        return view('performances.index', compact('performances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('performances.create');
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
            'username'=>'required',
            'collection'=> 'required|integer',
            'month' => 'required|string',
            'year' => 'required|integer'
          ]);
          $performance = new Performance([
            'username' => $request->get('username'),
            'collection'=> $request->get('collection'),
            'month'=> $request->get('month'),
            'year'=> $request->get('year')
          ]);

          $performance->save();
          return redirect('/performance')->with('success', 'Data has been added');
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
        $performance = Performance::find($id);

        return view('performances.edit', compact('performance'));
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
        'username'=>'required|string',
        'collection'=> 'required|integer',
        'month' => 'required|string',
        'year' => 'required|integer'
      ]);

      $performance = Performance::find($id);
      $performance->username = $request->get('username');
      $performance->collection = $request->get('collection');
      $performance->month = $request->get('month');
      $performance->year = $request->get('year');
      $performance->save();

      return redirect('/performance')->with('success', 'Data has been updated');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
     $performance = Performance::find($id);
     $performance->delete();

     return redirect('/performance')->with('success', 'Data has been deleted Successfully');
}
}
