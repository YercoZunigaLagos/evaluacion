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
                        <th scope="col hidden">Id</th>
                        <th>Nombre</th>
                        <th>marca</th>
                        <th>precio</th>
                        <th>costo</th>
                       
                        <th>Acciones</th>
                        
                        


                    </tr>
                </thead>
                
                

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
                
                {data:'marca'},
                {data:'precio'},
                {data:'costo'},
                
                {data:'btn'},
                
                
            ]
        });
    });
    </script>

    @endsection()