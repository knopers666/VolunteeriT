@extends('layouts.app')

@section('content')


    <link href="{{asset('css/eventedit.css')}}" rel ="stylesheet"/>

    <div class="container">
        <div class="row">
            <form action="{{ url('event/'.$event->id.'/edit') }}" method="put" class="col-md-offset-3 col-lg-6 col-sm-6">
                <div class="eventavatar">
                    <img alt="" src="http://lorempixel.com/200/200/city/3/">
                    <h2>{{ $event->name }}</h2>
                </div>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" value="{{ $event->name }}">
                </div>
                <div class="form-group">
                    <label for="location">Location:</label>
                    <input type="text" class="form-control" id="location" value="{{ $event->location }}">
                </div>
                <div class="form-group">
                    <label for="data">Date:</label>
                    <input type="date" class="form-control" id="data" value="{{ $event->date }}">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description">{{ $event->description }}</textarea>
                </div>

                <div class="col-xs-offset-5 edit-btn">
                    <button type="submit" class="btn-lg btn-primary">Edit</button>
                </div>
            </form>
        </div>
    </div>
@endsection