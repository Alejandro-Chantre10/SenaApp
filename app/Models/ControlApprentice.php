<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControlApprentice extends Model
{
    use HasFactory;

    public function control(){
        return $this->hasMany('App\Models\Control','id_control','id_control_apprentice');
    }
    public function aprendiz(){
        return $this->hasMany('App\Models\Apprentice','id_apprentice','id_control_apprentice');
    }
}
