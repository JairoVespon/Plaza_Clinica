<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('paciente') }}
            {{ Form::select('paciente_id', $paciente -> pluck('nombre', 'id'), $cita->paciente_id, ['class' => 'form-control' . ($errors->has('paciente_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione el Paciente a Tratar']) }}
            {!! $errors->first('paciente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('medico') }}
            {{ Form::select('medico_id', $medico -> pluck('nombre', 'id'), $cita->medico_id, ['class' => 'form-control' . ($errors->has('medico_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione el Médico Encargado']) }}
            {!! $errors->first('medico_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('motivo') }}
            {{ Form::text('motivo', $cita->motivo, ['class' => 'form-control' . ($errors->has('motivo') ? ' is-invalid' : ''), 'placeholder' => 'Describa su Motivo de Consulta']) }}
            {!! $errors->first('motivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha de atención') }}
            {{ Form::date('fecha_a', $cita->fecha_a, ['class' => 'form-control' . ($errors->has('fecha_a') ? ' is-invalid' : '')]) }}
            {!! $errors->first('fecha_a', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>