@extends('layouts.app')

@section('content')
    <link href="{{ asset("css/indexing.css") }}" rel="stylesheet">

    <div class="container">
        <div class="row">
            <div class="col-md-12 list-group" id="index-list">
                    @foreach($events as $event)
                        <div class="index-listitem">
                            <div class="indexing-buttons col-md-12">
                                <a href="{{ action('EventController@show', $event->id) }}">
                                    <button type="button" id="button-show" class="btn btn-primary"><i class="glyphicon glyphicon-chevron-down"></i> Show</button>
                                </a>
                                <a href="{{ action('EventController@edit', $event->id) }}">
                                    <button type="button" id="button-edit" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> Edit</button>
                                </a>
                                <form action="{{ action('EventController@destroy', $event->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                </form>
                            </div>
                            <a href='{{ action('EventController@show', $event->id) }}' class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 class="mb-1">{{ $event->name }} - <span class="text-muted">{{ $event->user }}</span></h5>
                                        <small class="text-muted">{{ $event->location }}, {{ $event->date }}</small>
                                    </div>
                                </div>
                                <p class="mb-1">@php echo substr($event->description, 0, 100) @endphp...</p>
                            </a>
                        </div>
                    @endforeach
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
//          pager.itemsPerPage = 10;
            pager.pagingItemsContainer = $('#index-list');
            pager.items = $('div.index-listitem', pager.pagingItemsContainer);
            pager.showPage(1);

            $('#button-edit').click(function() {
                window.location.href = '{{ action('EventController@edit', $event->id) }}';
            });
        });
    </script>
@endsection
