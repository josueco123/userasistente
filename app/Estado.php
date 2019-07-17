<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Estado extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fecha', 'descripcion', 'idproceso'
    ];

    public function proceso(){
        return $this->belongsTo('App\Proceso');
    }
}
