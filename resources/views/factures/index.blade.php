@extends('layout.default')
@section('content')
    

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">SENFORAGE</h4>
                  <p class="card-category"> factures
                      <a href="{{route('factures.create')}}"><div class="btn btn-warning">Nouveau facture <i class="material-icons">add</i></div></a> 
                  </p>
                </div>
                @if (session('message'))
                   <div class="alert alert-success">
                       {{ session('message') }}
                   </div>
                   @endif
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table" id="table-factures">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                         Date limite
                        </th>
                    {{--     <th>
                            valeur totale consommée
                        </th> --}}
                        <th>
                          Debut consommation
                        </th>
                        <th>
                          Fin consommation
                          </th>
                         
                            <th>
                             Montants
                              </th>
                              <th>
                                Details
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
<div class="modal " id="modal-delete-facture" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form method="POST" action="" id="form-delete-facture">
      @csrf
      @method('DELETE')
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Êtes-vous sûr de bien vouloir supprimer ce facture ?</h6>
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
          $('#table-factures').DataTable( { 
            "processing": true,
            "serverSide": true,
            "ajax": "{{route('factures.list')}}",
            columns: [
                    { data: 'id', name: 'id' },
                    { data: 'date_limite', name: 'date_limite' },
                   // { data: 'valeur_totale_consommee', name: 'valeur_totale_consommee' },
                    { data: 'debut_consommation', name: 'debut_consommation' },
                    { data: 'fin_consommation', name: 'fin_consommation' },
                    { data: 'montant', name: 'montant' },
                    { data: 'details', name: 'details' },
                    { data: null ,orderable: false, searchable: false}

                ],
                "columnDefs": [
                        {
                        "data": null,
                        "render": function (data, type, row) {
                        url_e =  "{!! route('factures.edit',':id')!!}".replace(':id', data.id);
                        url_d =  "{!! route('factures.destroy',':id')!!}".replace(':id', data.id);
                        return '<a href='+url_e+'  class=" btn btn-primary " ><i class="fa fa-edit"></i></a>'+
                        '<div class="btn btn-danger delete btn-delete-facture" data-href='+url_d+'><i class="fa fa-trash"></i></div>';
                        

                        },
                        "targets": 6
                        },
                    // {
                    //     "data": null,
                    //     "render": function (data, type, row) {
                    //         url =  "{!! route('factures.edit',':id')!!}".replace(':id', data.id);
                    //         return check_status(data,url);
                    //     },
                    //     "targets": 1
                    // }
                ],
                dom: 'lBfrtip',
                 buttons: [
                 'copy', 'csv', 'excel', 'pdf', 'print'
        ],
         "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ]
          });
          $("#table-factures").off('click','.btn-delete-facture').on('click','.btn-delete-facture',function(){
              var href=$(this).data('href');
              $("#form-delete-facture").attr("action",href);
                $("#modal-delete-facture").modal();
              
      //     $('#table-factures').off('click', '.btn_delete_facture').on('click', '.btn_delete_facture',
      //  function() {
      //    var href=$(this).data('href');
      //    $('#form-delete-facture').attr('action', href);
      //    $('#modal_delete_facture').modal();
      //  });


              });
      });
      </script>

          
      @endpush