@extends('layouts.app')

@section('template_title')
    Clinica
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Clinica') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('clinicas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
										<th>Teléfono</th>
										<th>Dirección</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clinicas as $clinica)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $clinica->nombre }}</td>
											<td>{{ $clinica->telefono }}</td>
											<td>{{ $clinica->direccion }}</td>

                                            <td>
                                                <form action="{{ route('clinicas.destroy',$clinica->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('clinicas.show',$clinica->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('clinicas.edit',$clinica->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $clinicas->links() !!}
            </div>
        </div>
    </div>
@endsection
