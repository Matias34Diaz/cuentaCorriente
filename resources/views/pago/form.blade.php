<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_cuenta') }}
            {{ Form::text('id_cuenta', $pago->id_cuenta, ['class' => 'form-control' . ($errors->has('id_cuenta') ? ' is-invalid' : ''), 'placeholder' => 'Id Cuenta']) }}
            {!! $errors->first('id_cuenta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_servicio') }}
            {{ Form::text('id_servicio', $pago->id_servicio, ['class' => 'form-control' . ($errors->has('id_servicio') ? ' is-invalid' : ''), 'placeholder' => 'Id Servicio']) }}
            {!! $errors->first('id_servicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('monto') }}
            {{ Form::text('monto', $pago->monto, ['class' => 'form-control' . ($errors->has('monto') ? ' is-invalid' : ''), 'placeholder' => 'Monto']) }}
            {!! $errors->first('monto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('detalles') }}
            {{ Form::text('detalles', $pago->detalles, ['class' => 'form-control' . ($errors->has('detalles') ? ' is-invalid' : ''), 'placeholder' => 'Detalles']) }}
            {!! $errors->first('detalles', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $pago->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>