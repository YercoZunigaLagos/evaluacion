@extends('layouts.dash')

@section('seccion')
<div class="card shadow mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="m-0 font-weight-bold text-primary" style="text-align: left;">Producto editar</h4>

    </div>

    <div class="card-body">
        <form action="{{ route('Productos.update', $producto->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="id">Id</label>
                        <input type="text" id="" class="form-control " name="id" value="{{ $producto->id }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="" class="form-control" name="nombre" value="{{ $producto->nombre }}">
                    </div>
                    <div class="form-group">
                        <label for="marca">Marca</label>
                        <input type="text" id="" class="form-control" name="marca" value="{{ $producto->marca }}">
                    </div>
                </div>
                <div class="col">

                    <div class="form-group">
                        <label for="costo">Costo</label>
                        <input type="number" id="" class="form-control" name="costo" value="{{ $producto->costo }}">
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="number" id="" class="form-control" name="precio" value="{{ $producto->precio }}">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción</label>

                <textarea class="form-control" id="" name="descripcion" rows="3">{{ $producto->descripcion }}</textarea>
            </div>
            
            <div class="form-group">
            <a class="btn btn-sm btn-secundary bg-gray-400" href="{{ route('mantenedorProductos') }}">Volver</a>
                <button class="btn btn-gm btn-success float-right">Actualizar</button>
            </div>
        </form>
    </div>
</div>
@endsection