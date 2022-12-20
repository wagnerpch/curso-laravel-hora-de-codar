@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div class="row justify-content-center align-items-center my-4">
    <div class="col-12 col-md-10">
        <h1 class="text-center fw-bold orange-500">Meus eventos</h1>
    </div>
</div>
<div class="row justify-content-center align-items-center mb-5">
    <div class="col-12 col-md-10">
        @if(count($events) > 0)
            <div class="row justify-content-center align-items-center my-3 mx-1 py-2 shadow rounded bg-secondary bg-gradient text-white">
                <div class="col-2 col-md-2">
                    <p class="text-center my-1">#</p>
                </div>
                <div class="col-5 col-md-4">
                    <p class="text-center my-1">Nome</p>
                </div>
                <div class="col-5 col-md-3">
                    <p class="text-center my-1">Participantes</p>
                </div>
                <div class="col-md-3 d-none d-md-block">
                    <p class="text-center my-1">Ações</p>
                </div>
            </div>
            @foreach($events as $event)
                <div class="row justify-content-center d-flex align-items-center mb-3 mx-1 py-2 shadow rounded bg-light bg-gradient">
                    <div class="col-2 col-md-2">
                        <p class="text-center my-2">{{ $loop->index+1 }}</p>
                    </div>
                    <div class="col-5 col-md-4">
                        <a class="text-center my-2" href="/events/{{ $event->id }}"> {{ $event->title }}</a>
                    </div>
                    <div class="col-5 col-md-3">
                        <p class="text-center my-2">{{ count($event->users) }}</p>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="row justify-content-center align-items-center mt-2 mt-md-0">
                            <div class="col-6 col-md-12 col-lg-6 mb-1">
                                <a class="btn btn-primary w-100" href="/events/edit/{{ $event->id }}"><ion-icon name='create-outline'></ion-icon> Editar</a>
                            </div>
                            <div class="col-6 col-md-12 col-lg-6 mb-1">
                                <form action="/events/{{ $event->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger w-100"><ion-icon name='trash-outline'></ion-icon> Deletar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>Você ainda não tem eventos, <a href="/events/create"> aproveite e crie uma agora</a>.</p>
        @endif
    </div>
</div>
<div class="row justify-content-center align-items-center my-4">
    <div class="col-12 col-md-10">
        <h1 class="text-center fw-bold orange-500">Minhas inscrições</h1>
    </div>
</div>
<div class="row justify-content-center align-items-center mb-5">
    <div class="col-12 col-md-10">
        @if(count($eventsAsParticipant) > 0)
            <div class="row justify-content-center align-items-center my-3 mx-1 py-2 shadow rounded bg-secondary bg-gradient text-white">
                <div class="col-2 col-md-2">
                    <p class="text-center my-1">#</p>
                </div>
                <div class="col-5 col-md-4">
                    <p class="text-center my-1">Nome</p>
                </div>
                <div class="col-5 col-md-3">
                    <p class="text-center my-1">Participantes</p>
                </div>
                <div class="col-md-3 d-none d-md-block">
                    <p class="text-center my-1">Ações</p>
                </div>
            </div>
            @foreach($eventsAsParticipant as $event)
                <div class="row justify-content-center d-flex align-items-center mb-3 mx-1 py-2 shadow rounded bg-light bg-gradient">
                    <div class="col-2 col-md-2">
                        <p class="text-center my-2">{{ $loop->index+1 }}</p>
                    </div>
                    <div class="col-5 col-md-4">
                        <a class="text-center my-2" href="/events/{{ $event->id }}"> {{ $event->title }}</a>
                    </div>
                    <div class="col-5 col-md-3">
                        <p class="text-center my-2">{{ count($event->users) }}</p>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="row justify-content-center align-items-center mt-2 mt-md-0">
                            <div class="col-8 col-md-12 col-lg-8 mb-1">
                                <form action="/events/leave/{{ $event->id }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-danger w-100"><ion-icon name='trash-outline'></ion-icon> Cancelar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>Você não fez inscrições nos eventos, <a href="/"> veja os eventos disponíveis</a>.</p>
        @endif
    </div>
</div>
@endsection