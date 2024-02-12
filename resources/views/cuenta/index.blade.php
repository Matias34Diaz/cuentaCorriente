@extends('layouts.app')

@section('template_title')
    Cuenta
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cuenta') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cuentas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>No</th>
                                        
										<!-- <th>Id Cliente</th> -->
										<th>Nombre</th>
                                        <th>Nombre completo</th>
                                        <th>Cuitcuil</th>
										<th>Email</th>
										<th>Telefono</th>
										<th>Detalle</th>
										<th>Condicion Fiscal</th>
                                        <th>Saldo </th>
                                        <th>Acciones</th>
                                        
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cuentas as $cuenta)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<!-- <td>{{ $cuenta->id_cliente }}</td> -->
											<td>{{ $cuenta->nombre }}</td>
                                            <td>{{ $cuenta->cliente->Nombre . ' ' . $cuenta->cliente->Apellido }}</td>
                                            <td>{{ $cuenta->cliente->dni }}</td>
                                            <td>{{ $cuenta->cliente->Email }}</td>
                                            <td>{{ $cuenta->cliente->Telefono }}</td>
                                            <td>{{ $cuenta->cliente->detalle }}</td>
                                            <td>{{ $cuenta->cliente->condicionFiscal->Nombre_categoria }}</td>
                                            
											<td id="saldo">
                                                @if ($cuenta->saldo !== null)
                                                    {{ '$' . $cuenta->saldo }}
                                                @else
                                                    <span id="saldoNoDisponible">Sin información del saldo</span>
                                                @endif
                                            </td>

                                            <td>
                                                <form action="{{ route('cuentas.destroy',$cuenta->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cuentas.show',$cuenta->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cuentas.edit',$cuenta->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $cuentas->links() !!}
            </div>
        </div>
    </div>
@endsection


<script>
    // Verificar si el saldo es null
    if (!document.getElementById('saldo').innerText.trim()) {
        // Cambiar el contenido del span si el saldo es null
        document.getElementById('saldoNoDisponible').innerText = 'Saldo no disponible';
    }
</script>