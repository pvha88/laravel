<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected  $fillable = ["razonsocial","cifvat","telefono","emailcliente","tlfcelular","tipocliente","pais","poblacion", "provicia","direccion"]; 
    public function usuarios() { return $this->belongsToMany(Usuarios::class); } 
}
 