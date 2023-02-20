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
                    <label for="users" class="form-label">Estudiante: {{$user->name}}</label>
                </div>
    <div>
        <label for="trimester">Trimester:</label>
        <input type="number" name="trimester" id="trimester" value="{{$trimester->trimester}}">
    </div>
    <div>
        <label for="subject">Subject:</label>
        <input type="text" name="subject" id="subject" value="{{ old('subject') }}">
    </div>
    <div>
        <label for="exam">Exam:</label>
        <input type="number" name="exam" id="exam" value="{{ old('exam') }}">
    </div>
    <div>
        <label for="year">Year:</label>
        <input type="number" name="year" id="year" value="{{ old('year') }}">
    </div>
    <div>
        <label for="grade">Grade:</label>
        <input type="number" name="grade" id="grade" value="{{ old('grade') }}">
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