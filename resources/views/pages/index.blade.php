@extends('layouts.main-layout')
@section('head')
<title>Home</title>
@endsection
@section('content')

<h1>Comic list</h1>

<a href="{{route('route.create')}}">Click here for add a new comic</a>

@foreach ($comics as $comic)
<li>
    <strong>Comic title: </strong>{{ $comic -> title}}
</li>
<a href="{{ route('route.show', $comic -> id) }}">Clik here for more details</a>
@endforeach

@endsection