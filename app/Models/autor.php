<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class autor extends Model
{
    use HasFactory;

    protected $table = "autores";

    protected $fillable=['au_nombre','au_ap','au_am','telefono','calle','ciudad','estado','pais','fecha_nac',];

    public function titulos()
    {
        return $this->belongsToMany('App\Models\Titulo','autor_titulo','id_autores','id_titulos')->as('titulos_s')->withPivot('id_autores','Nota');
    }

}
