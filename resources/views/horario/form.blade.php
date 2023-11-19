<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('medico') }}
            {{ Form::select('medico_id', $medico -> pluck('nombre', 'id'), $horario->medico_id, ['class' => 'form-control' . ($errors->has('medico_id') ? ' is-invalid' : ''), 'placeholder' => 'Medico Id']) }}
            {!! $errors->first('medico_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dia de trabajo') }}
            {{ Form::select('dia_trabajo', $dia -> pluck('nombre', 'id'), $horario->dia_trabajo, ['class' => 'form-control' . ($errors->has('dia_trabajo') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione el Dia de Trabajo']) }}
            {!! $errors->first('dia_trabajo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora de entrada') }}
            {{ Form::time('hora_e', $horario->hora_e, ['class' => 'form-control' . ($errors->has('hora_e') ? ' is-invalid' : '')]) }}
            {!! $errors->first('hora_e', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora de salida') }}
            {{ Form::time('hora_s', $horario->hora_s, ['class' => 'form-control' . ($errors->has('hora_s') ? ' is-invalid' : '')]) }}
            {!! $errors->first('hora_s', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>