@extends('layouts.app')

@section('template_title')
    {{ $horario->name ?? "{{ __('Show') Horario" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Horario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('horarios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Medico Id:</strong>
                            {{ $horario->medico_id }}
                        </div>
                        <div class="form-group">
                            <strong>Dia Trabajo:</strong>
                            {{ $horario->dia_trabajo }}
                        </div>
                        <div class="form-group">
                            <strong>Hora E:</strong>
                            {{ $horario->hora_e }}
                        </div>
                        <div class="form-group">
                            <strong>Hora S:</strong>
                            {{ $horario->hora_s }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
