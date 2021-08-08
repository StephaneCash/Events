@extends('layouts.app')

@section('content')
    <form action="{{ route('events.update', $event) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <label class="control-label">Editer l'événement #{{ $event->id }}</label>

        @include('events/form', ['submitButtonText' => 'Modifier l\'événement'])
    </form>
    <br>
    <a href="{{ route('events.index') }}">Annuler</a>
@stop
