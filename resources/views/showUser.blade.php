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
                
            <form action="{{ route('deleteUser', ['id' => $user->id]) }}" method="post">
                @method('delete')
                @csrf
                    <div class="d-flex justify-content-end">
                    @if(Auth::check() && Auth::user()->isTeacher)
                        <button type="submit" class="btn text-end mt-2" onclick="return confirm('¿Quieres borrar? {{ $user->name }} - ID {{ $user->id }} ')">Borrar Estudiante
                        </button>
                    @endif
                    </div>
                    <a href="{{ route('editUser', ['id'=>$user->id]) }}">Editar Estudiante</a>
            </form>
            </div>
        </div>
        <div class="accordion" id="accordionPanelsStayOpenExample">
            <div  class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button id="trimesterHeader" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    Primer trimestre
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
                        <th id="gradesTitle" scope="row">Lengua</th>
                        <td>5</td>
                        <td>5</td>
                        <td>10</td>
                        <td>6.6</td>
                        </tr>
                        <tr id="spaceRows">
                        <th id="gradesTitle" scope="row">Matemáticas</th>
                        <td>8</td>
                        <td>8</td>
                        <td>8</td>
                        <td>8</td>
                        </tr>
                        <tr id="spaceRows">
                        <th id="gradesTitle" scope="row">Inglés</th>
                        <td>5</td>
                        <td>5</td>
                        <td>10</td>
                        <td>6.6</td>
                        </tr>
                        <tr id="spaceRows">
                        <th id="gradesTitle" scope="row">Historia</th>
                        <td>10</td>
                        <td>8</td>
                        <td>10</td>
                        <td>9.3</td>
                        </tr>
                        <tr id="spaceRows">
                        <th id="gradesTitle" scope="row">Geografía</th>
                        <td>4</td>
                        <td>4</td>
                        <td>4</td>
                        <td>4</td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>
            <div id="trimesterBody" class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button id="trimesterHeader" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    Segundo trimestre
                </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                <table class="table">
                    <thead>
                        <tr>
                        <th></th>
                        <th>I</th>
                        <th>II</th>
                        <th>III</th> 
                        <th>Promedio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th id="gradesTitle" scope="row">Lengua</th>
                        <td>5</td>
                        <td>5</td>
                        <td>10</td>
                        <td>6.6</td>
                        </tr>
                        <tr>
                        <th id="gradesTitle" scope="row">Matemáticas</th>
                        <td>8</td>
                        <td>8</td>
                        <td>8</td>
                        <td>8</td>
                        </tr>
                        <tr>
                        <th id="gradesTitle" scope="row">Lengua</th>
                        <td>5</td>
                        <td>5</td>
                        <td>10</td>
                        <td>6.6</td>
                        </tr>
                        <th id="gradesTitle" scope="row">Historia</th>
                        <td>10</td>
                        <td>8</td>
                        <td>10</td>
                        <td>9.3</td>
                        </tr>
                        <tr>
                        <th id="gradesTitle" scope="row">Geografía</th>
                        <td>4</td>
                        <td>4</td>
                        <td>4</td>
                        <td>4</td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>
            <div id="trimesterBody" class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button id="trimesterHeader" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    Tercer trimestre
                </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                <div class="accordion-body">
                <table class="table">
                    <thead>
                        <tr>
                        <th></th>
                        <th>I</th>
                        <th>II</th>
                        <th>III</th> 
                        <th>Promedio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th id="gradesTitle" scope="row">Lengua</th>
                        <td>5</td>
                        <td>5</td>
                        <td>10</td>
                        <td>6.6</td>
                        </tr>
                        <tr>
                        <th id="gradesTitle" scope="row">Matemáticas</th>
                        <td>8</td>
                        <td>8</td>
                        <td>8</td>
                        <td>8</td>
                        </tr>
                        <tr>
                        <th id="gradesTitle" scope="row">Lengua</th>
                        <td>5</td>
                        <td>5</td>
                        <td>10</td>
                        <td>6.6</td>
                        </tr>
                        <th id="gradesTitle" scope="row">Historia</th>
                        <td>10</td>
                        <td>8</td>
                        <td>10</td>
                        <td>9.3</td>
                        </tr>
                        <tr>
                        <th id="gradesTitle" scope="row">Geografía</th>
                        <td>4</td>
                        <td>4</td>
                        <td>4</td>
                        <td>4</td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
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

@endsection