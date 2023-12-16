@extends('layouts.app') 

@section('content') 

    <div class="panel panel-default"> 

        <div class="panel-heading">Adaugă Eveniment </div> 

        <div class="panel-body"> 

            @if (count($errors) > 0) 

                <div class="alert alert-danger"> 

                    <strong>Errors:</strong> 

                    <ul> 

                        @foreach ($errors->all() as $error) 

                            <li>{{ $error }}</li> 

                        @endforeach 

                    </ul> 

                </div> 

            @endif 

            {{ Form::open(array('route' => 'events.store', 'method' => 'POST')) }} 

            <!--Name--> 

            <div class="form-group"> 

                <label for="name">Nume</label> 

           <input type="text" name="name" class="form-control" value="{{ old('name') }}"> 

            </div> 

            <!--Description--> 

            <div class="form-group"> 

                <label for="description">Descriere</label><textarea name="description" class="form-control" rows="3">{{ old('description') }}</textarea> 

            </div> 

            <!--Date--> 

            <div class="form-group"> 

                <label for="date">Data</label> 

       <input type="date" name="date" class="form-control" value="{{ old('date') }}"> 

            </div> 

            <!--Location--> 

            <div class="form-group"> 

                <label for="location">Locatia</label> 

    <input type="text" name="location" class="form-control" value="{{ old('location') }}"> 

            </div> 

 

            <div class="form-group"> 

                <input type="submit" value="Adauga Eveniment" class="btn btn-info"> 

                <a href="{{ route('events.index') }}" class="btn btn-primary">Cancel</a> 

            </div> 

            {{ Form::close() }} 

        </div> 

    </div> 

@endsection
