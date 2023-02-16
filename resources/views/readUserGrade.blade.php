@extends('layouts.app')

@section('content')

        <div class="conteinerStudent">
            <div id="photoContainer">
                <img id="photoUser" src='{{ ("$user->img") }}' alt='Foto de {{ ("$user->name") }} ' width=10%>
            </div>
            <div class="dataContainer">
                    <p class="estudents" >Nombre:   {{ ("$user->name") }}</p>
                    <p>Apellidos: {{ ("$user->lastname") }}</p>
                    <p>Email:      {{ ("$user->email") }}</p>
            </div>  
            <div class="dataContainer2">      
                    <p>Curso:    {{ ("$user->group") }}º </p>
                    <p>Año: 2023 </p>
                    <p>Centro: I.E.S Minerva </p>
            </div>
            <div>
            @if(Auth::check() && Auth::user()->isTeacher)    
            <form action="{{ route('deleteUser', ['id' => $user->id]) }}" method="post">
                @method('delete')
                @csrf
                    <div class="d-flex justify-content-end">
                    
                        <button type="submit" class="btn text-end mt-2" onclick="return confirm('¿Quieres borrar? {{ $user->name }} - ID {{ $user->id }} ')">Borrar Estudiante
                        </button>
                    
                    </div>
                    <a href="{{ route('editUser', ['id'=>$user->id]) }}">Editar Estudiante</a>
                    @endif
            </form>
            </div>
        </div>
        <div>
        @foreach($trimesterGrades as $key => $trimesterGrade)
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div  class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button id="trimesterHeader" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    {{ $key }}º trimestre
                    </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                    <div id="trimesterBody" class="accordion-body">
                    <table class="table">
                        <thead id="tableBody">
                            <tr id="spaceRows">
                            <th></th>
                            <th>I</th>
                            <th>II</th>
                            <th>III</th> 
                            <th>Promedio</th>
                            </tr>
                        </thead>
                        <tbody id="tableBody">
                            <tr id="spaceRows">
                            <th id="gradesTitle" scope="row">Inglés</th>
                                @foreach($trimesterGrade['Inglés'] as $inglesGrade)
                                    <td>{{ $inglesGrade }}</td>
                                @endforeach
                            <td>6.6</td>
                            </tr>
                            <tr id="spaceRows">
                            <th id="gradesTitle" scope="row">Matemáticas</th>
                            @foreach($trimesterGrade['Matemáticas'] as $matematicasGrade)
                                    <td>{{ $matematicasGrade }}</td>
                                @endforeach
                            <td>8</td>
                            </tr>
                            <tr id="spaceRows">
                            <th id="gradesTitle" scope="row">Lengua</th>
                            @foreach($trimesterGrade['Lengua'] as $lenguaGrade)
                                    <td>{{ $lenguaGrade }}</td>
                                @endforeach
                            <td>6.6</td>
                            </tr>
                            <tr id="spaceRows">
                            <th id="gradesTitle" scope="row">Historia</th>
                            @foreach($trimesterGrade['Historia'] as $historiaGrade)
                                    <td>{{ $historiaGrade }}</td>
                                @endforeach
                            <td>9.3</td>
                            </tr>
                            <tr id="spaceRows">
                            <th id="gradesTitle" scope="row">Geografía</th>
                            @foreach($trimesterGrade['Geografía'] as $geografiaGrade)
                                    <td>{{ $geografiaGrade }}</td>
                                @endforeach
                            <td>4</td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br>
               
        @endforeach
    </div>
        <br>
        <div id="averageContainer">
            <div id="averageCard">
                Promedio General:
                    <div>
                        <input id="averageGrade"> 
                    </div>
            </div>
        </div>
        @foreach($grades as $grade)
            <div>
                    <p>Trimestre{{ $grade->trimester}}</p>
                    <p>Materia:{{ $grade->subject}}</p>
                    <p>Examen: {{ $grade->exam}}</p> 
                    <p>Año: {{ $grade->year}}</p>
                    <p>Calificación: {{ $grade->grade}}</p>         
            </div>
        @endforeach

        @if(Auth::check() && Auth::user()->isTeacher)
        <a class="returnButton"  href="{{ route('home') }}"> 
            <img src="https://res.cloudinary.com/de1i08drf/image/upload/v1675151615/Atenea/flechaAzulIzquierda_ab7yvw.png" alt= "volver a inicio"> 
        </a> 
        @endif      
@endsection