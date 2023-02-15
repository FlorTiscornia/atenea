@extends('layouts.app')

@section('content')
    <div class="containerFormStudent">
        <div class="headings">
            <h5>Crear nota</h5>
            <h5>Clase 1ºA</h5>
        </div>
        <div class="createForm">    
            <form class="justify-content-center" action="{{ route('storeGrade') }}" method="post" id="form">
                @csrf
                <div class="mb-3">
                    <label for="trimester" class="form-label">Trimestre</label>
                    <input type="text" name="trimester" class="form-control" id="trimester" placeholder="Escribe el trimestre">
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label">Asignatura</label>
                    <input type="text" name="subject" class="form-control" id="subject" placeholder="Escribe la asignatura">
                </div>
                <div class="mb-3">
                    <label for="exam" class="form-label">Examen</label>
                    <input type="text" id="exam" name="exam" class="form-control" placeholder="Escribe la nota del examen">
                </div>
        </div>
        <div class="formBottomActions">
            <a href="{{ route('home') }}"> 
                <img src="https://res.cloudinary.com/de1i08drf/image/upload/v1675151615/Atenea/flechaAzulIzquierda_ab7yvw.png" alt= "volver a inicio"> 
            </a>
            <input type="reset" name="reset "value="Resetear datos" class="resetButton">
            <button type="submit" value="saveButton" class="formButton" id="btnSend">Añadir calificación
            </button>
        </div>
            </form>
        </div>
    </div>
@endsection