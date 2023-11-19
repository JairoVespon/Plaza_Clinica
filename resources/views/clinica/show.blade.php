@extends('layouts.app')

@section('template_title')
    {{ $clinica->name ?? "{{ __('Show') Clinica" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Clinica</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clinicas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $clinica->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $clinica->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $clinica->direccion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
