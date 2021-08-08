@extends('layouts.app')

@section('content')
    <h1>{{ $events->count() }} Evénements</h1>

    @if (!$events->isEmpty())
        <ul>
            @foreach ($events as $event)
                <li><a href="{{ route('events.show', $event->id) }}">{{ $event->title }}</a></li>
            @endforeach
        </ul>

        {{ $events->links() }}
    @else
        <p>Aucun événement n'est disponible</p>
    @endif
@stop
