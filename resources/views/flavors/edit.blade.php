

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Sabor</h1>
        <form action="{{ route('flavors.update', $flavor->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nombre del Sabor:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $flavor->name }}">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
@endsection
