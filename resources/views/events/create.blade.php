@extends('layouts.app')

@section('content')
    <form action="{{ route('events.store') }}" method="POST">
        {{ csrf_field() }}

        <label class="control-label">Ajouter un événement</label>

        @include('events.form', ['submitButtonText' => 'Créer un événement'])

    </form>
    <br>
    <a href="{{ route('events.index') }}">Annuler</a>
@stop
