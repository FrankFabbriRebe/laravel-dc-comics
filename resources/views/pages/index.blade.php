@extends('layouts.main-layout')
@section('head')
<title>Home</title>
@endsection
@section('content')
<h1>Comic list</h1>
@foreach ($comics as $comic)
<li>
    <strong>Comic title: </strong>{{ $comic -> title}}
</li>
<a href="{{ route('route.show', $comic -> id) }}">Clik her for more details</a>
@endforeach
@endsection