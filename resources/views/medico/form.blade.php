<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre completo') }}
            {{ Form::text('nombre', $medico->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese su Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sexo') }}
            {{ Form::select('genero_id', $genero -> pluck('nombre', 'id'), $medico->genero_id, ['class' => 'form-control' . ($errors->has('genero_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione su Género']) }}
            {!! $errors->first('genero_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('especialidad') }}
            {{ Form::select('especialidad_id', $especialidad -> pluck('nombre', 'id'), $medico->especialidad_id, ['class' => 'form-control' . ($errors->has('especialidad_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione su Especialidad']) }}
            {!! $errors->first('especialidad_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('teléfono') }}
            {{ Form::text('telefono', $medico->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Digité su Teléfono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('clínica') }}
            {{ Form::select('clinica_id', $clinica -> pluck('nombre', 'id'), $medico->clinica_id, ['class' => 'form-control' . ($errors->has('clinica_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione donde Trabaja']) }}
            {!! $errors->first('clinica_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>