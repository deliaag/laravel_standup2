@extends('layouts.master')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Modificare informatii Comediant
        </div>
        <div class="panel-body">

            <!-- Exista inregistrari in tabelul task -->
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Eroare:</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Populez campurile formularului cu datele aferente din tabela task -->
            {!! Form::model($comediant, ['method' => 'PATCH', 'route' => ['comedians.update', $comediant->id_comediant]]) !!}
                <div class="form-group">
                    <label for="name">Nume</label>
                    <input type="text" name="name" class="form-control" value="{{ $comediant->name }}">
                </div>

                <div class="form-group">
                    <label for="description">Descriere</label>
                    <textarea name="description" class="form-control" rows="3">{{ $comediant->description }}</textarea>
                </div>

                <div class="form-group">
                    <input type="submit" value="Salvare Modificari" class="btn btn-info">
                    <a href="{{ route('comedians.index') }}" class="btn btn-default">Cancel</a>
                </div>
            {!! Form::close() !!}

        </div>
    </div>

@endsection
