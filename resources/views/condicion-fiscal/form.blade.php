<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre_categoria') }}
            {{ Form::text('Nombre_categoria', $condicionFiscal->Nombre_categoria, ['class' => 'form-control' . ($errors->has('Nombre_categoria') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Categoria']) }}
            {!! $errors->first('Nombre_categoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>