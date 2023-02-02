@extends('layouts.app')

@section('content')
    <button class="btn-secondary">
        <a id="buttonAdd" href="{{ route('createUser') }}">
            <div class="text-white fs-4">Añadir estudiante</div>
        </a>
    </button>
    @foreach ($users as $user)
        <div>
            <button class="studentInfo">
                <a id="studentTag" href="{{ route('showUser', $user->id) }}">{{ ("$user->name") }}</a>
            </button>
                    <form action="{{ route('deleteUser', ['id' => $user->id]) }}" method="post">
                        @method('delete')
                        @csrf
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn text-end mt-2" onclick="return confirm('¿Quieres borrar? {{ $user->name }} - ID {{ $user->id }} ')">🗑️
                            </button>
                        </div>
                        <a href="{{ route('editUser', ['id'=>$user->id]) }}">✏️</a>
                    </form>
        </div>
    @endforeach   
@endsection
