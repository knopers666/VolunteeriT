@extends('layouts.app')

@section('content')
    <link href="{{ asset("css/eventsindex.css") }}" rel="stylesheet">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="list-group" id="eventsindex-list">
                    {{--@for ($i = 0; $i < 100; $i++)--}}
                        {{--<a href="#" class="eventsindex-listitem list-group-item list-group-item-action flex-column align-items-start">--}}
                            {{--<div class="d-flex w-100 justify-content-between">--}}
                                {{--<h5 class="mb-1">{{ $i }}</h5>--}}
                                {{--<small class="text-muted">Location, date</small>--}}
                            {{--</div>--}}
                            {{--<p class="mb-1">@php echo substr("loremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremlorem", 0, 50); @endphp...</p>--}}
                        {{--</a>--}}
                    {{--@endfor--}}
                    @foreach($events as $event)
                        <a href="#" class="eventsindex-listitem list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">{{ $event->name }}</h5>
                                <small class="text-muted">{{ $event->location }}, {{ $event->date }}</small>
                            </div>
                            <p class="mb-1">@php echo substr($event->description, 0, 100) @endphp...</p>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <nav aria-label="Page navigation" class="eventindex-pagination">
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
            pager.itemsPerPage = 5;
            pager.pagingItemsContainer = $('#eventsindex-list');
            pager.items = $('a.eventsindex-listitem', pager.pagingItemsContainer);
            pager.showPage(1);
        });
    </script>
@endsection
