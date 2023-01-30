@extends('layouts.app')

@section('content')
    <form class="justify-content-center " action="{{ route('storeUser') }}" method="post">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Example label</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Another label</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>     
    </form>    

@endsection
