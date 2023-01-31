@extends('layouts.app')

@section('content')
    <h1>Clase 1ºA</h1>
    <form class="justify-content-center " action="{{ route('storeUser') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Escribe el nombre del estudiante">
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Apellidos</label>
            <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Escribe los apellidos del estudiante">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Escribe el email del estudiante">
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Fotografía</label>
            <input type="url" name="img" class="form-control" id="img" placeholder="Añade foto del estudiante">
        </div>
        <div>
            <a class="returnButton"  href="{{ route('home') }}">Volver</a>
            <button type="submit" value="saveButton" class="createButtonForm"> Añadir estudiante
            </button>
        </div>
    </form>
@endsection