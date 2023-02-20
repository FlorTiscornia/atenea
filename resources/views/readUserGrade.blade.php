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
                    <div>
                        <button type="submit" id="deleteButton" onclick="return confirm('¿Quieres borrar? {{ $user->name }} - ID {{ $user->id }} ')">Borrar Estudiante
                        </button>
                    </div>
                    <br>
                    <div>
                    <a href="{{ route('editUser', ['id'=>$user->id]) }}" id="editButton">Editar Estudiante</a>
                    </div>
                    <br>
                    <div>
                    <button class="btn-secondary">
                        <a id="buttonAdd" href="{{ route('createGrade', ['id'=>$user->id] ) }}">
                        Crear nota
                        </a>
                    </button>   
                    </div>
                    <br> 
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
                                @if(isset($trimesterGrade['Inglés']))
                                    @foreach($trimesterGrade['Inglés'] as $inglesGrade)
                                        <td>{{ $inglesGrade }}</td>
                                    @endforeach
                                @endif
                            <td></td>                            
                            </tr>
                            <tr id="spaceRows">
                            <th id="gradesTitle" scope="row">Matemáticas</th>
                                @if(isset($trimesterGrade['Matemáticas']))
                                    @foreach($trimesterGrade['Matemáticas'] as $matematicasGrade)
                                        <td>{{ $matematicasGrade }}</td>
                                    @endforeach
                                @endif
                            <td></td>
                            </tr>
                            <tr id="spaceRows">
                            <th id="gradesTitle" scope="row">Lengua</th>
                                @if(isset($trimesterGrade['Lengua']))
                                    @foreach($trimesterGrade['Lengua'] as $lenguaGrade)
                                        <td>{{ $lenguaGrade }}</td>
                                    @endforeach
                                @endif
                            <td></td>
                            </tr>
                            <tr id="spaceRows">
                            <th id="gradesTitle" scope="row">Historia</th>
                                @if(isset($trimesterGrade['Historia']))
                                    @foreach($trimesterGrade['Historia'] as $historiaGrade)
                                        <td>{{ $historiaGrade }}</td>
                                    @endforeach
                                @endif
                            <td></td>
                            </tr>
                            <tr id="spaceRows">
                            <th id="gradesTitle" scope="row">Geografía</th>
                                @if(isset($trimesterGrade['Geografía']))
                                    @foreach($trimesterGrade['Geografía'] as $geografiaGrade)
                                        <td>{{ $geografiaGrade }}</td>
                                    @endforeach
                                @endif
                            <td></td>
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
        <div class="averageBack">
            @if(Auth::check() && Auth::user()->isTeacher)
            <div>
                <a class="returnButton"  href="{{ route('home') }}"> 
                    <img src="https://res.cloudinary.com/de1i08drf/image/upload/v1675151615/Atenea/flechaAzulIzquierda_ab7yvw.png" alt= "volver a inicio"> 
                </a> 
            </div>
            @endif  
            <div id="averageContainer">
                <div id="averageCard">
                    Promedio General:
                        <div>
                            <input id="averageGrade"> 
                        </div>
                </div>
            </div>
        </div>

            
@endsection