@extends('layouts.dash')

@section('seccion')
<div class="card shadow mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="m-0 font-weight-bold text-primary" style="text-align: left;">Producto detalles</h4>
        
    </div>

    <div class="card-body">
    <div class="mb-2">
      <table class="table table-bordered table-striped">
        <tbody>
          <tr>
            <th> ID </th>
            <td> {{ $producto->id }} </td>
          </tr>
          <tr>
            <th> Nombre </th>
            <td> {{ $producto->nombre }} </td>
          </tr>
          <tr>
            <th> Descripción </th>
            <td> {{ $producto->descripcion }} </td>
          </tr>
          <tr>
          <tr>
            <th> Marca </th>
            <td> {{ $producto->marca }} </td>
          </tr>
          <tr>
            <th> Precio </th>
            <td> ${{ $producto->precio }} </td>
          </tr>
          <tr>
            <th> Costo </th>
            <td> ${{ $producto->costo }} </td>
          </tr>
        </tbody>
      </table>
    </div>
    <a class="btn btn-sm btn-secundary bg-gray-400" href="{{ route('mantenedorProductos') }}">Volver</a>
    </div>

</div>
@endsection()