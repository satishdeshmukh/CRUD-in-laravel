@extends('layout.master')

@section('content')

<h1>Editing "{{ $blog->title }}"</h1>
<p class="lead">Edit and save this blog below, or <a href="{{ route('blog.index') }}">go back to all blogs.</a></p>
<hr>

@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif

{!! Form::model($blog, [
    'method' => 'PATCH',
    'route' => ['blog.update', $blog->id]
]) !!}

<div class="form-group">
    {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Update blog', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop