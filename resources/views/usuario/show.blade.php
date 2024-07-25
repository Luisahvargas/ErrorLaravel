@extends('layouts.app')

@section('titulo', 'Detalle de los usuarios')

@section('contenido')

<div class="text-center">
    <img style="height: 400px; width:500px; margin:20px" src="{{ Storage::url($course->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $course->Nombre }}</h5>
    </div>
    <br>
    <a href="/usuario/{{$course->id}}/edit" class="btn btn-warning">Ver detalles</a>
    {{-- <a href="/usuario/{{$user->id}}/edit" class="btn btn-dark">Editar curso</a> --}}
</div>

@endsection
