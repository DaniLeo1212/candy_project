
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles del Sabor</h1>
        <p><strong>Nombre:</strong> {{ $flavor->name }}</p>
        <a href="{{ route('flavors.index') }}" class="btn btn-primary">Volver</a>
    </div>
@endsection
