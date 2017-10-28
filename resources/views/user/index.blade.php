@extends('layouts.app')

@section('content')
    <link href="{{ asset("css/indexing.css") }}" rel="stylesheet">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="list-group" id="index-list">
                    {{--@for ($i = 0; $i < 100; $i++)--}}
                        {{--<a href="#" class="index-listitem list-group-item list-group-item-action flex-column align-items-start">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-md-7">--}}
                                    {{--<h5 class="mb-1">{{ $i }} Name</h5>--}}
                                    {{--<small class="text-muted">E-mail</small>--}}
                                {{--</div>--}}
                                {{--<div class="indexing-buttons col-md-5">--}}
                                    {{--<button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-chevron-down"></i> Show</button>--}}
                                    {{--<button type="button" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Edit</button>--}}
                                    {{--<button type="button" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<p class="mb-1">@php echo substr("About me", 0, 100); @endphp...</p>--}}
                        {{--</a>--}}
                    {{--@endfor--}}
                    @foreach($users as $user)
                        <a href="#" class="index-listitem list-group-item list-group-item-action flex-column align-items-start">
                            <div class="row">
                                <div class="col-md-7">
                                    <h5 class="mb-1">{{ $event->name }}</h5>
                                    <small class="text-muted">{{ $event->email }}</small>
                                </div>
                                <div class="indexing-buttons col-md-5">
                                    <button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-chevron-down"></i> Show</button>
                                    <button type="button" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Edit</button>
                                    <button type="button" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                </div>
                            </div>
                            <p class="mb-1">@php echo substr('About me', 0, 100) @endphp...</p>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <nav aria-label="Page navigation" class="index-pagination">
                <div id="pagingControls"></div>
            </nav>
        </div>
    </div>

    <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <script src="{{ asset("js/pager.js") }}"></script>
    <script>
        var pager = new Pager();
        $(document).ready(function() {
            pager.itemsPerPage = 10;
            pager.pagingItemsContainer = $('#index-list');
            pager.items = $('a.index-listitem', pager.pagingItemsContainer);
            pager.showPage(1);
        });
    </script>
@endsection
