@extends('layouts.main-layout')
@section('head')
<title>Home</title>
@endsection
@section('content')

<div class="title">
    <h1>Comic database</h1>
</div>

<div class="jumbotron">
    <img src="{{ Vite::asset('/resources/img/comic.jpeg') }}" alt="">
</div>

<div class="subtitle">
    <h2>Registered comics: {{ count($comics) }}</h2>
</div>

<!-- link to get create new comic page -->
<a href="{{route('route.create')}}">Click here for add a new comic</a>
<br>
<br>

@foreach ($comics as $comic)

<li>
    <strong>Comic title: </strong>{{ $comic -> title}}
</li>

<!-- link to get show page -->
<a href="{{ route('route.show', $comic -> id) }}">Clik here for more details</a>

<!-- to delete element -->
<form action="{{ route('route.delete', $comic -> id) }}" method="POST">

    @csrf
    @method('DELETE')

    <input type="submit" value="X">
</form>

<!-- to get edit page -->
<a href="{{ route('route.edit', $comic -> id) }}">
    EDIT
</a>

<br>
<br>

@endforeach

@endsection