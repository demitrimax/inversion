<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class operaciones extends Model
{
    //
    use SoftDeletes;

    public $table = 'operaciones';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'monto',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'monto' => 'required',
        'empresa_id' => 'required',
        'tipo'  => 'required',
    ];

    public function empresa()
    {
      return $this->belongsTo('App\Models\empresas','empresa_id');
    }
}
