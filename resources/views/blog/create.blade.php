@extends('layout.master')

@section('content')

<h1>Add a New Blog</h1>
<p class="lead">Add to your blog list below.</p>
<hr>
{!! Form::open(['url' => 'blog/store']) !!}

    @if($errors->any())
      <div class="alert alert-danger">
        @foreach($errors->all() as $error) 
           <p>{{ $error }}</p> 
        @endforeach
      </div> 
    @endif
    
    @if(Session::has('flash_message'))
	    <div class="alert alert-success">
	        {{ Session::get('flash_message') }}
	    </div>
	@endif

	<div class="form-group">
	    {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
	    {!! Form::text('title', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
	    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
	    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
	</div>

	{!! Form::submit('Create New Blog',['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop