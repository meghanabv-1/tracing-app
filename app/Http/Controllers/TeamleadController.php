<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teamlead;

class TeamleadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teamleads = Teamlead::all();

        return view('teamleads.index', compact('teamleads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teamleads.create');
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
            'teamleadname'=>'required'
          ]);
          $teamlead = new Teamlead([
            'teamleadname' => $request->get('teamleadname'),
          ]);

          $teamlead->save();
          return redirect('/teamlead')->with('success', 'Data has been added');
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
        $teamlead = Teamlead::find($id);

        return view('teamleads.edit', compact('Teamlead'));
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
        'teamleadname'=>'required|string'
      ]);

      $teamlead = Teamlead::find($id);
      $teamlead->teamleadname = $request->get('teamleadname');
      $teamlead->save();

      return redirect('/teamlead')->with('success', 'Data has been updated');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
     $teamlead = Teamlead::find($id);
     $teamlead->delete();

     return redirect('/teamlead')->with('success', 'Data has been deleted Successfully');
}
}
