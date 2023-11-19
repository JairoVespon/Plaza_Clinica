@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Clinica
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Clinica</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('clinicas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('clinica.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
