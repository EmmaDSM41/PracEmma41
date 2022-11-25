@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Proveedores</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
          <!--   <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Lista De  Carreras</h6>
            </div> -->
             <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el proveedor?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Informacion de los Proveedores</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="/proveedores">Continuar</a>
                </div>
            </div>
        </div>
    </div>
            <div class="card-body">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="m-1 font-weight-bold text-primary">Lista De Proveedores</h3>
                            <div class="d-flex justify-content-end">
                                    <a class="btn btn-primary" href="proveedores/create"><i class="fa-solid fa-layer-group"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                           
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Direccion</th>
                                            <th>Telefono</th>
                                            <th>funciones</th>
                                             
                                             
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                             <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Direccion</th>
                                            <th>Telefono</th>
                                            <th>funciones</th>
                                          </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($proveedores as $proveedor)
                                        <tr>
                                            <td>{{$proveedor->id}}</td>
                                            <td>{{$proveedor->name}}</td>
                                            <td>{{$proveedor->direccion}}</td>
                                            <td>{{$proveedor->telefono}}</td>


                                             <td>
                                                
                                            <div class="row col-12">
                                            <div class="col-4"> 
                                            <a class="btn btn-success m-3" href="{{ route('proveedores.show', $proveedor->id) }}"><i class="fa-regular fa-eye"></i></a>                                               
                                                     </div>
                                                <div class="col-4">
                                                
    <a class="btn btn-warning m-3" href="{{ route('proveedores.edit', $proveedor->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>

                                                 </div>
                                                 <form action="proveedores/{{$proveedor->id}}" method ="POST" >
                                                 @csrf
                                                 {{ method_field('DELETE') }}
                                                  <button class="btn btn-danger m-3" type="submit" > <i class="fa-sharp fa-solid fa-trash"></i></button>  
                                                </form>
                                            </div>
                                           
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
          
            </div>
        </div>

       

    </div>

  
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@include('layouts.footer')

