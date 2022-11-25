@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Proveedores Editar</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> agreagar Proveedores</a>
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar Proveedores</h6>
            </div>
            <div class="card-body">
                
            <form action="{{ route('proveedores.update', $proveedores->id) }}" method ="POST">
        @csrf
        {{ method_field('PUT') }}
        <label>Nombres </label>
        <input type="text" name="name" placeholder="Nombre" value="{{ $proveedores->name }}">
        <label>Direccion:</label>
        <input type="text" name="direccion" placeholder="Direccion" value="{{ $proveedores->direccion }}">
        <label>Teléfono:</label>
        <input type="text" name="telefono" placeholder="Teléfono" value="{{ $proveedores->telefono }}">
        <input type="submit" value="Guardar">
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