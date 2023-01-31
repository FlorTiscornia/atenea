@extends('layouts.app')

@section('content')
<p>Hola Mundo</p>
    @foreach ($users as $user)
        <div>
        <p>{{ ("$user->name") }}</p>
        </div>
    @endforeach   
@endsection
