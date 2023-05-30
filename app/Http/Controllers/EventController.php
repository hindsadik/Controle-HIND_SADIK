<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function event_page(){
        return view('Events.event');
    }

    public function PostEvent(Request $request){
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:3',
            'start_date' => 'required',
            'end_date' => 'required' ,
            'price' => 'required'
        ]);
    
        $even= new Event();
        $even->title = $request->input('title'); 
        $even->description = $request->input('description');
        $even->start_date= $request->input('start_date');
        $even->end_date=$request->input('end_date');
        $even->price=$request->input('price');
        $even->save();
        flashy()->success("Les données bien enregistrer");
        return redirect()->route('listEvent');
    }

    public function listEvent(){
        $events=Event::all();
        return view('Events.listEvent' , compact('events'));
    }

    public function edit_event($id){
        $event = Event::findOrFail($id);
        return view('Events.edit' , compact('event'));
    }

    public function update_event(Request $request, $id){
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:3',
            'start_date' => 'required',
            'end_date' => 'required' ,
            'price' => 'required'
        ]);
        $event =Event::findOrFail($id);
        $event->title = $request->input('title'); 
        $event->description = $request->input('description');
        $event->start_date= $request->input('start_date');
        $event->end_date=$request->input('end_date');
        $event->price=$request->input('price');
        $event->save();
        flashy()->success("Les donées a été supprimée avec succès");
        return redirect()->route('listEvent');
    }

    public function delete_event($id)
    {
        Event::destroy($id);
        flashy()->success("Les donées a été supprimée avec succès");
        return redirect()->route('listEvent');
    }
}
