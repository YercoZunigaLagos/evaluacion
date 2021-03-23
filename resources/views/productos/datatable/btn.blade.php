

<form action="{{ route('Productos.destroy', $id) }}" method="post">
  @csrf
  @method('DELETE')

  <a href="{{ route('Productos.show', $id) }}" class="btn btn-info btn-circle btn-sm"> <i class="fas fa-info-circle"></i></a>
  <a href="{{ route('Productos.edit', $id) }}" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-exclamation-triangle"></i></a>
 

    
    <a type="submit" name="submit" value="" class="btn btn-danger btn-circle btn-sm"
    onclick="return confirm('Are you sure?')" ><i class="fas fa-trash"></i></a>


  
</form>
