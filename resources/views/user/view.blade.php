@extends('layouts.app')

@section('content')



    <link href="{{asset('css/userviev.css')}}" rel ="stylesheet"/>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-lg-6 col-sm-6">
                <div class="card hovercard">
                    <div class="card-background">
                        <img class="card-bkimg" alt="" src="http://lorempixel.com/100/100/people/9/">
                        <!-- http://lorempixel.com/850/280/people/9/ -->
                    </div>
                    <div class="useravatar">
                        <img alt="" src="http://lorempixel.com/100/100/people/9/">
                    </div>
                    <div class="card-info"> <span class="card-title">$user->name</span>

                    </div>
                </div>

                <div class="well">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1">
                            <h3>About me: </h3>
                        <span class="about-me">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra ligula sit amet orci facilisis laoreet. Donec non rutrum felis, quis tristique mauris. Nam imperdiet metus quis est gravida accumsan. Proin finibus nec diam sit amet auctor. Duis purus urna, molestie sit amet rhoncus tempor, tempor nec turpis. Phasellus hendrerit sodales interdum. Nullam id elit eu quam auctor vehicula. Donec nulla sapien, egestas eu dolor nec, mattis gravida ante.</span>
                    </div>
                        <div class="tab-pane fade in active" id="tab2">
                            <h4>Info: </h4>
                            <div class="info">Phone number: $user->number</div>
                            <div class="info">Age: $user->age</div>
                            <div class="info">Email: $user->email</div>
                        </div>
                        <div class="tab-pane fade in active" id="tab3">
                            <h4>Previous events: </h4>
                            <div class="info">Event1</div>
                            <div class="info">Event2</div>
                            <div class="info">Event3</div>
                            <div class="info">Event4</div>
                        </div>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
