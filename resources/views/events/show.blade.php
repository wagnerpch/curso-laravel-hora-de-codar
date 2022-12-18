@extends('layouts.main')

@section('title', $event->title)

@section('content')

<div class="row justify-content-center align-items-center mt-5 mb-5">
    <div class="col-md-12">
        <h1 class="text-center mb-5">Dados do Evento</h1>
    </div>
    <div class="col-md-6 mb-5">
        <div class="img-fluid d-flex justify-content-center">
            @if($event->image == null)
                <img src="/img/event_placeholder.jpg" alt="{{$event->title}}" class="rounded w-75 shadow">
            @else
                <img src="/img/events/{{$event->image}}" alt="{{$event->title}}" class="rounded w-75 shadow">
            @endif
        </div>
    </div>
    <div class="col-md-6">
        <p class=""><ion-icon name="location-outline"></ion-icon> {{ $event->city }}</p>
        <p class=""><ion-icon name="people-outline"></ion-icon> X Participantes</p>
        <p class=""><ion-icon name="star-outline"></ion-icon> {{ $eventOwner['name'] }}</p>
        <a href="#" class="btn btn-warning shadow" id="event-submit" name="event-submit">Confirmar Presença</a>
        @if($event->items != null)
        <div class="mt-3">
            <h4 class="">O evento conta com:</h4>
            <ul class="list-group list-group-flush w-25">
                @foreach($event->items as $item)
                    <li class="list-group-item"><ion-icon name="play-outline"></ion-icon> {{$item}}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
    <div class="col-md-10">
        <p class="mt-2 mb-2">Descrição:</p>    
        <p class="mt-2 mb-2">{{$event->description}}</p>
    </div>
</div>

@endsection