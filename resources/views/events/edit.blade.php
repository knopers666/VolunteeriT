@extends('layouts.app')

@section('content')


    <link href="{{asset('css/eventedit.css')}}" rel ="stylesheet"/>

    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
            <form action="{{ url('event/'.$event->id) }}" method="post" class="col-md-offset-3 col-lg-6 col-sm-6">
                <div class="eventavatar">
                    <img alt="" src="http://lorempixel.com/200/200/city/3/">
                    <h2>{{ $event->name }}</h2>
                </div>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="name" class="form-control" id="name" value="{{ $event->name }}">
                </div>
                <div class="form-group">
                    <label for="location">Location:</label>
                    <input type="location" class="form-control" id="location" value="{{ $event->location }}">
                </div>
                <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="data" class="form-control" id="date" value="{{ $event->date }}">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="description" class="form-control" id="description" value="{{ $event->description }}">
                </div>

                <div class="col-xs-offset-5 edit-btn">
                    <input type="submit" class="btn-lg btn-primary">
                </div>

                <input type="hidden" name="_method" value="put">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>

        </div>
    </div>
@endsection