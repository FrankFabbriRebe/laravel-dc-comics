@extends('layouts.main-layout')
@section('head')
<title>Show</title>
@endsection
@section('content')
<h1>Comic details</h1>
<h2>Title: {{$comics -> title}}</h2>
<h2>Author: {{$comics -> author}}</h2>
@endsection