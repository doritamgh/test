<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Encadrant extends Model
{
    //
    public function stagiaires(){

    	return $this->hasMany(Stagiaire::class);
    }
}
