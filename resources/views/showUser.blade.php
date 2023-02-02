@extends('layouts.app')

@section('content')
        <div>
            <img src='{{ ("$user->img") }}' alt='Foto de {{ ("$user->name") }}'/>   
            <p>{{ ("$user->name") }}</p>
            <p>{{ ("$user->lastname") }}</p>
            <p>{{ ("$user->email") }}</p>
            <p>{{ ("$user->group") }}</p>
        </div>   
        <a class="returnButton"  href="{{ route('home') }}"> 
            <img src="https://res.cloudinary.com/de1i08drf/image/upload/v1675151615/Atenea/flechaAzulIzquierda_ab7yvw.png" alt= "volver a inicio"> 
        </a>
@endsection