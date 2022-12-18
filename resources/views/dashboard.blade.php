@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div class="row justify-content-center align-items-center mt-5 mb-5">
    <div class="col-12 col-md-10">
        <h1>Meus eventos</h1>
    </div>
</div>
<div class="row justify-content-center align-items-center mt-5 mb-5">
    <div class="col-12 col-md-10">
        @if(1 > 0)
            
        @else
            <p>Você ainda não tem eventos, <a href="/events/create"> aproveite e crie uma agora</a>.</p>
        @endif
    </div>
</div>

@endsection
