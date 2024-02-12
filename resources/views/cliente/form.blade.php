<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $cliente->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellido') }}
            {{ Form::text('Apellido', $cliente->Apellido, ['class' => 'form-control' . ($errors->has('Apellido') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el apellido']) }}
            {!! $errors->first('Apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dni') }}
            {{ Form::text('dni', $cliente->dni, ['class' => 'form-control' . ($errors->has('dni') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el dni']) }}
            {!! $errors->first('dni', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cuitcuil') }}
            {{ Form::text('cuitcuil', $cliente->cuitcuil, ['class' => 'form-control' . ($errors->has('cuitcuil') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el CUIT-CUIL']) }}
            {!! $errors->first('cuitcuil', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Email') }}
            {{ Form::text('Email', $cliente->Email, ['class' => 'form-control' . ($errors->has('Email') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el email']) }}
            {!! $errors->first('Email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono') }}
            {{ Form::text('Telefono', $cliente->Telefono, ['class' => 'form-control' . ($errors->has('Telefono') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el telefono']) }}
            {!! $errors->first('Telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('detalle') }}
            {{ Form::text('detalle', $cliente->detalle, ['class' => 'form-control' . ($errors->has('detalle') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese detalles']) }}
            {!! $errors->first('detalle', '<div class="invalid-feedback">:message</div>') !!}
        </div>
 
        <div class="form-group">
            {{ Form::label('Condición Fiscal') }}
            {{ Form::select('id_condicion_fiscal', $condicion_Fiscal ,$cliente->id_condicion_fiscal, ['class' => 'form-control' . ($errors->has('id_condicion_fiscal') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una opción']) }}
            {!! $errors->first('id_condicion_fiscal', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>