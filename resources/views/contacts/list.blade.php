@extends('layouts.master') 

@section('content') 

    @if ($message = Session::get('success')) 

        <div class="alert alert-success"> 

            <p>{{ $message }}</p> 

        </div> 

    @endif 

    <div class="panel panel-default"> 

        <div class="panel-heading"> 

            Lista contactelor 

        <div class="panel-body"> 

            <div class="form-group"> 

                <div class="pull-right"> 

                    <a href="/contacts/create" class="btn btn-default">Adaugare Contact Nou</a> 

                </div> 

            </div> 

            <table class="table table-bordered table-stripped"> 

                <tr> 

                    <th width="20">No</th> 

                    <th>Titlu</th> 

                    <th>Descriere</th> 

                    <th width="300">Actiune</th> 

                </tr> 

                @if (count($contacts) > 0) 

                    @foreach ($contacts as $key => $contact) 

                        <tr> 

                            <td>{{ ++$i }}</td> 

                            <td>{{ $contact->name }}</td> 

                            <td>{{ $contact->email }}</td> 

                            <td>{{ $contact->phone }}</td> 

                            <td> 

                                <a class="btn btn-success" href="{{ route('contacts.show', $contact->id_contact) }}">Vizualizare</a> 

                                <a class="btn btn-primary" href="{{ route('contacts.edit', $contact->id_contact) }}">Modificare</a> 

                                {{ Form::open(['method' => 'DELETE', 'route' => ['contacts.destroy', $contact->id_contact], 'style' => 'display:inline']) }} 

                                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }} 

                                {{ Form::close() }} 

                            </td> 

                        </tr> 

                    @endforeach 

                @else 

                    <tr> 

                        <td colspan="4">Nu exista contacte!</td> 

                    </tr> 

                @endif 

            </table>
            <a class="btn btn-default" href="http://127.0.0.1:8000/">Inapoi</a> 

            <!-- Introduce nr pagina --> 

            {{ $contacts->render() }} 

        </div> 

    </div> 

@endsection 
