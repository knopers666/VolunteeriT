@extends("layouts.app")
@section("content")
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
            <h1>Stwórz wydarzenie!</h1>
            <form action="{{ route("event.store") }}" method="post">
                <div class="form-group row">
                    <label for="name" class="col-xs-3 col-form-label mr-2">Nazwa wydarzenia</label>
                    <div class="col-xs-9">
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="location" class="col-xs-3 col-form-label mr-2">Lokalizacja</label>
                    <div class="col-xs-9">
                        <input type="text" class="form-control" id="location" name="location">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="date" class="col-xs-3 col-form-label mr-2">Data</label>
                    <div class="col-xs-9">
                        <div class="input-group date"  data-provide="datepicker">
                            <input type="text" class="form-control datepicker" value="{{ date("d/m/Y") }}" id="date" name="date">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-xs-3 col-form-label mr-2">Opis</label>
                    <div class="col-xs-9">
                        <textarea rows="5" class="form-control" id="description" name="description"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-xs-3 col-xs-9">
                        <button type="submit" class="btn btn-info">Utwórz</button>
                    </div>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </div>
@endsection