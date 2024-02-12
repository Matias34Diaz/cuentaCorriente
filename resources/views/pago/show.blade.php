@extends('layouts.app')

@section('template_title')
    {{ $pago->name ?? "{{ __('Show') Pago" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pago</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pagos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Cuenta:</strong>
                            {{ $pago->id_cuenta }}
                        </div>
                        <div class="form-group">
                            <strong>Id Servicio:</strong>
                            {{ $pago->id_servicio }}
                        </div>
                        <div class="form-group">
                            <strong>Monto:</strong>
                            {{ $pago->monto }}
                        </div>
                        <div class="form-group">
                            <strong>Detalles:</strong>
                            {{ $pago->detalles }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $pago->fecha }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
