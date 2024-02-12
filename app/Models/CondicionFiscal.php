<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CondicionFiscal
 *
 * @property $id
 * @property $Nombre_categoria
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CondicionFiscal extends Model
{
    protected $table = 'condiciones_fiscales';    //DEFINE EL NOMBRE DE LA TABLA, NO ES NECESARIO

    static $rules = [
        'Nombre_categoria' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre_categoria'];
}
