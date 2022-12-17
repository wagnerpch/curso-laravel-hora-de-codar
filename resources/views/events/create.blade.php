@extends('layouts.main')

@section('title','Criar Evento')

@section('content')

<div class="row justify-content-center mt-5 mb-5">
    <div class="col-md-6" id="event-create-container">
        <h1 class="text-center mb-5">Crie o seu evento</h1>
        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mt-2">
                <label for="image">Imagem:</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <div class="form-group mt-2">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento"></input>
            </div>
            <div class="form-group mt-2">
                <label for="title">Data do evento:</label>
                <input type="date" class="form-control" id="date" name="date"></input>
            </div>
            <div class="form-group mt-2">
                <label for="city">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento"></input>
            </div>
            <div class="form-group mt-2">
                <label for="private">O evento é privado?</label>
                <select class="form-control" id="private" name="private">
                    <option value="0" selected>Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group mt-2">
                <label for="description">Descrição:</label>
                <textarea class="form-control" id="description" name="description" placeholder="O que vai acontecer no evento?"></textarea>
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
            <div class="form-group mt-4 mb-4 text-center">
                <input type="submit" class="form-control btn btn-primary w-50" id="criar" name="criar" value="Criar Evento"></input>
            </div>
        </form>
    </div>
</div>

@endsection