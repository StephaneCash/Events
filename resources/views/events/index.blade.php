@extends('layouts.app')

@section('content')
    <h1>{{ $events->count() }} Events</h1>

    @if (count($events) > 0)
        <ul>
            @foreach ($events as $event)
                <li><a href="{{ route('events.show', $event->id) }}">{{ $event->title }}</a></li>
            @endforeach
        </ul>
    @else
        <p>Aucun événement n'est disponible</p>
    @endif
@stop
