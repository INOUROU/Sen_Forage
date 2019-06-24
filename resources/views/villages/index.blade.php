@extends('layout.default')
@section('content')
    

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">SENFORAGE</h4>
                  <p class="card-category"> villages
                      <a href="{{route('villages.selectvillage')}}"><div class="btn btn-warning">Nouveau village <i class="material-icons">add</i></div></a> 
                  </p>
                </div>
                @if (session('message'))
                   <div class="alert alert-success">
                       {{ session('message') }}
                   </div>
                   @endif
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table" id="table-villages">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Nom village
                        </th>
                        <th>
                            Nom Chef
                        </th>
                        <th>
                          commune
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
<div class="modal " id="modal-delete-village" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form method="POST" action="" id="form-delete-village">
      @csrf
      @method('DELETE')
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Êtes-vous sûr de bien vouloir supprimer ce village ?</h6>
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
          $('#table-villages').DataTable( { 
            "processing": true,
            "serverSide": true,
            "ajax": "{{route('villages.list')}}",
            columns: [
                    { data: 'id', name: 'id' },
                    { data: 'nom', name: 'nom' },
                    { data: 'chef.user.name', name:'chef.user.firstname' },
                    { data: 'commune.arrondissement.departement.region.nom', name: 'commune.arrondissement.departement.region.nom' },
                    
                    { data: null ,orderable: false, searchable: false}

                ],
                "columnDefs": [
                        {
                        "data": null,
                        "render": function (data, type, row) {
                        url_e =  "{!! route('villages.edit',':id')!!}".replace(':id', data.id);
                        url_d =  "{!! route('villages.destroy',':id')!!}".replace(':id', data.id);
                        return '<a href='+url_e+'  class=" btn btn-primary " ><i class="fa fa-edit"></i></a>'+
                        '<div class="btn btn-danger delete btn-delete-village" data-href='+url_d+'><i class="fa fa-trash"></i></div>';
                        

                        },
                        "targets": 4
                        },
                    // {
                    //     "data": null,
                    //     "render": function (data, type, row) {
                    //         url =  "{!! route('villages.edit',':id')!!}".replace(':id', data.id);
                    //         return check_status(data,url);
                    //     },
                    //     "targets": 1
                    // }
                ],
          });
          $("#table-villages").off('click','.btn-delete-village').on('click','.btn-delete-village',function(){
              var href=$(this).data('href');
              $("#form-delete-village").attr("action",href);
                $("#modal-delete-village").modal();
              
      //     $('#table-villages').off('click', '.btn_delete_village').on('click', '.btn_delete_village',
      //  function() {
      //    var href=$(this).data('href');
      //    $('#form-delete-village').attr('action', href);
      //    $('#modal_delete_village').modal();
      //  });


              });
      });
      </script>

          
      @endpush