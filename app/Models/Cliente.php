<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $Nombre
 * @property $Apellido
 * @property $dni
 * @property $cuitcuil
 * @property $Email
 * @property $Telefono
 * @property $detalle
 * @property $id_condicion_fiscal
 * @property $created_at
 * @property $updated_at
 *
 * @property CondicionesFiscales $condicionesFiscales
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{

    static $rules = [
        'Nombre' => 'required',
        'Apellido' => 'required',
        'dni' => 'required',
        'cuitcuil' => 'required',
        'Email' => 'required',
        'Telefono' => 'required',
        'id_condicion_fiscal' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre', 'Apellido', 'dni', 'cuitcuil', 'Email', 'Telefono', 'detalle', 'id_condicion_fiscal'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function condicionFiscal()
    {
        return $this->hasOne('App\Models\CondicionFiscal', 'id', 'id_condicion_fiscal');
    }
}
