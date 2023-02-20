@extends('layouts.app')

@section('content')
    <div class="containerFormStudent">
        <div class="headings">
            <h5>Crear notas</h5>
            <h5>Clase 1ºA</h5>
        </div>
        <div class="createForm">
        <form class="justify-content-center" action="{{ route('storeGrade', ['id'=>$user->id] )}}" method="post" id="form">
        @csrf
                <div class="mb-3">
                    <label for="users" class="form-label">Estudiante: {{$user->name}} {{$user->lastname}}</label>
                </div>
    <div>
        <label for="trimester" class="form-label">Trimestre</label>
        <input type="number" name="trimester" class="form-control" id="trimester"  value="{{ old('trimester') }}">
    </div>
    <div>
        <label for="subject" class="form-label">Asignatura</label>
        <select name="subject" class="form-control" id="subject">
                        <option value="Matemáticas">Matemáticas</option>
                        <option value="Lengua">Lengua</option>
                        <option value="Geografía">Geografía</option>
                        <option value="Historia">Historia</option>
                        <option value="Inglés">Inglés</option>
        </select>
    </div>
    <div>
    <label for="exam" class="form-label">Examen</label>
        <input type="number" name="exam" class="form-control" id="exam"  value="{{ old('exam') }}">
    </div>
    <div>
    <label for="year" class="form-label">Año</label>
        <input type="number" name="year" class="form-control" id="year"  value="{{ old('year') }}">
    </div>
    <div>
    <label for="grade" class="form-label">Nota</label>
        <input type="number" name="grade" class="form-control" id="grade"  value="{{ old('grade') }}">
    </div>

    <div>
    <label for="idUser" class="form-label">Estudiante</label>
        <input type="number" name="idUser" class="form-control" id="idUser"  value="{{ $user->id }}">
    </div>

        <div class="formBottomActions">
            <a href="{{ route('home') }}"> 
                <img src="https://res.cloudinary.com/de1i08drf/image/upload/v1675151615/Atenea/flechaAzulIzquierda_ab7yvw.png" alt= "volver a inicio"> 
            </a>
            <input type="reset" name="reset "value="Resetear datos" class="resetButton">
            <button type="submit" value="saveButton" class="formButton" id="btnSend">Añadir calificaciones
            </button>
            </form>
        </div>
    </div>
@endsection