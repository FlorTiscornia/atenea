@extends('layouts.app')

@section('content')
        <div>
            <img src='{{ ("$user->img") }}' alt='Foto de {{ ("$user->name") }}'/>   
            <p>{{ ("$user->name") }}</p>
            <p>{{ ("$user->lastname") }}</p>
            <p>{{ ("$user->email") }}</p>
            <p>{{ ("$user->group") }}</p>
        </div>   
@endsection