@extends('layouts.app')

@section('template_title')
    {{ $medico->name ?? "{{ __('Show') Medico" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Medico</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('medicos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $medico->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Genero Id:</strong>
                            {{ $medico->genero_id }}
                        </div>
                        <div class="form-group">
                            <strong>Especialidad Id:</strong>
                            {{ $medico->especialidad_id }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $medico->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Clinica Id:</strong>
                            {{ $medico->clinica_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
