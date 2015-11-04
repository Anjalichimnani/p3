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

    <p>
        Laravel is a <b>free, open-source PHP web application framework</b>, created by <b>Taylor Otwell</b> and intended for the development of web applications following the <b>Model–View–Controller (MVC)</b> architectural pattern. Some of the features of Laravel are a modular packaging system with a dedicated dependency manager, different ways for accessing relational databases, utilities that aid in application deployment and maintenance, and its orientation toward syntactic sugar.
        <br/><br/>
        To view its different Capabilities, we have two functionalities as:
    </p>

    <p>
        <form method='POST' action='/loremipsum'>
            <input type='hidden' name='_token' value='{{ csrf_token() }}'>
            <label>No. Of Paragraphs</label>
            <input type='text' name='noOfParas'><br/><br/>
            <input type='submit' value='Submit'>
        </form>
    </p>

    <p>
        <form method='POST' action='/randomuser'>
            <input type='hidden' name='_token' value='{{ csrf_token() }}'>
            <label>No. Of Users</label>
            <input type='text' name='noOfUsers'><br/>
            <input type="checkbox" name="withProfile" value="Yes"> With Profile<br><br>
            <input type='submit' value='Submit'>
        </form>
    </p>

@stop
