<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Service;
use App\Encadrant;


class Stagiaire extends Model{

    protected $guarded=[];




    public function encadrant()
    {
    	return $this->belongsTo(Encadrant::class);
    }

     public function service()
    {
    	return $this->belongsTo(Service::class);
    }
}
