<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class venta_titulo extends Model
{
    use HasFactory;

    protected $table = "ventas_titulos";

    protected $fillable=['id_ventas','id_titulos','cantidad',]; 

    public function ventas(){
        return $this->belongsTo('App\Models\venta', 'id_ventas');
    }

    public function titulos(){
        return $this->belongsTo('App\Models\titulos', 'id_titulos');
    }
}
