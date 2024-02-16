@extends('layouts.main-layout')
@section('head')
<title>Edit comic</title>
@endsection
@section('content')
<h1>edit comic</h1>

<form action="{{ route('route.update', $comic -> id) }}" method="POST">

    @csrf
    @method('PUT')

    <label for="title">Title</label>
    <input type="text" name="title" id="title" value="{{ $comic -> title}}">
    <br>
    <label for="author">Author</label>
    <input type="text" name="author" id="author" value="{{ $comic -> author }}">
    <br>
    <input type="submit" value="UPDATE">
</form>

@endsection