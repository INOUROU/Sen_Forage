@extends('layout.default')
@section('content')
    

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">SENFORAGE</h4>
                  <p class="card-category"> comptables
                      <a href="{{route('comptables.create')}}"><div class="btn btn-warning">Nouveau comptable <i class="material-icons">add</i></div></a> 
                  </p>
                </div>
                @if (session('message'))
                   <div class="alert alert-success">
                       {{ session('message') }}
                   </div>
                   @endif
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table" id="table-comptables">
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
                          Matricule
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
<div class="modal " id="modal-delete-comptable" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form method="POST" action="" id="form-delete-comptable">
      @csrf
      @method('DELETE')
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Êtes-vous sûr de bien vouloir supprimer ce comptable ?</h6>
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
          $('#table-comptables').DataTable( { 
            "processing": true,
            "serverSide": true,
            "ajax": "{{route('comptables.list')}}",
            columns: [
                    { data: 'id', name: 'id' },
                  
                    { data: 'user.firstname', name: 'user.firstname' },
                    { data: 'user.name', name: 'user.name' },
                    { data: 'user.email', name: 'user.email' },
                    { data: 'matricule', name: 'matricule' },
                    { data: null ,orderable: false, searchable: false}

                ],
                "columnDefs": [
                        {
                        "data": null,
                        "render": function (data, type, row) {
                        url_e =  "{!! route('comptables.edit',':id')!!}".replace(':id', data.id);
                        url_d =  "{!! route('comptables.destroy',':id')!!}".replace(':id', data.id);
                        return '<a href='+url_e+'  class=" btn btn-primary " ><i class="fa fa-edit"></i></a>'+
                        '<div class="btn btn-danger delete btn-delete-comptable" data-href='+url_d+'><i class="fa fa-trash"></i></div>';
                        

                        },
                        "targets": 5
                        },
                    // {
                    //     "data": null,
                    //     "render": function (data, type, row) {
                    //         url =  "{!! route('comptables.edit',':id')!!}".replace(':id', data.id);
                    //         return check_status(data,url);
                    //     },
                    //     "targets": 1
                    // }
                ],
          });
          $("#table-comptables").off('click','.btn-delete-comptable').on('click','.btn-delete-comptable',function(){
              var href=$(this).data('href');
              $("#form-delete-comptable").attr("action",href);
                $("#modal-delete-comptable").modal();
              
      //     $('#table-comptables').off('click', '.btn_delete_comptable').on('click', '.btn_delete_comptable',
      //  function() {
      //    var href=$(this).data('href');
      //    $('#form-delete-comptable').attr('action', href);
      //    $('#modal_delete_comptable').modal();
      //  });


              });
      });
      </script>

          
      @endpush