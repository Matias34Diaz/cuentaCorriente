<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Servicio
 *
 * @property $id
 * @property $id_cuenta
 * @property $monto
 * @property $Saldo_Pendiente
 * @property $detalles
 * @property $fecha
 * @property $created_at
 * @property $updated_at
 *
 * @property Cuenta $cuenta
 * @property Pago[] $pagos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Servicio extends Model
{

    static $rules = [
        'id_cuenta' => 'required',
        'monto' => 'required',
        'detalles' => 'required',
        'fecha' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_cuenta', 'monto', 'Saldo_Pendiente', 'detalles', 'fecha'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cuenta()
    {
        return $this->hasOne('App\Models\Cuenta', 'id', 'id_cuenta');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pagos()
    {
        return $this->hasMany('App\Models\Pago', 'id_servicio', 'id');
    }
}
