<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tracer;

class TracerController extends Controller
{
    
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $tracers = Tracer::all();
    
            return view('tracers.index', compact('tracers'));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('tracers.create');
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
                'tracername'=>'required|string'
              ]);
              $tracer = new Tracer([
                'tracername' => $request->get('tracername')
              ]);
    
              $tracer->save();
              return redirect('/tracers')->with('success', 'Data has been added');
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
            $tracer = Tracer::find($id);
    
            return view('tracers.edit', compact('tracer'));
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
            'tracername'=>'required|string'
            ]);
    
          $tracer = Tracer::find($id);
          $tracer->tracername = $request->get('tracername');
          $tracer->save();
    
          return redirect('/tracer')->with('success', 'Data has been updated');
    }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
    {
         $tracer = Tracer::find($id);
         $tracer->delete();
    
         return redirect('/tracer')->with('success', 'Data has been deleted Successfully');
    }
    }
    
