<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marcaje extends Model
{
    //
    protected $fillable = [
        'imagen',
    ];


    // El marcaje pertenece a un personal
    public function personal(){
        return $this->belongsTo('App\Personal');
    }

}
