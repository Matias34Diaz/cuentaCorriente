@extends('layouts.app')

@section('template_title')
    {{ $servicio->name ?? "{{ __('Show') Servicio" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Servicio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('servicios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Cuenta:</strong>
                            {{ $servicio->id_cuenta }}
                        </div>
                        <div class="form-group">
                            <strong>Monto:</strong>
                            {{ $servicio->monto }}
                        </div>
                        <div class="form-group">
                            <strong>Saldo Pendiente:</strong>
                            {{ $servicio->Saldo_Pendiente }}
                        </div>
                        <div class="form-group">
                            <strong>Detalles:</strong>
                            {{ $servicio->detalles }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $servicio->fecha }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
