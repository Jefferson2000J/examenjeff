@extends('layouts.app')

@section('template_title')
    {{ $materia->name ?? "{{ __('Show') Materia" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Materia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('materias.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $materia->name }}
                        </div>
                        <div class="form-group">
                            <strong>Creditos:</strong>
                            {{ $materia->creditos }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $materia->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Date At:</strong>
                            {{ $materia->date_at }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
