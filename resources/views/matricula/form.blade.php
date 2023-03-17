<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_Materia') }}
            {{ Form::select('id_Materia',App\Models\Materia::pluck('name', 'id'),$matricula->id_Materia, ['class' => 'form-control' . ($errors->has('id_Materia') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione la matrícula']) }}
            {!! $errors->first('id_Materia', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>