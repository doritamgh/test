<div  id="container" >
  <table class="table table-striped w-auto">

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">service</th>
      <th scope="col">encadrant</th>
      <th scope="col"> Action </th>
      <th scope="col"><a href="{{url('stagiaire.create')}}"> <button class="btn btn-success"  > Add New</button></a> </th>
      
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
      <td><button class="btn btn-primary  btn-sm" data-toggle="modal" data-target="#read"> Read</button>
        <button class="btn btn-warning  btn-sm" data-toggle="modal" data-target="#edit"> Edit</button>
        <button class="btn btn-danger  btn-sm" data-toggle="modal" data-target="#delete"> Delete</button>
          <!--a class="btn btn-warning  btn-sm" href="{{route('edit',$stags->id)}}" role="button">Edit</a>
          <!--i class="fa fa-edit">edit </i>
          <i class="fa fa-trash"> </i-->

          <!--a class="btn btn-danger btn-sm " href="#" role="button">Delete</a--></td>
     </tr>
     @endforeach
    <!--read modal-->
 <div class="modal fade" id="read" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              ...
      </div>
      <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
      </div>
          </div>
        </div>
      </div>


      <!--edit modal-->
 <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                   <input type="text" name="nom" class="form-control sm">
                   <input type="text" name="prenom" placeholder="prenom"><br>
                   <input type="text" name="tel" placeholder="tel"><br>
                   <input type="text" name="mail" placeholder="mail"><br>
                   <input type="text" name="departement" placeholder="departement"><br>

                    </div>
      <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
      </div>
          </div>
        </div>
      </div>


      <!--delete modal-->
 <div class="modal  modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <div>
                <h4> Are you sure you want to delete this intern ?</h4>


              </div>      </div>
      <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Delete</button>
      </div>
          </div>
        </div>
      </div>
  </tbody>
</table>