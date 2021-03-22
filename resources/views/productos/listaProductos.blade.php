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
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>marca</th>
                        <th>precio</th>
                        <th>costo</th>
                        <th>creado hace:</th>
                        <th>editar</th>
                        


                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->nombre }}</td>
                        <td>{{ $item->descripcion }}</td>
                        <td>{{ $item->marca}}</td>
                        <td>{{ $item->precio}}</td>
                        <td>{{ $item->costo}}</td>
                        <td>{{ $item->created_at->diffForHumans()}}</td>
                        <td>
                       
                        <div class="mb-6">
                        <button class="edit-modal btn btn-info" data-id="{{$item->id}}"
                                data-nombre="{{$item->nombre}}" data-descripcion="{{$item->descripcion}}"
                                data-marca="{{$item->marca}}" data-precio="{{$item->precio}}"
                                data-costo="{{$item->costo}}">
                                <span class="glyphicon glyphicon-edit"></span> Edit
                            </button>
                        </div>
                        <div class="mb-6">
                        <button class="delete-modal btn btn-danger" data-id="{{$item->id}}"
                                data-nombre="{{$item->nombre}}">
                                <span class="glyphicon glyphicon-trash"></span> Delete
                            </button>
                        </div>
                        
                        
                        
                        
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>marca</th>
                        <th>precio</th>
                        <th>costo</th>
                        <th>Creado hace:</th>
                        <th>acciones</th>
                    </tr>
                </tfoot>

            </table>

        </div>
    </div>
    <div id="editModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Editar</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="id">ID:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="id" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-12" for="nombre">Nombre:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nombre">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-12" for="descripcion">Descripcion:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="descripcion">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-12" for="marca">Marca:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="marca">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-12" for="precio">Precio:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="precio">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-12" for="costo">Costo:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="costo">
                            </div>
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        <span class='glyphicon glyphicon-remove'></span> Close
                    </button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal">
                        <span id="footer_action_button" class='glyphicon'>Editar </span>
                    </button>

                </div>
            </div>

        </div>
    </div>
    <div id="deleteModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Eliminar</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="deleteContent">
                        Esta seguro que quiera eliminar el producto <span class="producto" style="font-weight: 900;"></span> ? <span class="hidden did"></span>
                    </div>
                </div>
                <div class="modal-footer ">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        <span class='glyphicon glyphicon-remove'></span> Close
                    </button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                        <span id="footer_action_button" class='glyphicon'>Editar </span>
                    </button>

                </div>
            </div>
        </div>
    </div>
    @endsection()


    @section('scripts')

    <script>
    $(document).ready(function() {
        $('#notaTable').DataTable();
    });
    $(document).ready(function() {
        $(document).on('click', '.edit-modal', function() {

            $('#id').val($(this).data('id'));
            $('#nombre').val($(this).data('nombre'));
            $('#descripcion').val($(this).data('descripcion'));
            $('#marca').val($(this).data('marca'));
            $('#precio').val($(this).data('precio'));
            $('#costo').val($(this).data('costo'));
            $('#editModal').modal('show');
        });
        $(document).on('click', '.delete-modal', function() {
            $('.did').text($(this).data('id'));
            $('.producto').html($(this).data('nombre'));
            $('#deleteModal').modal('show');
        });
        $('.modal-footer').on('click', '.delete', function() {
        $.ajax({
            type: 'post',
            url: '/deleteItem',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $('.did').text()
            },
            success: function(data) {
                $('.item' + $('.did').text()).remove();
            }
        });
    });

    });
    </script>

    @endsection()