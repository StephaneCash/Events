<div class="form-group {{ $errors->has('title') ? 'error' : '' }}">
    <input type="text" name="title" value="{{ old('title') ?: $event->title }}" class="form-control" placeholder="Entrer un titre">
    {!! $errors->first('title', '<span class="error">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('description') ? 'error' : '' }}">
    <textarea class="form-control" name="description" cols="30" placeholder="Entrer une déscription"
        rows="10">{{ old('description') ?: $event->description }}</textarea>
    {!! $errors->first('description', '<span class="error">:message</span>') !!}
</div>
       
<input type="submit" value="{{ $submitButtonText }}" class="btn btn-primary btn-block">
