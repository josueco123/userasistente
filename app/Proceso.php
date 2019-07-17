<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Proceso extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'radicacion', 'juzgado', 'demandante','demandado',
    ];

    public function estados(){
        return $this->hasMany('App\Estado');
    }

    public function users(){
        return $this->belongsToMany('App\User', 'user_procesos')
        ->withPivot('id', 'user_id','proceso_id');
    }
}
