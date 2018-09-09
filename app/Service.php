<?php

namespace App;
use App\Stagiaire;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //

    public function stagiaires()
    {
    	return $this->hasMany(Stagiaire::class);
    }
}
