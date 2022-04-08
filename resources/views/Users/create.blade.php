@extends('layout')


@section('principal')

    <h1>creando un nuevo usuario en el sistema</h1>

    <form method="POST" action="{{ route('nuevoUsuario') }}">
        {{ csrf_field() }}

        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" name="nombre_v" class="form-control" id="name" placeholder="ej. Juan Perez" value="{{ old('nombre_v') }}">

            @if ($errors->has('nombre_v'))
                <div class="alert alert-danger" role="alert">
                    {{ $errors->first('nombre_v') }}
                </div>
            @endif

        </div>

        <div class="mb-3">
            <label for="lastName" class="form-label">Apellido</label>
            <input type="text" name="apellido_v" class="form-control" id="lastName" placeholder="Escribe aquí tu apellido">
            @if ($errors->has('apellido_v'))
                <div class="alert alert-danger" role="alert">
                    {{ $errors->first('apellido_v') }}
                </div>
            @endif

        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email"  name="correo_v">
            @if ($errors->has('correo_v'))
                <div class="alert alert-danger" role="alert">
                    {{ $errors->first('correo_v') }}
                </div>
            @endif
        </div>


        <button type="submit" class="btn btn-primary">Nuevo</button>
    </form>


@endsection
