@extends('layouts.main')

@section('title','HDC Events')

@section('content')

<div class="row justify-content-center">
    <div class="col" id="search-container">
        <h1 class="text-center mb-5">Busque um evento</h1>
        <form action="/" method="GET" class="mt-2">
            <div class="row justify-content-center">
                <div class="col-10 col-md-6 mt-2">
                    <input type="text" class="form-control m-auto" id="search" name="search" placeholder="Procurar evento">
                </div>
                <div class="col-10 col-md-2 col-lg-2 mt-2">
                    <input type="submit" class="form-control btn btn-primary m-auto" value="Pesquisar">
                </div>
            </div>
        </form>
    </div>
</div>
<div class="row">
    <div class="col">
        @if($search)
            <h2 class="text-center mt-4 mb-2">Próximo eventos</h2>
            <p class="text-center">Veja os eventos dos próximos dias</p>
        @else
            <h2 class="text-center mt-4 mb-2">Buscando por: {{ $search }}</h2>
        @endif
    </div>
</div>
<div class="row justify-content-center">
    @foreach($events as $event)
    <div class="col-10 col-md-6 col-lg-3 mb-2">
        <div class="card">
            @if($event->image == null)
                <img src="/img/event_placeholder.jpg" alt="{{ $event->title }}" class="card-img-top rounded-top" style="max-height: 8em;">
            @else
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="card-img-top rounded-top" style="max-height: 8em;">
            @endif
            <div class="card-body">
                <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                <h5 class="card-title">{{ $event->title }}</h5>
                <p class="card-text">{{ count($event->users) }} participantes</p>
                <a href="/events/{{ $event->id }}" class="btn btn-primary shadow">Saber mais</a>
            </div>
        </div>
    </div>
    @endforeach
    @if(count($events)==0 && $search)
        <p class="text-center fw-bold mt-5 mb-5">Não foi possível encontrar nenhum evento com {{ $search }}! <a href="/">Ver todos eventos</a></p>
    @elseif((count($events)==0))
        <p class="text-center fw-bold mt-5 mb-5">Não há eventos disponíveis</p>
    @endif
</div>

@endsection