<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Userdato extends Model
{
    protected $fillable = ['apellido','identificacion','telefono','direccion','user_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }
    
}
