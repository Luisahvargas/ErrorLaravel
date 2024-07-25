    @extends('layouts.app')

    @section('titulo', 'listado de usuarios')

    @section('contenido')

    <br>
<h3 class="text-center">Listado de usuarios activos</h3>
<br>
<div class="row">
    @foreach ($course as $user)
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <img style="height: 200px; width:250px; margin:20px" src="{{ Storage::url($user->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $user->Nombre }}</h5>
                  <h5 class="card-title">{{ $user->Apellido }}</h5>
                  <p class="card-text">{{ $user->Cedula }}</p>
                  <p class="card-text">{{ $user->Email }}</p>
                  <p class="card-text">{{ $user->Cargo }}</p>
                  <a href="/usuario/{{$user->id}}" class="btn btn-success">Ver detalles</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

    @endsection

