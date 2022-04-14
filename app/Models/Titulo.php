<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titulo extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function editoriales(){
    return $this->belongsTo('App\Models\Editoriale', 'id_editoriales');
    }

    public function autores(){
        return $this->belongsToMany('App\Models\autor', 'autor_titulo', 'id_titulos', 'id_autores')->withPivot('id_autores','Nota');
    }

}

