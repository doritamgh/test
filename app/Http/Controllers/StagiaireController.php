<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Encadrant;
use App\Stagiaire;
use App\Service;

class StagiaireController extends Controller
{
	public function getviewStag()
	{
		$encadrants = Encadrant::all();
		$services   = Service::all();
		return view('stagiaire.create',compact('encadrants', 'services'));
	}

	public function getviewAll()
	{
		$service = Service::find(request('departement'));
		$stagiairall = Stagiaire::all();
		return view('home',compact('stagiairall', 'service'));
	}


public function showstag($id)

	{
		$stagview = Stagiaire::find($id);
		return view('stagiaire.read', compact('stagview'));
	}



	public function delete(Request $request)
	{
        $stagdelete = Stagiaire::find($request['id']);

		$stagdelete->delete();

		return redirect('home');
	}


public function edit($id)

	{
		$stagedit = Stagiaire::find($id);
		return view('stagiaire.edit', compact('stagedit'));
	}



    public function create(Request $request) 
    {	
    	$this->validate($request, [
    		'cin' => 'required|unique:stagiaires',
    		'nom' => 'required',
    		'prenom' => 'required',
    		'tel' => 'required|numeric',
    		'mail' => 'required|email',
    		'duree' => 'required|numeric',
    		'datedeb' => 'required|date',
    		'datefin' => 'required|date',
    	
    	]); 

    	$encadrant = Encadrant::find(request('encadrant'));
    	$service = Service::find(request('departement'));
				
        $stagiaire = new Stagiaire();
        $stagiaire->CIN=request('cin');
        $stagiaire->nom = request('nom');
        $stagiaire->prenom = request('prenom');
        $stagiaire->tel = request('tel');
        $stagiaire->email = request('mail');
        $stagiaire->datedeb = request('datedeb');
        $stagiaire->datefin = request('datefin');
        $stagiaire->datefin = request('datefin');
        $stagiaire->typeS = request('typeS');
        $stagiaire->duree = request('duree');
        $stagiaire->Etablissment = request('etablissment');

        $encadrant->stagiaires()->save($stagiaire);
        $service->stagiaires()->save($stagiaire);

        // $stagiaire->encadrant_id = request('encadrant');

        // $stagiaire->save();
        
        return redirect('/home');
    }
}
