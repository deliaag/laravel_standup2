@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            View comedian
        </div>
        <div class="panel-body">

            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('comedians.index')}}">Inapoi la Comedianti</a>
            </div>

            <div class="form-group">
                <strong>Nume: </strong> {{ $comediant->name }}
            </div>

            <div class="form-group">
                <strong>Descriere: </strong> {{ $comediant->description }}
            </div>

        </div>
    </div>

@endsection
