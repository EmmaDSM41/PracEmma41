@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<div class="container-fluid">

     
   

<div class="row">
<h3>FORMULARIO DE ALTA PROVEEDORES</h3>
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Lista De Proveedores</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                        aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Acciones:</div>
                        <a class="dropdown-item" href="/proveedores/create">Crear Maestro</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Alta Proveedor</h6>
            </div>
            <div class="card-body">
                
            <form action='/proveedores' method="POST" enctype="">
                 <!--{!! csrf_field() !!}-->                         
                 {{csrf_field()}}
                <label for=""> Nombre:</label>
                <input class="form-control" type="text" value="" name="name">
                <label for=""> Direccion:</label>
                <input class="form-control" type="text" value="" name="direccion">
                <label for=""> Telefono:</label>
                <input class="form-control" type="text" value="" name="telefono">
                 
                    <button type="submit" class="btn btn-primary m-3">Guadar</button>

                </div>
            </form>
            </div>
        </div>

       

    </div>

  
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@include('layouts.footer')