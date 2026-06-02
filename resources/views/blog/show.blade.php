@extends('layouts.app')

@section('content')

<h2> {{$posts['title']}} </h2>

<p> {{$posts['content']}} </p>

<a href = "/posts"> Back to all posts </a>
@endsection