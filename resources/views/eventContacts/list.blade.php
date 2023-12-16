@extends('layouts.app') 

@section('content') 

    @if ($message = Session::get('success')) 

        <div class="alert alert-success"> 

            <p>{{ $message }}</p> 

        </div> 

    @endif 

    <div class="panel panel-default"> 

        <div class="panel-heading"> 

            Lista event contact 

        <div class="panel-body"> 

            <div class="form-group"> 

                <div class="pull-right">
                    @if (Auth::user()->admin === 1)


                    <a href="/eventContacts/create" class="btn btn-default">Adaugare event contact Nou</a>

                    @endif

                </div> 

            </div> 

            <table class="table table-bordered table-stripped"> 

                <tr> 

                    <th width="20">No</th> 

                    <th> EVENIMENT: </th>

                    <th> CONTACT: </th> 

                    <th width="300">Actiune</th> 

                </tr> 

                @if (count($eventContacts) > 0) 

                    @php $i = 0 @endphp 

                    @foreach ($eventContacts as $key => $eventContact) 

                        <tr>

                            <td>{{ ++$i }}</td>

                            <td>{{ $eventContact->event->name }}</td> 

                            <td>{{ $eventContact->contact->name }}</td>

                            <td> 

                                <a class="btn btn-success" href="{{ route('eventContacts.show', $eventContact->id_rep_cont) }}">Vizualizare</a>
                                @if (Auth::user()->admin === 1)

                                <a class="btn btn-primary" href="{{ route('eventContacts.edit', $eventContact->id_rep_cont) }}">Modificare</a> 

                                {{ Form::open(['method' => 'DELETE', 'route' => ['agendas.destroy', $eventContact->id_rep_cont], 'style' => 'display:inline']) }} 

                                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }} 

                                {{ Form::close() }}

                                @endif

                            </td> 

                        </tr>

                    @endforeach 

                @else 

                    <tr> 

                        <td colspan="4">Nu exista event contact!</td> 

                    </tr> 

                @endif 

            </table>

            <a class="btn btn-default" href="http://127.0.0.1:8000/">Inapoi</a>
            <button class="btn btn-primary" onclick="window.location.href='{{route('comedians.index')}}'">Comedianti</button>
            <button class="btn btn-primary" onclick="window.location.href='{{route('events.index')}}'">Evenimente</button>
            <button class="btn btn-primary" onclick="window.location.href='{{route('contacts.index')}}'">Contacte</button>
            <button class="btn btn-primary" onclick="window.location.href='{{route('agendas.index')}}'"> Agenda</button>

            <!-- Introduce nr pagina --> 

            

        </div> 

    </div> 

@endsection
