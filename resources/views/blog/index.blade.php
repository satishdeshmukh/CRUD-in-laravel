@extends('layout.master')

@section('content')

<h1>Blog List</h1>
<p class="lead">Your Blog's Lists <a href="{{ route('blog.create') }}">Add New Blog</a></p>
<hr>

@foreach($blogs as $blog)
    <h3>{{ $blog->title }}</h3>
    <p>{{ $blog->description}}</p>
    <p>
        <a href="{{ route('blog.show', $blog->id) }}" class="btn btn-info">View Blog</a>
        <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-primary">Edit Blog</a>
    </p>
    <hr>
@endforeach

@stop