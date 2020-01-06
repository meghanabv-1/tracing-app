<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Calendar;
use App\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = [];
        $data = Event::all();
        if($data->count()) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->title,
                    false,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date.' +1 day'),
                    null,
                    // Add color and link on event
	                [
	                    'color' => '#f05050',
	                    'url' => 'pass here url and any route',
	                ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        return view('fullcalendar', compact('calendar'));
    }

    public function display()
    {
        return view('addevent');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'start_date'=> 'required',
            'end_date' => 'required'
          ]);
          $events = new Event([
            'title' => $request->get('title'),
            'start_date'=> $request->get('start_date'),
            'end_date'=> $request->get('end_date')
          ]);

          $events->save();
          return redirect('/events')->with('success', 'Event Added Successfully');
        }
        public function show()
    {
        $events = Event::all();

        return view('display')->with('events', $events);
    }
    public function edit($id)
    {
        $events = Event::find($id);

        return view('editform', compact('events','id'));
    }

    public function update(Request $request, $id)
    {
          $request->validate([
            'title'=>'required',
            'start_date'=>'required',
            'end_date'=>'required'
          ]);
    
          $events = Event::find($id);
          $events->title= $request->get('title');
          $events->start_date= $request->get('start_date');
          $events->end_date= $request->get('end_date');
          $events->save();
    
          return redirect('/events')->with('success', 'Data has been updated');
    }
    public function destroy()
    {
        //
    }
}