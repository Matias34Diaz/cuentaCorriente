<!-- formulario -->
<form role="form" id="formulario-cliente">
    <div class="row">
        <div class="col-xs-3 col-md-3">
            <label for="nombre"><span>Nombre:</span></label>
            <input type="tel" class="form-control" id="txtNombre" placeholder="Nombre" required />
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3 col-md-3">
            <label for="apellido"><span>Apellido:</span></label>
            <input type="tel" class="form-control" id="txtApellido" placeholder="Apellido" required />
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3 col-md-3">
            <label for="telefono"><span>Teléfono:</span></label>
            <input type="tel" class="form-control" id="txtTelefono" placeholder="Teléfono" required />
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3 col-md-3">
            <label for="email"><span>Email:</span></label>
            <input type="tel" class="form-control" id="txtEmail" placeholder="Email" required />
        </div>
    </div>
    <div class="row">
        <div class="col-xs-3 col-md-3">
            <label for="id_condicion_fiscal"><span>Condición Fiscal:</span></label>
            <select class="form-control" id="txtCondicionFiscal" required>
                <option value='1'>IVA Exento</option>
                <option value='2'>Monotributista</option>
                <option value='3'>Consumidor Final</option>
                <option value='4'>Sujeto no categorizado</option>
                <option value='5'>Proveedor del exterior</option>
                <option value='6'>Cliente del exterior</option>
                <option value='7'>IVA liberado ley 19640</option>
                <option value='8'>IVA no alcanzado</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="form-group">
            <label for="comment">Detalle:</label>
            <textarea class="form-control" rows="5" id="txtDetalle"></textarea>
        </div>
    </div>
</form>