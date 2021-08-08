<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEvent;
use App\Http\Requests\UpdateEvent;
use App\Models\Events;
use MercurySeries\Flashy\Flashy;

class EventsController extends Controller
{

    public function index()
    {
        $events = Events::simplePaginate(5);
        return view('events.index', compact('events'));

    }

    public function create()
    {
        $event = new Events;
        return view('events.create', compact('event'));
    }

    public function store(CreateEvent $request)
    {

        Events::create(['title' => $request->title, 'description' => $request->description]);

        Flashy('notification.message', 'Evenement créé avec succès');
        Flashy('Evenement créé avec succès', 'success');

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

    public function update(UpdateEvent $request, $id)
    {
        $event = Events::findOrFail($id);

        $event->update(['title' => $request->title, 'description' => $request->description]);

        Flashy('notification.message', 'Evénement # ' . $event->id . ' modifié avec succès');
        Flashy('Evenement modifié avec succès', 'success');

        return redirect()->route('events.show', $id);
    }

    public function destroy($id)
    {
        Events::destroy($id);

        Flashy::error('notification.message', 'Evénement supprimé avec succès');
        Flashy::error('Evénement supprimé avec succès', 'danger');

        return redirect()->route("home");
    }
}
