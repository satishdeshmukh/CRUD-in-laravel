@extends('layout.master')

@section('content')

<h1>{{ $blog->title }}</h1>
<p class="lead">{{ $blog->description }}</p>
<hr>

<div class="row">

	<div class="col-md-6">

		<a href="{{ route('blog.index') }}" class="btn btn-info">Home</a>
		<a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-primary">Edit</a>
		
	</div>

	<div class="col-md-6 text-right">
		
		{!! Form::open([
            'method' => 'DELETE',
            'route' => ['blog.destroy', $blog->id]
        ]) !!}
            {!! Form::submit('Delete this blog?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}

	</div>
	
</div>

@stop