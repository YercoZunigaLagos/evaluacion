<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Productos;
use Yajra\DataTables\DataTables;

class productosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //

        return view('productos/listaProductos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = $request->all();
        
        Productos::create($producto);
        return redirect()->route('mantenedorProductos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Productos::findOrFail($id);
        return view('productos.ver', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Productos::findOrFail($id);
        return view('productos.editar', compact('producto'));
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
        $producto = Productos::find($id);
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->marca = $request->marca;
        $producto->costo = $request->costo;
        $producto->precio = $request->precio;
        $producto->save();
        return redirect()->route('mantenedorProductos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $producto = Productos::findOrFail($id);
        $producto->delete();
        return redirect()->back();
    }
     public function dataTable()
    {

         //llamando a todos los datos
         return DataTables::of(Productos::select('id','nombre','marca','precio','costo','created_at'))
         ->editColumn('created_at',function(Productos $producto){
             return $producto->created_at->diffForHumans();
         })
        //  ->addColumn('show','<a href="{{route(\'Productos.show\', $id)}}" class="btn btn-info btn-sm">' .('ver').'</a>')
        //  ->addColumn('edit','<a href="{{route(\'Productos.edit\', $id)}}" class="btn btn-warning btn-sm">' .('Editar').'</a>')
        //  ->addColumn('delete', '<form action="{{route(\'Productos.destroy\', $id)}}" method="POST">
        // <input type="hidden" name="_method" value="DELETE">
        // <input type="submit" name="submit" value="'.('Eliminar').'" class="btn btn-danger btn-sm" onClick="return confirm(\'Seguro?\')">
        // {{csrf_field()}}
        //  </form>')
        //  ->rawColumns(['show', 'edit','delete'])
        ->addColumn('btn', 'productos.dataTable.btn')
        ->rawColumns(['btn'])
         ->toJson();
    }

}
