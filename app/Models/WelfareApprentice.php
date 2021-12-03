<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WelfareApprentice extends Model
{
    use HasFactory;

    public function funcionario(){
        return $this->hasMany('App\Models\Apprentice\Servant','id_servant','id_welfare_apprentice');
    }

    public function control_aprendiz(){
        return $this->hasMany('App\Models\ControlApprentice','id_control_apprentice','id_welfare_apprentice');
    }

    public function medico(){
        return $this->hasMany('App\Models\Doctor','id_doctor','id_welfare_apprentice');
    }
}
