@extends('layouts.app')

@section('content')
<div class="container">
            <div class="mt-3">
                    <a href="{{ route('materias.index') }}" class="btn btn-primary">Materias</a>
                    <a href="{{ route('matriculas.index') }}" class="btn btn-primary ml-3">Matrículas</a>
            </div>
</div>
@endsection
