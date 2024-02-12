@extends('layouts.app')

@section('template_title')
    {{ $condicionFiscal->name ?? "{{ __('Show') Condicion Fiscal" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Condicion Fiscal</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('condicion-fiscal.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Categoria:</strong>
                            {{ $condicionFiscal->Nombre_categoria }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
