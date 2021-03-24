

<form action="{{ route('Productos.destroy', $id, $nombre) }}" method="post">
  @csrf
  @method('DELETE')

  <a href="{{ route('Productos.show', $id) }}" class="btn btn-info btn-sm"> Info</a>
  <a href="{{ route('Productos.edit', $id) }}" class="btn btn-warning btn-sm">Editar</i></a>
  

    
   

   
    <input type="submit" name="submit" value="Eliminar" class="btn btn-danger btn-sm"
    onclick="return confirm('¿Estas seguro de eliminar el producto {{$nombre}}?')" >
    

    
  
</form>
