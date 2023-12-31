@extends('layouts.app')

@section('template_title')
    Medico
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Medico') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ url('/reportMed') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    {{ __('Imprimir PDF') }}
                                  </a>
                                <a href="{{ route('medicos.create') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>ID</th>
                                        
										<th>Nombre</th>
										<th>Genero</th>
										<th>Especialidad</th>
										<th>Teléfono</th>
										<th>Clinica</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($medicos as $medico)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $medico->nombre }}</td>
											<td>{{ $medico->genero->nombre }}</td>
											<td>{{ $medico->especialidad->nombre }}</td>
											<td>{{ $medico->telefono }}</td>
											<td>{{ $medico->clinica->nombre }}</td>

                                            <td>
                                                <form action="{{ route('medicos.destroy',$medico->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('medicos.show',$medico->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('medicos.edit',$medico->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $medicos->links() !!}
            </div>
        </div>
    </div>
@endsection
