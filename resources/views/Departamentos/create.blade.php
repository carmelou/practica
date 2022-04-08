@extends('layout')


@section('principal')

    <h1>creando un nuevo departamento en el sistema</h1>

    <form method="POST" action="{{ route('nuevoDepartamento') }}">
        {{ csrf_field() }}

        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" name="name_v" class="form-control" id="name"  value="{{ old('name_v') }}">
     </div>

    
        <button type="submit" class="btn btn-primary">Nuevo</button>
    </form>


@endsection
