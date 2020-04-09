<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dispositivo extends Model
{ 	
    protected  $fillable = ["dispositivo","servicios","unidad","tipo","marca","modelo","ip",
							"fecha","garantia","usuario","clave","observacion"]; 
    public function usuario() { return $this->hasOne(Usuarios::class); } 
}
