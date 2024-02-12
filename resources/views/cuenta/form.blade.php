<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Cliente asociado') }}
            {{ Form::select('id_cliente', $cliente ,$cuenta->id_cliente, ['class' => 'form-control' . ($errors->has('id_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una opción']) }}
            {!! $errors->first('id_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre de la cuenta') }}
            {{ Form::text('nombre', $cuenta->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('saldo') }}
            {{ Form::text('saldo', $cuenta->saldo, ['class' => 'form-control' . ($errors->has('saldo') ? ' is-invalid' : ''), 'placeholder' => 'Saldo']) }}
            {!! $errors->first('saldo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>