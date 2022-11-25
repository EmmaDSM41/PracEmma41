<?php

namespace App\Http\Controllers;
use App\Models\proveedores;


use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = proveedores::all();
 
         return view('proveedores.index', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedores.add');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proveedor = new proveedores;
        $proveedor->name = $request->input('name');
        $proveedor->direccion = $request->input('direccion');

        $proveedor->telefono = $request->input('telefono');

         
        $proveedor->save();
        return ('se pudo dar de alta con exito ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proveedor = Proveedores::findOrFail($id);
return view('proveedores.show', ['proveedores' => $proveedor]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proveedor = Proveedores::findOrFail($id);
return view('proveedores.edit', ['proveedores' => $proveedor]);
        //return view('proveedores.edit');

       // $proveedores = proveedores::find($id);
//return $proveedores;
     //return view('proveedores.edit', compact('proveedores'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $proveedor = Proveedores::findOrFail($id);
        $proveedor->name = $request->name;
        $proveedor->direccion = $request->direccion;
         $proveedor->telefono = $request->telefono;
        $proveedor->save();
        //return redirect()->action([ProveedoresController::class, 'index']);
        return ('se pudo actualizar  con exito ');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proveedor = proveedores::findOrFail($id);
        $proveedor->delete();
        return "El registro se elimino con exito";
        //return redirect()->back();
    }
}
