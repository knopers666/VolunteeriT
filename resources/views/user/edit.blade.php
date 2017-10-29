@extends('layouts.app')

@section('content')


    <link href="{{asset('css/useredit.css')}}" rel ="stylesheet"/>

    <div class="container">
        <div class="row">
            <form action="{{ url('user/'.$user->id) }}" method="post" class="col-md-offset-3 col-lg-6 col-sm-6">
                <div class="useravatar">
                    <img alt="" src="http://lorempixel.com/100/100/people/7/">
                    <h2>{{ $user->name }}</h2>
                </div>
                <div class="form-group">
                    <label for="about">About me:</label>
                    <input name="about" type="about" class="form-control" id="about">
                </div>
                <div class="form-group">
                    <label for="phone">Phone number:</label>
                    <input name="phone" type="phone" class="form-control" id="phone">
                </div>
                <div class="form-group">
                    <label for="birth">Date of birth:</label>
                    <input name="birth" type="birth" class="form-control" id="birth">
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input name="email" type="email" class="form-control" id="email" value="{{ $user->email }}">
                </div>

                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input name="password" type="password" class="form-control" id="pwd">
                </div>

                <div class="col-xs-offset-5 edit-btn">
                <button type="submit" class="btn-lg btn-primary">Edit</button>
                </div>
            </form>

        </div>
    </div>
    @endsection