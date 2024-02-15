@extends('layouts.main-layout')
@section('head')
<title>Add new comic</title>
@endsection
@section('content')
<h1>Add new comic</h1>

<form action="{{ route('route.store') }}" method="POST">

    @csrf
    @method('POST')

    <label for="title">Title</label>
    <input type="text" name="title" id="title">
    <br>
    <label for="author">Author</label>
    <input type="text" name="author" id="author">
    <br>
    <br>
    <input type="submit" value="CREATE">
</form>

@endsection