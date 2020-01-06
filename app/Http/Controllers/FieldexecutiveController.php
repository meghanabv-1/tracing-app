<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fieldexecutive;

class FieldexecutiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fieldexecutives = Fieldexecutive::all();

        return view('fieldexecutives.index', compact('fieldexecutives'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fieldexecutives.create');
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
            'executivename'=>'required'
          ]);
          $fieldexecutive = new Fieldexecutive([
            'executivename' => $request->get('executivename')
          ]);

          $fieldexecutive->save();
          return redirect('/fieldexecutive')->with('success', 'Data has been added');
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
        $fieldexecutive = Fieldexecutive::find($id);

        return view('fieldexecutives.edit', compact('fieldexecutive'));
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
        'executivename'=>'required|string'
      ]);

      $fieldexecutive = Fieldexecutive::find($id);
      $fieldexecutive->executivename = $request->get('executivename');
      
      $fieldexecutive->save();

      return redirect('/fieldexecutive')->with('success', 'Data has been updated');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
     $fieldexecutive = Fieldexecutive::find($id);
     $fieldexecutive->delete();

     return redirect('/fieldexecutive')->with('success', 'Data has been deleted Successfully');
}
}
