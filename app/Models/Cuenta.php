<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cuenta
 *
 * @property $id
 * @property $id_cliente
 * @property $nombre
 * @property $saldo
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cuenta extends Model
{

  static $rules = [
    'id_cliente' => 'required',
    'nombre' => 'required',
    // 'saldo' => 'required',
  ];

  protected $perPage = 20;

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['id_cliente', 'nombre', 'saldo'];


  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasOne
   */
  public function cliente()
  {
    return $this->hasOne('App\Models\Cliente', 'id', 'id_cliente');
  }
}
