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
