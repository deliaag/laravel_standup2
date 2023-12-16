@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <div class="mt-4">
                        <a href="{{ route('events.index') }}" class="btn btn-primary">Evenimente</a>
                        <a href="{{ route('comedians.index') }}" class="btn btn-primary">Comedianti</a>
                        <a href="{{ route('contacts.index') }}" class="btn btn-primary">Contacte</a>
                        <a href="{{ route('agendas.index') }}" class="btn btn-primary">Agende</a>
                        <a href="{{ route('eventContacts.index') }}" class="btn btn-primary">Event Contact</a>
                        <a href="{{ route('partnerSponsors.index') }}" class="btn btn-primary">Parteneri/Sponsori</a>
                    </div>
            </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
