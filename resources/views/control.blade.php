@section('content') 

    <div class="container"> 

        <button class="btn btn-primary" onclick="window.location.href='{{ route('events.index') }}'">Evenimente</button> 

        <button class="btn btn-primary" onclick="window.location.href='{{ route('comedians.index') }}'">Comedianti</button>

        <button class="btn btn-primary" onclick="window.location.href='{{ route('contacts.index') }}'">Contacte</button> 


        <!-- Alte butoane sau funcționalități --> 

    </div> 

@endsection 
