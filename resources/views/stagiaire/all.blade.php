<div class="m-portlet m-portlet--mobile">
    <div class="m-portlet__head">
      <div class="m-portlet__head-caption">
        <div class="m-portlet__head-title">
          <h3 class="m-portlet__head-text">
            Liste Stagiaires
          </h3>
        </div>
      </div>

      <div class="m-portlet__head-tools">
        <ul class="m-portlet__nav">
          <li class="m-portlet__nav-item">
            <a href="{{url('stagiaire.create')}}" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air">
              <span>
                <i class="flaticon-plus"></i>
                <span>
                  Nouveau Stagiaire
                </span>
              </span>
            </a>
          </li>
          <li class="m-portlet__nav-item"></li>
          <li class="m-portlet__nav-item"></li>
        </ul>
      </div>
    </div>
    <div class="m-portlet__body">
    <!--begin: Datatable -->
      <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
        <thead>
          <tr>
            <th>
              ID
            </th>
            <th>
              Nom
            </th>
            <th>
              Prenom
            </th>
            <th>
              Service
            </th>
            <th>
              Encadrant
            </th>
            <th>
              Action
            </th>
            <th>
              Action
            </th>
            <th>
              Action
            </th>
          </tr>
        </thead>
     
        <tbody>
          @foreach($stagiairall as $stags)
            <tr>
              <th scope="row">{{$stags->id}}</th>
              <td>{{$stags->nom}}</td>
              <td>{{$stags->prenom}}</td>
              <td>{{$stags->service->nomService}}</td>
              <td>{{$stags->encadrant->nom}}</td>
              <td>
                <i class="flaticon-eye" data-toggle="modal" data-target="#read"> </i>
                <i class="flaticon-edit -success" data-toggle="modal" data-target="#edit"> </i>
                
                  <button class="m-portlet__nav-link btn m-btn m-btn--hover-warning m-btn--icon m-btn--icon-only m-btn--pill btn-edit" data-prenom="{{$stags->prenom}}" data-nom="{{$stags->nom}}" data-id="{{ $stags->id }}" onclick="myFunction(this);" title="Supprimer">
                          <i class="la la-trash"></i>
                  </button>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</div>





<!--begin:Modal-->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
          Confirmer la suppression du stagiaire
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            &times;
          </span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('delete') }}" method="get">
          <div class="form-group m-form__group row">
            
            <div class="col-lg-6">
              <label>
                Stagiaire id :
              </label>
              <input type="text" name="id" id="idS" class="form-control m-input m-input--air m-input--pill m-form--state">
            </div>
            
            <div class="col-lg-6">
              <label>
                Nom Complet :
              </label>
              <input type="text" id="nomS" class="form-control m-input m-input--air m-input--pill m-form--state">
            </div>
          
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">
            Supprimer
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
<!--end:Modal-->





@section('customJS')

<script src="{{asset('assets/vendors/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/demo/default/custom/crud/datatables/extensions/buttons.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>

<script>
function myFunction(identifier) { 
  $('#delete').modal('toggle'); 
      var id = $(identifier).data('id');
      var nom = $(identifier).data('nom');
      var prenom = $(identifier).data('prenom');
      var complet = nom + " " + prenom
      $('#idS').val(id);
      $('#nomS').val(complet);
}
</script>
@endsection