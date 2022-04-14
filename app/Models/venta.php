<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    use HasFactory;

    protected $fillable =['fecha_venta','id_librerias'];

    public function libreria(){
        return $this->belongsTo('App\Models\libreria', 'id_librerias');
    }

    public function ventas_titulos(){
        return $this->hasMany('App\Models\venta_titulo', 'id_titulos', 'id_ventas');
    }

    public function titulos()
    {
        return $this->belongsToMany('App\Models\Titulo','ventas_titulos','id_ventas','id_librerias')->withPivot('id_ventas','cantidad');
    }

}
