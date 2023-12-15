@extends('layouts.master') 

 

@section('content') 

    <div class="panel panel-default"> 

        <div class="panel-heading"> 

            View Agenda 

        </div> 

        <div class="panel-body"> 

            <div class="pull-right"> 

                <a class="btn btn-default" href="{{ route('agendas.index') }}">Inapoi</a> 

            </div>  
 

            <!--ORA INCEPUT--> 

            <div class="form-group"> 

                <strong>INCEPE LA ORA: </strong>{{ $agenda->start}} 

            </div>

            <!--ORA FINAL--> 

            <div class="form-group"> 

                <strong>SE TERMINA LA ORA: </strong>{{ $agenda->final}} 

            </div>

            <!--ORA FINAL--> 

            <div class="form-group"> 

                <strong>DATA : </strong>{{ $agenda->date}} 

            </div>

            <!-- EVENT DETAILS -->

            <div class="form-group">

                <strong>ID_EVENT : </strong>{{ $agenda->event->id_event }}

            </div>

            <!-- COMEDIANT DETAILS -->

            <div class="form-group">

                <strong>ID_COMEDIANT : </strong>{{ $agenda->comediant->id_comediant }}

            </div>

        </div> 

    </div> 

@endsection 
