@extends("layouts.app")

@section('title-page', 'Home')

@section('main')

<h2>Home</h2>

@foreach ($all_movies as $element)

<div>{{$element['title']}}</div>
    
@endforeach

@endsection