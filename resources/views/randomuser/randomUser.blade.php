@extends('layouts.master')

@section('title')
    {{ $title }}
@stop

@section('head')
    {!! HTML::style('css/styleUser.css') !!}
@stop

@section('topic')
    Random User Generator
@stop

@section('content')
    @foreach($users as $key => $value)
        <p class="mainUserContent">
            <b>{{ $key }}</b>
        </p>
        <p class="mainUserContent">
            {!! HTML::image($value[1], 'User Profile Picture', array( 'class' => 'img-circle person' )) !!}
        </p>
        <p>
            {!! nl2br(e($value[0])) !!}
        </p>
    @endforeach

@stop

@section('home')
    <a href="/" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-home"></span> Home</a>
@stop
