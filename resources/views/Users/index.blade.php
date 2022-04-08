@extends('layout')



@section('principal')

    <h1> {{$title}} </h1>

    <a href=" {{ route('crear') }} " type="button" class="btn btn-primary my-3"
    >Nuevo</a>


    @empty($users)
        No hay registros
    @endempty

    <ul>
        @foreach ($users as $user)
            <li>

                <a href=" {{ route('ver', $user->id ) }} ">
                    {{$user->name}}
                </a>

            </li>
        @endforeach

    </ul>

@endsection
