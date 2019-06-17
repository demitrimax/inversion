<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class bcuentas
 * @package App\Models
 * @version June 17, 2019, 9:48 am CDT
 *
 * @property \App\Models\CatBanco banco
 * @property \Illuminate\Database\Eloquent\Collection
 * @property integer banco_id
 * @property string numcuenta
 * @property string clabeinterbancaria
 * @property string sucursal
 * @property integer cliente_id
 * @property integer empresa_id
 * @property string swift
 */
class bcuentas extends Model
{
    use SoftDeletes;

    public $table = 'catcuentas';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'banco_id',
        'numcuenta',
        'clabeinterbancaria',
        'sucursal',
        'cliente_id',
        'empresa_id',
        'swift'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'banco_id' => 'integer',
        'numcuenta' => 'string',
        'clabeinterbancaria' => 'string',
        'sucursal' => 'string',
        'cliente_id' => 'integer',
        'empresa_id' => 'integer',
        'swift' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'banco_id' => 'required',
        'numcuenta' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function banco()
    {
        return $this->belongsTo(\App\Models\bancos::class, 'banco_id');
    }
    public function empresa()
    {
      return $this->belongsTo('App\Models\empresas', 'empresa_id');
    }
}
