@extends('layout.default')
@section('content')

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card"  style="padding:20px">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">SENFORAGE</h4>
                  <p class="card-category"> compteurs</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="compteurs" class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Serie compteur
                        </th>
                        
                        <th>
                          Modification
                        </th>
                      </thead>
                      <tbody>
                          @foreach ($compteurs as $compteur)



                        <tr>
                          <td>
                            {{$compteur->id}}
                          </td>
                          <td>
                            {{$compteur->numero_serie}}<br>
                           
                          </td>
                         <td>
                              <a class="btn btn-primary" href={{route('compteurs.show',['compteur'=>$compteur->id])}}><i class="material-icons">edit</i> </a>
                              <a class="btn btn-primary" href={{route('compteurs.show',['compteur'=>$compteur->id])}}><i class="material-icons">delete</i> </a>
                          </td>

                        </tr>
                        @endforeach
                      </tbody>

                    </table>
                    {{ $compteurs->links() }}
                  </div>
                </div>
              </div>
            </div>
            
           
          </div>
        </div>
      </div>
       
     
      @endsection

    