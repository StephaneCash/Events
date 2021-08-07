@extends('layouts.app')

@section('content')
    <h1>{{ $event->title }}</h1>
    <p>{{ $event->description }}</p>
    <div class="d-flex">
        <a class="btn btn-success modif" href="{{ route('events.edit', $event) }}">Modifier </a><br>
        <form action="{{ route('events.destroy', $event) }}" method="POST" class="formShow">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <input type="submit" value="Supprimer" class="btn btn-danger">
        </form>
    </div>
    <hr>
    <p>
        <a href="{{ route('home') }}">Tous les événements </a>
    </p>
@stop
