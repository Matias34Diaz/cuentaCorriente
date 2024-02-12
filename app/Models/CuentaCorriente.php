<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CuentaCorriente
 *
 * @property $id
 * @property $id_cliente
 * @property $name
 * @property $saldo
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CuentaCorriente extends Model
{

    static $rules = [
        'id_cliente' => 'required',
        'name' => 'required',
        'saldo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_cliente', 'name', 'saldo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'id_cliente');
    }
}
