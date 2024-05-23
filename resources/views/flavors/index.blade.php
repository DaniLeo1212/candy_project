

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Sabores</h1>
        <ul>
            @foreach ($flavors as $flavor)
                <li>{{ $flavor->name }}</li>
            @endforeach
        </ul>
    </div>
@endsection
