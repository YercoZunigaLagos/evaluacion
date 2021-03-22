@extends('layouts.dash')

@section('seccion')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Productos</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Lista de productos</h6>
        <a href="/notas/create" class="btn btn-primary btn-sm">Nuevo Producto</a>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="notaTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">marca</th>
                        <th scope="col">precio</th>
                        <th scope="col">costo</th>
                        <th scope="col">creado hace</th>
                        <th ></th>
                        
                        


                    </tr>
                </thead>
                
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>marca</th>
                        <th>precio</th>
                        <th>costo</th>
                        <th>creado hace</th>
                        <th></th>
                        
                    </tr>
                </tfoot>

            </table>

        </div>
    </div>
    
    @endsection()


    @section('scripts')

    <script>
    $(document).ready(function() {
        $('#notaTable').DataTable({
            processing:true,
            serverSider: true,
            ajax:'{!! route('dataTableProducto') !!}',
            columns:[
                {data:'id'},
                {data:'nombre', },
                {data:'descripcion'},
                {data:'marca'},
                {data:'precio'},
                {data:'costo'},
                {data:'created_at', name:'creado hace'},
                {data:'btn'},
                
                
            ]
        });
    });
    </script>

    @endsection()