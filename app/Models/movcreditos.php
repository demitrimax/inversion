<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class movcreditos extends Model
{
    //
    use SoftDeletes;

    public $table = 'mov_creditos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at','fecha'];


    public $fillable = [

    ];

    public function empresas()
    {
      return $this->belongsTo('App\Models\empresas','empresa_id');
    }

}
