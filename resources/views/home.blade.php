@extends('layouts.main')

@section('title','HDC Events')

@section('content')

<div class="row justify-content-center">
    <div id="search-container" class="col-md-12">
        <h1 class="text-center mb-5">Busque um evento</h1>
        <form action="" class="mt-2">
            <input type="text" id="search" name="search" class="form-control w-50 m-auto" placeholder="Procurar evento">
        </form>
    </div>
</div>
<div id="events-container" class="col-md-12 justify-content-center mt-2 p-4">
    <h2 class="text-center mt-4 mb-2">Próximo eventos</h2>
    <p class="text-center">Veja os eventos dos próximos dias</p>
    <div id="cards-container" class="row justify-content-center">
        @foreach($events as $event)
            <div class="card col-md-3 m-1 p-0 w-25">
                @if($event->image == null)
                    <img src="/img/event_placeholder.jpg" alt="{{ $event->title }}" class="rounded-top">
                @else
                    <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="rounded-top">
                @endif
                <div class="card-body">
                    <p class="card-date">{{date('d/m/Y', strtotime($event->date))}}</p>
                    <h5 class="card-title">{{$event->title}}</h5>
                    <p class="card-participants">X participantes</p>
                    <a href="/events/{{ $event->id }}" class="btn btn-primary shadow">Saber mais</a>
                </div>
            </div>
        @endforeach
        @if(count($events)==0)
            <p class="text-center fw-bold mt-5 mb-5">Não há eventos disponíveis</p>
        @endif
    </div>
</div>

@endsection