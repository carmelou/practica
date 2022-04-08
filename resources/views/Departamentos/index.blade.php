@extends('layout')



@section('principal')


    <a href=" {{ route('creard') }} " type="button" class="btn btn-primary my-3"
    >Nuevo</a>


    @empty($departamentos)
        No hay registros
    @endempty

    <ul>
        @foreach ($departamentos as $departamento)
            <li>

                <a href=" {{ route('verd', $departamento->id ) }} ">
                    {{$departamento->name}}
                </a>

            </li>
        @endforeach

    </ul>

@endsection
