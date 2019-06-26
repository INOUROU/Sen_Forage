@extends('layout.default')
@section('content')
    

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">SENFORAGE</h4>
                  <p class="card-category"> consommations
                      <a href="{{route('consommations.selectvillage')}}"><div class="btn btn-warning">Nouveau consommation <i class="material-icons">add</i></div></a> 
                  </p>
                </div>
                @if (session('message'))
                   <div class="alert alert-success">
                       {{ session('message') }}
                   </div>
                   @endif
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table" id="table-consommations">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                         Valeur
                        </th>
                        <th>
                           Date
                        </th>
                        <th>
                         ID compteur
                        </th>
                        <th>
                          ID facture
                         </th>
                         <th>
                          ID agent
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
<div class="modal " id="modal-delete-consommation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form method="POST" action="" id="form-delete-consommation">
      @csrf
      @method('DELETE')
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Êtes-vous sûr de bien vouloir supprimer ce consommation ?</h6>
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
          $('#table-consommations').DataTable( { 
            "processing": true,
            "serverSide": true,
            "ajax": "{{route('consommations.list')}}",
            columns: [
                    { data: 'id', name: 'id' },
                    { data: 'valeur', name: 'valeur' },
                    { data: 'date', name: 'date' },
                    { data: 'compteurs_id', name: 'compteurs_id' },
                    { data: 'factures_id', name: 'factures_id' },
                    { data: 'agents_id', name: 'agents_id' },
                    { data: null ,orderable: false, searchable: false}

                ],
                "columnDefs": [
                        {
                        "data": null,
                        "render": function (data, type, row) {
                        url_e =  "{!! route('consommations.edit',':id')!!}".replace(':id', data.id);
                        url_d =  "{!! route('consommations.destroy',':id')!!}".replace(':id', data.id);
                        return '<a href='+url_e+'  class=" btn btn-primary " ><i class="fa fa-edit"></i></a>'+
                        '<div class="btn btn-danger delete btn-delete-consommation" data-href='+url_d+'><i class="fa fa-trash"></i></div>';
                        

                        },
                        "targets": 6
                        },
                    // {
                    //     "data": null,
                    //     "render": function (data, type, row) {
                    //         url =  "{!! route('consommations.edit',':id')!!}".replace(':id', data.id);
                    //         return check_status(data,url);
                    //     },
                    //     "targets": 1
                    // }
                ],
          });
          $("#table-consommations").off('click','.btn-delete-consommation').on('click','.btn-delete-consommation',function(){
              var href=$(this).data('href');
              $("#form-delete-consommation").attr("action",href);
                $("#modal-delete-consommation").modal();
              
      //     $('#table-consommations').off('click', '.btn_delete_consommation').on('click', '.btn_delete_consommation',
      //  function() {
      //    var href=$(this).data('href');
      //    $('#form-delete-consommation').attr('action', href);
      //    $('#modal_delete_consommation').modal();
      //  });


              });
      });
      </script>

          
      @endpush