@extends('layouts.app')

@section('template_title')
    {{ $cliente->name ?? "{{ __('Show') Cliente" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cliente.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>ID:</strong>
                            {{ $cliente->id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $cliente->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $cliente->Apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Dni:</strong>
                            {{ $cliente->dni }}
                        </div>
                        <div class="form-group">
                            <strong>Cuitcuil:</strong>
                            {{ $cliente->cuitcuil }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $cliente->Email }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $cliente->Telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Detalle:</strong>
                            {{ $cliente->detalle }}
                        </div>
                        <div class="form-group">
                            <strong>Condicion Fiscal:</strong>
                           {{ $cliente->condicionFiscal->Nombre_categoria }}<!--Muestra de la tabla 'condiciones_fiscales'-->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
