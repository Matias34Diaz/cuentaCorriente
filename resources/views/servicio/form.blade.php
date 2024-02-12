<div class="box box-info padding-1">
    <div class="box-body">
        
        <!-- <div class="form-group">
            {{ Form::label('id_cuenta') }}
            {{ Form::text('id_cuenta', $servicio->id_cuenta, ['class' => 'form-control' . ($errors->has('id_cuenta') ? ' is-invalid' : ''), 'placeholder' => 'Id Cuenta']) }}
            {!! $errors->first('id_cuenta', '<div class="invalid-feedback">:message</div>') !!}
        </div> -->

        <div class="form-group">
            {{ Form::label('Cuenta Asociada') }}
            {{ Form::select('id_cuenta', $cuentas, null, ['class' => 'form-control' . ($errors->has('id_cuenta') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una cuenta']) }}
            {!! $errors->first('id_cuenta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        

        <div class="form-group">
            {{ Form::label('monto') }}
            {{ Form::text('monto', $servicio->monto, ['class' => 'form-control' . ($errors->has('monto') ? ' is-invalid' : ''), 'placeholder' => 'Monto']) }}
            {!! $errors->first('monto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <!-- <div class="form-group">
            {{ Form::label('Saldo_Pendiente') }}
            {{ Form::text('Saldo_Pendiente', $servicio->Saldo_Pendiente, ['class' => 'form-control' . ($errors->has('Saldo_Pendiente') ? ' is-invalid' : ''), 'placeholder' => 'Saldo Pendiente']) }}
            {!! $errors->first('Saldo_Pendiente', '<div class="invalid-feedback">:message</div>') !!}
        </div> -->
        <div class="form-group">
            {{ Form::label('detalles') }}
            {{ Form::text('detalles', $servicio->detalles, ['class' => 'form-control' . ($errors->has('detalles') ? ' is-invalid' : ''), 'placeholder' => 'Detalles']) }}
            {!! $errors->first('detalles', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::date('fecha', $servicio->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>