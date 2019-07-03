<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class empresas
 * @package App\Models
 * @version June 9, 2019, 8:20 am CDT
 *
 * @property \Illuminate\Database\Eloquent\Collection
 * @property string nombre
 * @property string giro
 * @property string fcreacion
 * @property string observaciones
 */
class empresas extends Model
{
    use SoftDeletes;

    public $table = 'cat_empresas';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'rfc',
        'giro',
        'fcreacion',
        'observaciones'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'rfc' => 'string',
        'giro' => 'string',
        'fcreacion' => 'date',
        'observaciones' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required'
    ];


    public function operaciones()
    {
      return $this->hasMany('App\Models\operaciones','empresa_id');
    }
    public function cuentas()
    {
      return $this->belongsToMany('App\Models\bcuentas', 'catempresas_catcuentas');
    }

    public function getSaldoaldiaAttribute()
    {
      //dinero de saldo de cuentas
      $saldocuentas = 0;
      foreach($this->cuentas as $cuenta){
        $saldocuentas += $cuenta->saldocuenta;
      }

      return $saldocuentas;
    }




}
