@extends('layouts.app')

@section('content')
        <div>
            <img id="photoUser" src='{{ ("$user->img") }}' alt='Foto de {{ ("$user->name") }} ' width=10%>   
            <p>{{ ("$user->name") }}</p>
            <p>{{ ("$user->lastname") }}</p>
            <p>{{ ("$user->email") }}</p>
            <p>{{ ("$user->group") }}</p>
        </div>   
@endsection