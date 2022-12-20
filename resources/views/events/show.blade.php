@extends('layouts.main')

@section('title', $event->title)

@section('content')

<div class="row justify-content-center align-items-start m-2 m-md-4 shadow rounded">
    <div class="col-12">
        <h1 class="text-center my-4 my-md-5">Dados do Evento</h1>
    </div>
    <div class="col-12 col-md-4 col-lg-5 mb-4 mb-md-5">
        <div class="img-fluid d-flex justify-content-center">
            @if($event->image == null)
                <img src="/img/event_placeholder.jpg" alt="{{$event->title}}" class="rounded w-100 shadow">
            @else
                <img src="/img/events/{{$event->image}}" alt="{{$event->title}}" class="rounded w-100 shadow">
            @endif
        </div>
    </div>
    <div class="col-12 col-md-4 col-lg-2 mb-2 mb-md-5 text-center">
        <p><ion-icon name="calendar-outline"></ion-icon> {{ $event->date->format('d/m/Y') }}</p>
        <p><ion-icon name="location-outline"></ion-icon> {{ $event->city }}</p>
        <p><ion-icon name="people-outline"></ion-icon> {{ count($event->users) }} Participantes</p>
        <p><ion-icon name="star-outline"></ion-icon> {{ $eventOwner['name'] }}</p>
    </div>
    <div class="col-12 col-md-4 col-lg-4 ms-xs-3 mb-4">
        @if($event->items != null)
            <p class="fs-5">O evento conta com:</p>
            <ul class="list-group list-group-flush w-75">
                @foreach($event->items as $item)
                    <li class="list-group-item"><ion-icon name="play-outline"></ion-icon> {{$item}}</li>
                @endforeach
            </ul>
        @endif
    </div>
    @if(!$hasUserJoined)
    <div class="col-12 col-md-6 my-4 text-center">
        <form action="/events/join/{{ $event->id }}" method="POST">
            @csrf
            <a href="/events/join/{{ $event->id }}" class="btn btn-warning shadow w-75 py-2 fs-4" id="event-submit" name="event-submit" onclick="event.preventDefault();this.closest('form').submit();">Confirmar presença</a>
        </form>
    </div>
    @else
    <div class="col-12 col-md-6 my-4 text-center">
        <p class="fs-4 bg-primary text-white rounded shadow py-2">Você já está participando do evento</p>
    </div>
    @endif
    <div class="col-12 col-md-10 my-4">
        <p class="my-2 fs-4">Descrição:</p>    
        <p class="my-2">{{$event->description}}</p>
    </div>
</div>

@endsection