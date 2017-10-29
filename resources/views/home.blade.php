@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
        <div class="col-md-8 col-md-offset-2">

        </div>
    </div>
</div>
@endsection