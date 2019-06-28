@extends('layout.default')
@section('content')
    

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">SENFORAGE</h4>
                  <p class="card-category"> Clients
                      <a href="{{route('clients.selectvillage')}}"><div class="btn btn-warning">Nouveau Client <i class="material-icons">add</i></div></a> 
                  </p>
                </div>
                @if (session('message'))
                   <div class="alert alert-success">
                       {{ session('message') }}
                   </div>
                   @endif
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table" id="table-clients">
                      <thead class=" text-primary">
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
                          Email
                        </th>
                        <th>
                          Action
                          </th>
                      </thead>
                      <tbody>
                          
                      </tbody>
                     
                    </table>
                
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              
            </div>
          </div>
        </div>
      </div>
      <!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Launch demo modal
</button> --}}

<!-- Modal -->

<!-- Button trigger modal -->

@push('modal')
<div class="modal " id="modal-delete-client" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form method="POST" action="" id="form-delete-client">
      @csrf
      @method('DELETE')
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Êtes-vous sûr de bien vouloir supprimer ce client ?</h6>
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            cliquez sur close pour annuler
  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Supprimer</button>
        </div>
      </div>
    </div>
  </form>
  </div>    
@endpush

      @endsection

      @push('scripts')
      <script type="text/javascript">
      $(document).ready(function () {
          $('#table-clients').DataTable( { 
            "processing": true,
            "serverSide": true,
            "ajax": "{{route('clients.list')}}",
            columns: [
                    { data: 'id', name: 'id' },
                    { data: 'user.name', name: 'user.name' },
                    { data: 'user.firstname', name: 'user.firstname' },
                    { data: 'user.email', name: 'user.email' },
                    { data: null ,orderable: false, searchable: false}

                ],
                "columnDefs": [
                        {
                        "data": null,
                        "render": function (data, type, row) {
                        url_e =  "{!! route('clients.edit',':id')!!}".replace(':id', data.id);
                        url_d =  "{!! route('clients.destroy',':id')!!}".replace(':id', data.id);
                        return '<a href='+url_e+'  class=" btn btn-primary " ><i class="fa fa-edit"></i></a>'+
                        '<div class="btn btn-danger delete btn-delete-client" data-href='+url_d+'><i class="fa fa-trash"></i></div>';
                        

                        },
                        "targets": 4
                        },
                    // {
                    //     "data": null,
                    //     "render": function (data, type, row) {
                    //         url =  "{!! route('clients.edit',':id')!!}".replace(':id', data.id);
                    //         return check_status(data,url);
                    //     },
                    //     "targets": 1
                    // }
                ],
                /*  commande qui permet de voir la copie ou csv ou pdf..du document */
               dom: 'lBrtifp',
           buttons: [
           'copy', 'csv', 'excel', {
               extend: 'pdfHtml5',
               exportOptions: {
                   columns: [ 0, 1, 2, 5 ]
               
           }}, 'print','columnsToggle'
           ],
            /* commande qui permet de rendre actif les flechecad veut voir que 10 ou 25 elts */ 
           "lengthMenu": [ [10, 25, 50,1000, -1], [10, 25, 50,1000, "All"] ]

          });
          $("#table-clients").off('click','.btn-delete-client').on('click','.btn-delete-client',function(){
              var href=$(this).data('href');
              $("#form-delete-client").attr("action",href);
                $("#modal-delete-client").modal();
              
      //     $('#table-clients').off('click', '.btn_delete_client').on('click', '.btn_delete_client',
      //  function() {
      //    var href=$(this).data('href');
      //    $('#form-delete-client').attr('action', href);
      //    $('#modal_delete_client').modal();
      //  });


              });
      });
      </script>

          
      @endpush