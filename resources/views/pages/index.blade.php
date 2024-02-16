@extends('layouts.main-layout')
@section('head')
<title>Home</title>
@endsection
@section('content')

<h1>Comic list</h1>
<br>
<br>

<h2>Comics: {{ count($comics) }}</h2>
<br>
<br>

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
<form>
    <input type="submit" value="X">
</form>

<br>
<br>

@endforeach

@endsection