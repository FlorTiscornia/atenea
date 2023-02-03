@extends('layouts.app')

@section('content')
    <div class="containerFormStudent">
        <div class="headings">
            <h5>Crear estudiante</h5>
            <h5>Clase 1ºA</h5>
        </div>
        <div class="createForm">    
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
                    <input type="email" id="email" name="email" class="form-control" id="email" placeholder="Escribe el email del estudiante">
                    <p id="errorEmail"></p>
                </div>
                <div class="mb-3">
                    <label for="img" class="form-label">Fotografía</label>
                    <input type="url" name="img" class="form-control" id="img" placeholder="Añade foto del estudiante">
                </div>
        </div>
        <div class="formBottomActions">
            <a href="{{ route('home') }}"> 
                <img src="https://res.cloudinary.com/de1i08drf/image/upload/v1675151615/Atenea/flechaAzulIzquierda_ab7yvw.png" alt= "volver a inicio"> 
            </a>
            <input type="reset" name="reset "value="Resetear datos" class="resetButton">
            <button type="submit" value="saveButton" class="formButton" id="createStudentButton">Añadir estudiante
            </button>
        </div>
            </form>
        </div>
    </div>
@endsection