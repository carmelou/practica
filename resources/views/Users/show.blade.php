@extends('layout')

@section('principal')
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">  {{ $user->lastName }} </h5>
            <h6 class="card-subtitle mb-2 text-muted">  {{ $user->name }} {{ $user->lastName }} </h6>
            <p class="card-text"> {{ $user->email }}</p>
        </div>
    </div>

@endsection
