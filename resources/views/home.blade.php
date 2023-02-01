@extends('layouts.app')

@section('content')
    <button class="btn btn-secondary">
        <a href="{{ route('createUser') }}">
            <div class="text-white fs-4">Crear estudiante</div>
        </a>
    </button>
    <p>Hola Mundo</p>
    @foreach ($users as $user)
        <div>
            <p>{{ ("$user->name") }}</p>
            <form action="{{ route('deleteUser', ['id' => $user->id]) }}" method="post">
                @method('delete')
                @csrf
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn text-end mt-2" onclick="return confirm('¿Quieres borrar? {{ $user->name }} - ID {{ $user->id }} ')">🗑️
                    </button>
                </div>
                <a href="{{ route('editUser', ['id'=>$user->id]) }}">Editar</a>

            </form>
        </div>
    @endforeach   
@endsection
