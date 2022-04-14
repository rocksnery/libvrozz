<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editoriale extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function titulos(){
        return $this->hasMany('App\Models\Titulo', 'id_editoriales');
    }

}



