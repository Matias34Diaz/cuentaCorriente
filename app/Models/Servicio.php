<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pago
 *
 * @property $id
 * @property $id_cuenta
 * @property $id_servicio
 * @property $monto
 * @property $detalles
 * @property $fecha
 * @property $created_at
 * @property $updated_at
 *
 * @property Cuenta $cuenta
 * @property Servicio $servicio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pago extends Model
{

    static $rules = [
        'id_cuenta' => 'required',
        'id_servicio' => 'required',
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
    protected $fillable = ['id_cuenta', 'id_servicio', 'monto', 'detalles', 'fecha'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cuenta()
    {
        return $this->hasOne('App\Models\Cuenta', 'id', 'id_cuenta');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function servicio()
    {
        return $this->hasOne('App\Models\Servicio', 'id', 'id_servicio');
    }
}
