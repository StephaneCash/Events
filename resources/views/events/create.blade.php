@extends('layouts.app')

@section('content')
    <form action="{{ route('events.store') }}" method="POST">
        {{ csrf_field() }}

        <label class="control-label">Ajouter un événement</label>

        <div class="form-group {{ $errors->has('title') ? 'error' : '' }}">
            <input type="text" placeholder="Entrer le titre de l'événement" name="title" class="form-control" value="{{ old('title') }}">
            {!! $errors->first('title', '<span class="error">:message</span>') !!}
        </div>

        <div class="form-group {{ $errors->has('description') ? 'error' : '' }}">
            <textarea class="form-control" placeholder="Entrer la déscription de l'événement" name="description" cols="30"rows="10">{{ old('description') }}</textarea>
            {!! $errors->first('description', '<span class="error">:message</span>') !!}
        </div>
        <input type="submit" value="Ajouter un événement" class="btn btn-primary btn-block">
    </form>
    <br>
    <a href="{{ route('events.index') }}">Annuler</a>
@stop
