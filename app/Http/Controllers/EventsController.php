<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;

class EventsController extends Controller
{

    public function index()
    {
        $events = Events::all();
        return view('events.index', compact('events'));

    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:3',
            'description' => 'required|min:5',
        ]);

        Events::create(['title' => $request->title, 'description' => $request->description]);

        return redirect()->route('home');
    }

    public function show($id)
    {
        $event = Events::findOrFail($id);

        return view('events.show', compact('event'));
    }

    public function edit($id)
    {
        $event = Events::findOrFail($id);
        return view('events.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|min:3',
            'description' => 'required|min:5',
        ]);

        $event = Events::findOrFail($id);

        $event->update(['title' => $request->title, 'description' => $request->description]);

        return redirect()->route('events.show', $id);
    }

    public function destroy($id)
    {
        Events::destroy($id);

        return redirect()->route("home");
    }
}
