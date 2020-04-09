<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected  $fillable = ["nombre","apellido","dni","cargo","tlfcelular","rol","dispositivos_id"]; 
    public function dispositivo() { return $this->hasMany(Dispositivo::class); } 
    public function clientes() { return $this->belongsToMany(Clientes::class); } 
}
