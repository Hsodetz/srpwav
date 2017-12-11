<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    //
    protected $fillable = [
        'nombre', 'apellido', 'cedula', 'password', 'rol',
    ];

     
    // Un personal tiene muchos marcajes.
    public function marcajes()
    {
        return $this->hasMany('App\Marcaje');
    } 
}
