@extends('layout')

@section('mainContent')
	<h1>Show Car</h1>
	<div style="color: {{$car->color}}">
		<h1>{{$car->name}}</h1>
	</div>
	<p>
		<strong>{{$car->company}}</strong>
	</p>
	<a href="{{$car->id}}/edit">Edit Car</a>
@endsection
