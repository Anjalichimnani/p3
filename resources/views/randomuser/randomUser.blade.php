@extends('layouts.master')

@section('title')
    Random User Generator
@stop

@section('topic')
    Random User Generator
@stop

@section('content')
    @foreach($paragraphs as $paragraph)
        <p>
            {{ $paragraph }}
        </p>
    @endforeach
@stop
