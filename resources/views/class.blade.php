@extends('layout')

@section('content')

<h2>Student List</h2>

@foreach($students as $student)
    <div style="border:1px solid black; margin:10px; padding:10px;">
        <p><strong>Name:</strong> {{ $student['name'] }}</p>
        <p><strong>Age:</strong> {{ $student['age'] }}</p>
        <p><strong>Course:</strong> {{ $student['course'] }}</p>
    </div>
@endforeach

@endsection

//create a route  and three  route home about   use anchor taqgs