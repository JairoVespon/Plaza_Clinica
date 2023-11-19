<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('medico_id') }}
            {{ Form::text('medico_id', $cita->medico_id, ['class' => 'form-control' . ($errors->has('medico_id') ? ' is-invalid' : ''), 'placeholder' => 'Medico Id']) }}
            {!! $errors->first('medico_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('paciente_id') }}
            {{ Form::text('paciente_id', $cita->paciente_id, ['class' => 'form-control' . ($errors->has('paciente_id') ? ' is-invalid' : ''), 'placeholder' => 'Paciente Id']) }}
            {!! $errors->first('paciente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('motivo') }}
            {{ Form::text('motivo', $cita->motivo, ['class' => 'form-control' . ($errors->has('motivo') ? ' is-invalid' : ''), 'placeholder' => 'Motivo']) }}
            {!! $errors->first('motivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_a') }}
            {{ Form::text('fecha_a', $cita->fecha_a, ['class' => 'form-control' . ($errors->has('fecha_a') ? ' is-invalid' : ''), 'placeholder' => 'Fecha A']) }}
            {!! $errors->first('fecha_a', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>