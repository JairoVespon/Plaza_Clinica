<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('medico_id') }}
            {{ Form::text('medico_id', $horario->medico_id, ['class' => 'form-control' . ($errors->has('medico_id') ? ' is-invalid' : ''), 'placeholder' => 'Medico Id']) }}
            {!! $errors->first('medico_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dia_trabajo') }}
            {{ Form::text('dia_trabajo', $horario->dia_trabajo, ['class' => 'form-control' . ($errors->has('dia_trabajo') ? ' is-invalid' : ''), 'placeholder' => 'Dia Trabajo']) }}
            {!! $errors->first('dia_trabajo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_e') }}
            {{ Form::text('hora_e', $horario->hora_e, ['class' => 'form-control' . ($errors->has('hora_e') ? ' is-invalid' : ''), 'placeholder' => 'Hora E']) }}
            {!! $errors->first('hora_e', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_s') }}
            {{ Form::text('hora_s', $horario->hora_s, ['class' => 'form-control' . ($errors->has('hora_s') ? ' is-invalid' : ''), 'placeholder' => 'Hora S']) }}
            {!! $errors->first('hora_s', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>