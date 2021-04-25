@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h3>Criar evento</h3>
    <hr>
    <form action="/events" method="post" enctype="multipart/form-data">
        @CSRF

        <div class="form-group">
            <label for="image">Foto do evento: </label>
            <input type="file" class="form-control-file" id="image" name="image" required>
        </div>
        
        <div class="form-group">
            <label for="title">Evento: </label>
            <input type="text" class="form-control" id="title" name="title" placeholder="nome do evento..." required>
        </div>

        <div class="form-group">
            <label for="title">Data do evento: </label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>

        <div class="form-group">
            <label for="title">Cidade: </label>
            <input type="text" class="form-control" id="city" name="city" placeholder="local do evento" required>
        </div>

        <div class="form-group">
            <label for="title">O evento é privado? </label>
            <select name="private" id="private" class="form-control" required>
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>

        <div class="form-group">
            <label for="title">Descrição: </label>
            <textarea name="description" id="description" class="form-control" placeholder="o que vai acontecer no evento?" required></textarea>
        </div>

        <div class="form-group">
            <label for="title">Itens de Infraestrutura</label>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
            </div>

            <div class="form-group">
                <input type="checkbox" name="items[]" value="Palco"> Palco
            </div>

            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cerveja grátis"> Cerveja Grátis
            </div>

            <div class="form-group">
                <input type="checkbox" name="items[]" value="Open food"> Open Food
            </div>
        </div>

        <input type="submit" class="btn btn-info" value="criar evento">
        
    </form>
</div>
@endsection