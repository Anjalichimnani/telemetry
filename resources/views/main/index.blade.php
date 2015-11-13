@extends('layouts.master')

@section('title')
    P3 - Dynamic Web Application
@stop

@section('topic')
    Laravel 5
@stop

@section('content')
    <img src='http://maxoffsky.com/word/wp-content/uploads/2013/03/laravel_dark_1600x1200-1014x457.jpg'
    width="850"
    height="300"
    alt='Laravel5 Logo'>

    <br/><br/>

    <p>
        Laravel is a <b>free, open-source PHP web application framework</b>, created by <b>Taylor Otwell</b> and intended for the development of web applications following the <b>Model–View–Controller (MVC)</b> architectural pattern. Some of the features of Laravel are a modular packaging system with a dedicated dependency manager, different ways for accessing relational databases, utilities that aid in application deployment and maintenance, and its orientation toward syntactic sugar.
        <br/><br/>
        To view its different Capabilities, we have two functionalities as:
        <br/>
    </p>

    <div class="row">
        <div class="col-sm-6">
            <strong>Lorem Ipsum Generator</strong><br/><br/>

            @if($errors->get('noOfParas'))
                <ul>
                    @foreach($errors->get('noOfParas') as $error)
                        <li><div class="error">{{ $error }}</div></li>
                    @endforeach
                </ul>
            @endif

            <form method='POST' action='/loremipsum'>
                <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                <span class="label label-danger">No. Of Paragraphs</span>
                <input type='text' name='noOfParas'><br/><br/>
                <input type='submit' value='Submit' class="btn">
            </form>
        </div>

        <div class="col-sm-6">
            <strong>Random User Generator</strong><br/><br/>

            @if($errors->get('noOfUsers'))
                <ul>
                    @foreach($errors->get('noOfUsers') as $error)
                        <li><div class="error">{{ $error }}</div></li>
                    @endforeach
                </ul>
            @endif
            
            <form method='POST' action='/randomuser'>
                <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                <span class="label label-danger">No. Of Users</span>
                <input type='text' name='noOfUsers'><br/>
                <input type="checkbox" name="withProfile" value="Yes">With Profile<br><br>
                <input type='submit' value='Submit' class="btn">
            </form>
        </div>
    </div>

    <br/>
@stop
