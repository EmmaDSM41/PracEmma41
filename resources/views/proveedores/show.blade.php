@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<div class="container-fluid">

     
   
 



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Curso de laravel</title>
</head>
<body>
    <a href="{{ route('proveedores.index') }}"> Ver listado de proveedores</a>
    <h2>DATOS DEL PROVEEDOR</h2>
    <br>
    <label><strong>Nombre:</strong> {{ $proveedores->name}}</label><br>
    <label><strong>Direccion:</strong> {{ $proveedores->direccion }}</label><br>
     <label><strong>Teléfono:</strong> {{ $proveedores->telefono }}</label><br>
</body>
</html>