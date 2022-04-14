<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class libreria extends Model
{
    use HasFactory;

    protected $table = "librerias";
    protected $fillable=['nombre','calle','ciudad','pais','cp',];

    public function ventas(){
        return $this->hasMany('App\Models\venta', 'id_ventas');
    }
    

}
