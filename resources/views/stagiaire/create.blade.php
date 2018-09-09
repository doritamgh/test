@extends('layouts.master')
@section('content')
<div class="panel-heading">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel-heading">ADD</div>	



			@if ($errors->any())
			    <div class="alert alert-danger btn-sml">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div><br />
			@endif
			
			<form action="{{route('create')}}" method="post">
				{{ csrf_field() }}
				<!--label for="title"> cin </label-->	
				 
				<input type="text" name="cin" class="form-control" id="cin" placeholder="Cin">

				<label for="nom"> nom </label>
				<input type="text" name="nom" class="form-control" id="nom">

			   	<label for="title"> prenom</label>
				<input type="text" name="prenom" class="form-control" id="prenom">

				<label for="title"> telephone</label>
				<input type="text" name="tel" class="form-control" id="tel">


				<label for="title">Mail</label>
				<input type="text" name="mail" class="form-control" id="mail">

				<label for="title"> Service </label>
                 <select class="form-control" id="departement" name="departement">
                 	@foreach($services as $srv)
			    	<option value="{{$srv->id}}" >{{$srv->nomService}}</option>
			    	@endforeach
			  	</select>      

				<label for="title"> encadrant </label>
                 <select class="form-control" id="encadrant" name="encadrant">
                 	@foreach($encadrants as $enc)
			    	<option value="{{$enc->id}}" >{{$enc->nom}}</option>
			    	@endforeach
			  	</select>                  

                <label for="typeS">Type de stage:</label>
			    <select class="form-control" id="typeS" name="typeS">
			    	<option value="observation" >Observation</option>
				    <option value="finEtude">Fin d'etude</option>
				    <option value="application">Application</option>
				    <option value="technicien">Technicien</option>
			  	</select>

                <label for="title"> durée </label>
				<input type="text" name="duree" class="form-control" id="duree">
				<label for="title"> date debut </label>
				<input type="date" name="datedeb" class="form-control" id="datedeb">


				<label for="title"> date fin </label>
				<input type="date" name="datefin" class="form-control" id="datefin">

				<label for="title"> etablissement </label>
				<input type="text" name="etablissment" class="form-control" id="etablissment">

                <button class="btn btn-sml" type="submit">enregistrer</button>
			</form>
		</div>
	</div>
</div>
@endsection
