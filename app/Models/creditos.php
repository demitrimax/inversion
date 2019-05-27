<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class creditos
 * @package App\Models
 * @version May 25, 2019, 3:27 pm CDT
 *
 * @property \Illuminate\Database\Eloquent\Collection
 * @property string nombre
 * @property string numero
 * @property string finicio
 * @property string ftermino
 * @property float tasainteres
 * @property integer entidadfinan
 * @property string diapago
 * @property float monto_inicial
 * @property string fapertura
 * @property integer diascalculo
 */
class creditos extends Model
{
    use SoftDeletes;

    public $table = 'creditos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'numero',
        'finicio',
        'ftermino',
        'tasainteres',
        'entidadfinan',
        'diapago',
        'monto_inicial',
        'fapertura',
        'diascalculo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'numero' => 'string',
        'finicio' => 'date',
        'ftermino' => 'date',
        'tasainteres' => 'float',
        'entidadfinan' => 'integer',
        'diapago' => 'integer',
        'monto_inicial' => 'float',
        'fapertura' => 'date',
        'diascalculo' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tasainteres' => 'required',
        'entidadfinan' => 'required',
        'monto_inicial' => 'required'
    ];

    public function financieras()
    {
      return $this->belongsTo('App\Models\efinanciera', 'entidadfinan');
    }


}
