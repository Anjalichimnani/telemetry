@extends('layouts.master')

@section('title')
    {{ $title }}
@stop

@section('topic')
    Lorem Ipsum Generator
@stop

@section('content')
    @foreach($paragraphs as $paragraph)
        <p>
            {{ $paragraph }}
        </p>
    @endforeach
@stop

@section('home')
    <a href="/" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-home"></span> Home</a>
@stop
