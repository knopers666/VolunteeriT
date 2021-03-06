@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif
            <div class="col-md-8">
                <h1 class="eventview-title">{{ $event->name }}</h1>
                <h2 class="eventview-subtitle">{{ $event->location }}, {{ $event->date }}</h2>
            </div>
            <div class="col-md-4">
                <img src="http://lorempixel.com/200/200/" class="img-thumbnail eventview-pic">
            </div>
        </div>
        <div class="row" style="height: 40px"></div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <p class="eventview-desc">{{ $event->description }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-md-offset-8">
                <a href='{{ action('EventController@join_event', $event->id) }}'><button type="button" class="btn btn-primary">Sign up</button></a>
            </div>
        </div>
    </div>
@endsection