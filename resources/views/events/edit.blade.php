@extends('layouts.main')

@section('title','Editando')

@section('content')

<div class="row justify-content-center my-5">
    <div class="col-md-6" id="event-create-container">
        <h1 class="text-center mb-5">Editando: {{ $event->title }}</h1>
        <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group mt-2">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <p class="text-left">Imagem atual:</p>
                        <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="w-75 rounded shadow">
                    </div>
                    <div class="col-6">
                        <p>Selecione abaixo nova imagem, se desejar alterar:</p>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>
                </div>
            </div>
            <div class="form-group mt-2">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento" value="{{ $event->title }}">
            </div>
            <div class="form-group mt-2">
                <label for="title">Data do evento:</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ $event->date->format('Y-m-d') }}">
            </div>
            <div class="form-group mt-2">
                <label for="city">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento" value="{{ $event->city }}">
            </div>
            <div class="form-group mt-2">
                <label for="private">O evento é privado?</label>
                <select class="form-control" id="private" name="private">
                    <option value="0" {{ $event->private == 0 ? "selected" : ""}} >Não</option>
                    <option value="1" {{ $event->private == 1 ? "selected" : ""}} >Sim</option>
                </select>
            </div>
            <div class="form-group mt-2">
                <label for="description">Descrição:</label>
                <textarea class="form-control" id="description" name="description" placeholder="O que vai acontecer no evento?" >{{ $event->description }}</textarea>
            </div>
            <div class="form-group mt-2">
                <label for="description">Adicione itens de infraestrutura:</label>
                    <div class="form-group">
                        <input type="checkbox" id="items[]" name="items[]" value="Cadeiras"> Cadeiras
                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="items[]" name="items[]" value="Palco"> Palco
                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="items[]" name="items[]" value="Cerveja grátis"> Cerveja grátis
                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="items[]" name="items[]" value="Open food"> Open food
                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="items[]" name="items[]" value="Brindes"> Brindes
                    </div>
            </div>
            <div class="form-group my-4 text-center">
                <input type="submit" class="form-control btn btn-primary w-50" value="Salvar">
            </div>
        </form>
    </div>
</div>

@endsection