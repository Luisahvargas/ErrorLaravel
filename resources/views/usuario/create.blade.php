@extends('layouts.app')

@section('titulo', 'registrar usuario')

@section('contenido')

<br>
    <h3>Registrar Usuario</h3>
    <form action="/usuarios" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="Nombre" class="form-label">Digite su nombre</label>
          <input type="text" class="form-control" id="Nombre" name="Nombre">
        </div>
        <div class="mb-3">
            <label for="Apellido" class="form-label">Digite su Apellido</label>
            <input type="text" class="form-control" id="Apellido" name="Apellido">
          </div>
        <div class="mb-3">
            <label for="Cedula" class="form-label">Digita la cedula</label>
            <input type="number" class="form-control" id="Cedula" name="Cedula">
        </div>
        <div class="mb-3">
            <label for="Email" class="form-label">Digite su Correo</label>
            <input type="text" class="form-control" id="Email" name="Email">
        </div>
        <div class="mb-3">
            <label for="Cargo" class="form-label">Digite su Cargo</label>
            <input type="text" class="form-control" id="Cargo" name="Cargo">
        </div>
        <br>
        <div class="mb-3">
            <label for="imagen" class="form-label">Cargar su foto</label>
            <input id="imagen" type="file"  name="imagen">
        </div>
        <br>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>

@endsection
