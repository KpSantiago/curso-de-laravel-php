<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    // rota principal
    public function index()
    {
        // Get all events
        $events = Event::all();

        return view('home', ['events' => $events]);
    }

    public function createEvent()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $event = new Event;
        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->participants = $request->participants;
        $event->description = $request->description;

        $event->save();

        return redirect("/");
    }
}