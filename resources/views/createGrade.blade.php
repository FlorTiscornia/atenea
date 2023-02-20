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
                <div>
                    <label for="users" class="form-label">Estudiante: {{$user->name}}</label>
                </div>
                <div class="mb-3">
                    <label for="trimester" class="form-label">Trimestre</label>
                    <input type="text" name="trimester" class="form-control" id="trimester" placeholder="Escribe el trimestre">
                </div>
                <h4>Lengua</h4>
                <div class="mb-3">
                    <div class="row g-3">
                            <div class="col-sm-4">
                                <input type="number" class="form-control" placeholder="Examen 1" aria-label="Examen 1">
                            </div>
                            <div class="col-sm">
                                <input type="number" class="form-control" placeholder="Examen 2" aria-label="Examen 2">
                            </div>
                            <div class="col-sm">
                                <input type="number" class="form-control" placeholder="Examen 3" aria-label="Examen 3">
                            </div>
                    </div>
                </div>
                <h4>Matemáticas</h4>
                <div class="mb-3">
                    <div class="row g-3">
                            <div class="col-sm-4">
                                <input type="number" class="form-control" placeholder="Examen 1" aria-label="Examen 1">
                            </div>
                            <div class="col-sm">
                                <input type="number" class="form-control" placeholder="Examen 2" aria-label="Examen 2">
                            </div>
                            <div class="col-sm">
                                <input type="number" class="form-control" placeholder="Examen 3" aria-label="Examen 3">
                            </div>
                    </div>
                </div>
                <h4>Inglés</h4>
                <div class="mb-3">
                    <div class="row g-3">
                            <div class="col-sm-4">
                                <input type="number" class="form-control" placeholder="Examen 1" aria-label="Examen 1">
                            </div>
                            <div class="col-sm">
                                <input type="number" class="form-control" placeholder="Examen 2" aria-label="Examen 2">
                            </div>
                            <div class="col-sm">
                                <input type="number" class="form-control" placeholder="Examen 3" aria-label="Examen 3">
                            </div>
                    </div>
                </div>
                <h4>Historia</h4>
                <div class="mb-3">
                <div class="row g-3">
                        <div class="col-sm-4">
                            <input type="number" class="form-control" placeholder="Examen 1" aria-label="Examen 1">
                        </div>
                        <div class="col-sm">
                            <input type="number" class="form-control" placeholder="Examen 2" aria-label="Examen 2">
                        </div>
                        <div class="col-sm">
                            <input type="number" class="form-control" placeholder="Examen 3" aria-label="Examen 3">
                        </div>
                </div>
                <h4>Geografía</h4>
                <div class="mb-3">
                <div class="row g-3">
                        <div class="col-sm-4">
                            <input type="number" class="form-control" placeholder="Examen 1" aria-label="Examen 1">
                        </div>
                        <div class="col-sm">
                            <input type="number" class="form-control" placeholder="Examen 2" aria-label="Examen 2">
                        </div>
                        <div class="col-sm">
                            <input type="number" class="form-control" placeholder="Examen 3" aria-label="Examen 3">
                        </div>
                </div>  
                    </div>
            
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