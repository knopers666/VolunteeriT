@extends('layouts.app')

@section('content')


    <link href="{{asset('css/useredit.css')}}" rel ="stylesheet"/>

    <div class="container">
        <div class="row">
            <form class="col-md-offset-3 col-lg-6 col-sm-6">
                <div class="useravatar">
                    <img alt="" src="http://lorempixel.com/100/100/people/7/">
                    <h2>$user->name</h2>
                </div>
                <div class="form-group">
                    <label for="about">About me:</label>
                    <input type="about" class="form-control" id="about">
                </div>
                <div class="form-group">
                    <label for="phone">Phone number:</label>
                    <input type="phone" class="form-control" id="phone">
                </div>
                <div class="form-group">
                    <label for="birth">Date of birth:</label>
                    <input type="birth" class="form-control" id="birth">
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" id="email">
                </div>

                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd">
                </div>

                <div class="col-xs-offset-5 edit-btn">
                <button type="button" class="btn-lg btn-primary">Edit</button>
                </div>
            </form>

        </div>
    </div>
    @endsection