@extends('layouts.app')

@section('content')
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
            </form>
        </div>
    @endforeach   
@endsection
