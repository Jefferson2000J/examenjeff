@extends('layouts.app')

@section('template_title')
    {{ $matricula->name ?? "{{ __('Show') Matricula" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Matricula</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('matriculas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Materia:</strong>
                            {{ $matricula->id_Materia }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
