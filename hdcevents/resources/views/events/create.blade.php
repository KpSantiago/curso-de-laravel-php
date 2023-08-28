@extends('layout.main')

@section('title', 'Criar Evento')

@section('content')

    <div class="formContainer">
        <form method='GET' action="event/create">
            @csrf
            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" name="title" id="title" placeholder="Nome do evento">
            </div>
            <div class="form-group">
                <label for="city">Cidade</label>
                <input type="text" name="city" id="city" placeholder="Cidade do evento">
            </div>
            <div class="form-group">
                <label for="private">Evento Privado</label>
                <select name="private" id="private">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="participants">Número de participantes</label>
                <input type="number" name="participants" id="participants">
            </div>
            <div class="form-group">
                <label for="description">Descrição do evento</label>
                <textarea name="description" id="description" cols="30" rows="7"></textarea>
            </div>
            <button type="submit">Criar Evento</button>
        </form>
    </div>

@endsection
