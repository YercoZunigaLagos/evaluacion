@extends('layouts.dash')

@section('seccion')
<style>

@media (min-width: 75px) and (max-width: 600px) {
  .card {
        font-size: 9px !important;
        margin-top: 15px;
  }
}

</style>
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Productos</h1>
<!-- DataTales Example -->
<div class="card shadow mb-12">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Lista de productos</h6>
        <a href="{{route('Productos.create')}}" class="btn btn-primary btn-sm">Nuevo Producto</a>
    </div>
    
    <div class="card-body">
        <div class="table-responsive">
            <table class="display nowrap" id="notaTable" width="100%" cellspacing="0">
                <thead>
                    <tr></tr>
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
</div>
    @endsection()


    @section('scripts')

    <script>
    $(document).ready(function() {
        $('#notaTable').DataTable({
            processing:true,
            serverSider: true,
            responsive: {
                details: {
                    type: 'column',
                    target: 'tr'
                }
            },
            
            ajax:'{!! route('dataTableProducto') !!}',
            columns:[
                {data:'id'},
                {data:'nombre', },
                
                {data:'marca'},
                {data:'precio'},
                {data:'costo'},
                
                {data:'btn'},
                
                
            ],
            "columnDefs": [
            {
                "targets": [ 0 ],
                "visible": false
                
            },
            {
                    'visible':true, 'targets':[5]
                }
            
        ]
        });
    });
    </script>

    @endsection()