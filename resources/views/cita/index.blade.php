@extends('layouts.app')

@section('template_title')
    Cita
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cita') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ url('/reportCit') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    {{ __('Imprimir PDF') }}
                                </a>
                                <a href="{{ route('citas.create') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
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
                                        
										<th>Paciente a Tratar</th>
										<th>Medico Encargado</th>
										<th>Motivo</th>
										<th>Fecha de Atención</th>
										<th>Fecha del Registro</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($citas as $cita)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $cita->paciente->nombre }}</td>
											<td>{{ $cita->medico->nombre }}</td>
											<td>{{ $cita->motivo }}</td>
											<td>{{ $cita->fecha_a }}</td>
                                            <td>{{ $cita->created_at}}</td>

                                            <td>
                                                <form action="{{ route('citas.destroy',$cita->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('citas.show',$cita->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('citas.edit',$cita->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $citas->links() !!}
            </div>
        </div>
    </div>
@endsection
