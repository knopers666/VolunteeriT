@extends('layouts.app')

@section('content')


    <link href="{{asset('css/useredit.css')}}" rel ="stylesheet"/>

    <div class="container">
        <div class="row">
            <form class="col-md-offset-3 col-lg-6 col-sm-6">
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
                    <label for="pwd">Password to confirm:</label>
                    <input type="password" class="form-control" id="pwd">
                </div>

                <button type="edit" class="btn btn-default">Edit</button>
            </form>

        </div>
    </div>
    @endsection