@extends('layouts.app')

@section('template_title')
    Condicion Fiscal
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Condicion Fiscal') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('condicion-fiscal.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>No.</th>
                                        
										<th>Nombre Categoria</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($condicionesFiscales as $condicionFiscal)
                                        <tr>
                                            <!-- <td>{{ ++$i }}</td> -->
                                            <td>{{ $condicionFiscal->id }}</td>
											<td>{{ $condicionFiscal->Nombre_categoria }}</td>

                                            <td>
                                                <form action="{{ route('condicion-fiscal.destroy',$condicionFiscal->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('condicion-fiscal.show',$condicionFiscal->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('condicion-fiscal.edit',$condicionFiscal->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $condicionesFiscales ->links() !!}
            </div>
        </div>
    </div>
@endsection
