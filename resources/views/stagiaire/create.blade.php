@extends('layouts.master')
@section('content')
@if ($errors->any())
			    <div class="alert alert-danger btn-sml">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div><br />
			@endif
<div class="panel-heading">
    <div class="row">
      

	</div>
</div>

<div class="m-portlet m-portlet--tab">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<span class="m-portlet__head-icon m--hide">
					<i class="la la-gear"></i>
				</span>
				<h3 class="m-portlet__head-text">
					test add
				</h3>
			</div>
		</div>
	</div>
	<!--begin::Form-->
	<form class="m-form m-form--fit m-form--label-align-right" action="{{route('create')}}" method="POST">
				{{ csrf_field() }}
		
		<div class="m-portlet__body">
			<div class="form-group m-form__group">
				<label for="cin">
					Cin
				</label>
				<input type="text" class="form-control m-input m-input--square" id="cin" name="cin"  aria-describedby="emailHelp" placeholder="Cin">
				
			</div>
			<div class="form-group m-form__group">
				<label for="nom">
					Nom
				</label>
				<input type="text" class="form-control m-input m-input--square" id="nom" name="nom" placeholder="Nom">
			</div>

			<div class="form-group m-form__group">
				<label for="prenom">
					Prenom
				</label>
				<input type="text" class="form-control m-input m-input--square" id="prenom"  name="prenom" placeholder="Prenom">
			</div>

			
			<div class="form-group m-form__group">
				<label for="tel">
					Telephone
				</label>
				<input type="text" class="form-control m-input m-input--square" id="tel" name="tel" placeholder="telephone">
			</div>

			<div class="form-group m-form__group">
				<label for="mail">
					Email
				</label>
				<input type="email" class="form-control m-input m-input--square" id="mail"  name="mail" placeholder="Email">
			</div>

			<div class="form-group m-form__group">
				<label for="etablissment">
					etablissment
				</label>
				<input type="text" class="form-control m-input m-input--square" id="etablissment" name="etablissment" placeholder="Etablissment">
			</div>


			<div class="form-group m-form__group">
            <label for="title"> Service </label>
                 <select class="form-control" id="departement" name="departement">
                 	@foreach($services as $srv)
			    	<option value="{{$srv->id}}" >{{$srv->nomService}}</option>
			    	@endforeach
			  	</select>      
			</div>

			<div class="form-group m-form__group">
				<label for="duree">
					Durée
				</label>
				<select class="form-control m-input" id="duree" name="duree">
					<option value="1">
						1
					</option>
					<option value="2">
						2
					</option>
					<option value="3">
						3
					</option>
					<option value="4">
						4
					</option>
					<option value="5">
						5
					</option>
					<option value="6">
						6
					</option>
				</select>
			</div>

			<div class="form-group m-form__group">
			<label for="typeS">Type de stage:</label>
			    <select class="form-control" id="typeS" name="typeS">
			    	<option value="observation" >Observation</option>
				    <option value="finEtude">Fin d etude</option>
				    <option value="application">Application</option>
				    <option value="technicien">Technicien</option>
			  	</select>
			</div>

			<div class="form-group m-form__group">	
				<label for="title"> encadrant </label>
                 <select class="form-control" id="encadrant" name="encadrant">
                 	@foreach($encadrants as $enc)
			    	<option value="{{$enc->id}}" >{{$enc->nom}}</option>
			    	@endforeach
			  	</select>     
			</div>

			<div class="form-group m-form__group">
				<input class="form-control m-input" type="date"  id="datedeb" name="datedeb">
			</div>

			
			<div class="form-group m-form__group">
				<input class="form-control m-input" type="date" id="datedeb" name="datefin">
			</div>

		</div>
		<div class="m-portlet__foot m-portlet__foot--fit">
			<div class="m-form__actions">
				<button type="submit" class="btn btn-primary">
					Submit
				</button>
				<button type="reset" class="btn btn-secondary">
					Cancel
				</button>
			</div>
		</div>
	</form>
	
</div>


@endsection
