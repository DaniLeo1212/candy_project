
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Agregar Nuevo Sabor</h1>
        <form action="{{ route('flavors.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nombre del Sabor:</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
    </div>
@endsection
