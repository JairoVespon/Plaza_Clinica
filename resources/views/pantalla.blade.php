@extends('layouts.app')

@section('content')
<style>
    .card {
        border: 1px solid #3498db;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        margin: 10px;
        background-color: #f9f9f9;
        padding: 20px;
    }

    .card-body {
        text-align: center;
    }

    .btn-primary {
        background-color: #3498db;
        border-color: #3498db;
        color: #fff;
    }
</style>
<main>
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center" style="color: #3498db;">Bienvenido a Clinica La Única</h1>
                        <hr>
                        <h2 class="text-center" style="color: #555;">A cuál de nuestras plataformas desea ingresar?</h2>
                        <hr>
                        <h3 style="color: #333;">Ingresar Paciente</h3>
                        <a href="{{ url('/pacientes/create') }}" class="btn btn-primary btn-sm">Acceder<a>
                        <hr>
                        <h3 style="color: #333;">Ingresar Clinicas</h3>
                        <a href="{{ url('/clinicas/create') }}" class="btn btn-primary btn-sm">Acceder<a>
                        <hr>
                        <h3 style="color: #333;">Ingresar Medicos</h3>
                        <a href="{{ url('/medicos/create') }}" class="btn btn-primary btn-sm">Acceder<a>
                        <hr>
                        <h3 style="color: #333;">Ingresar Citas</h3>
                        <a href="{{ url('/citas/create') }}" class="btn btn-primary btn-sm">Acceder<a>
                        <hr>
                        <h3 style="color: #333;">Ingresar Horarios</h3>
                        <a href="{{ url('/horarios/create') }}" class="btn btn-primary btn-sm">Acceder<a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection