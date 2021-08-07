@extends('layouts.app')

@section('content')
    <form action="{{ route('events.update', $event) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <label class="control-label">Editer l'événement #{{ $event->id }}</label>

        <div class="form-group {{ $errors->has('title') ? 'error' : '' }}">
            <input type="text" name="title" value="{{ old('title') ?: $event->title }}" class="form-control">
            {!! $errors->first('title', '<span class="error">:message</span>') !!}
        </div>

        <div class="form-group {{ $errors->has('description') ? 'error' : '' }}">
            <textarea class="form-control" name="description" cols="30"
                rows="10">{{ old('description') ?: $event->description }}</textarea>
            {!! $errors->first('description', '<span class="error">:message</span>') !!}
        </div>
        <input type="submit" value="Modifier cet événement" class="btn btn-primary btn-block">
    </form>
    <br>
    <a href="{{ route('events.index') }}">Annuler</a>
@stop
