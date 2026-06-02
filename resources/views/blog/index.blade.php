@extends('layouts.app')
@section('content')

<h2> All Data </h2>

@foreach($blogs as $post)

<h3> {{$post['title']}} </h3>

<a href  = "/posts/{{$post['id']}}" >Read details </a>

@endforeach
@endsection