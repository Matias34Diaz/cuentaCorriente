@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Condicion Fiscal
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Condicion Fiscal</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('condicion-fiscal.update', $condicionFiscal->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('condicion-fiscal.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
