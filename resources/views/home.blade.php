@extends('layouts.app')

@section('content')
    <div class="conteiner">
        <button class="btn-secondary">
            <a id="buttonAdd" href="{{ route('createUser') }}">
                <div class="text-white fs-4">Añadir estudiante</div>
            </a>
        </button>
        <h5>Clase 1ºA</h5>
    </div>
    @foreach ($users as $user)
    <div id="conteinerStudent">
        <div>
            <button class="studentInfo">
                <a id="studentTag" href="{{ route('readUserGrade', $user->id) }}">{{ ("$user->name") }}</a>
            </button>                  
        </div>
    </div>    
    @endforeach   
@endsection