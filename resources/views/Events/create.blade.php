@extends('layouts.main')
@section('title','Criar Evento')
@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="title">Imagem do Envento:</label>
        <input class="form-control-file" id="image" type="file" name="image">
      </div>
      <div class="form-group">
        <label for="title">Evento:</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
      </div>
      <div class="form-group">
        <label for="title">Cidade:</label>
        <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
      </div>
      <div class="form-group">
        <label for="title">Data do Evento:</label>
        <input type="date" class="form-control" id="date" name="date" >
      </div>
      <div class="form-group">
        <label for="title">O evento é privado?</label>
        <select name="private" id="private" class="form-control">
          <option value="0">Não</option>
          <option value="1">Sim</option>
        </select>
      </div>
      <div class="form-group">
        <label for="title">Descrição:</label>
        <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
      </div>
      <div class="form-group">
        <label for="title">Adicione os itens na infraestrutura :</label>
        <div class="form-group">
          <input type="checkbox" name="items[]" value="Mesas"> Mesas
        </div>
        <div class="form-group">
          <input type="checkbox" name="items[]" value="Palco"> Palco
        </div>
        <div class="form-group">
          <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
        </div>
        <div class="form-group">
          <input type="checkbox" name="items[]" value="Banheiro"> Banheiro
        </div>
      </div>

      <input type="submit" class="btn btn-primary" value="Criar Evento">
    </form>
  </div> 

@endsection