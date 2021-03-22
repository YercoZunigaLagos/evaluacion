<style>
#outer
{
    width:100%;
    text-align: center;
}
.inner
{
    display: inline-block;
}
</style>
<div id="outer">
<form action="{{ route('Productos.destroy', $id) }}" method="post">
  @csrf
  @method('DELETE')

  <a href="{{ route('Productos.show', $id) }}" class="btn btn-primary btn-sm inner">Show</a>
  <a href="{{ route('Productos.edit', $id) }}" class="btn btn-warning btn-sm inner">Edit</a>
 
  <input type="submit" name="submit" value="Delete" class="btn btn-sm btn-danger inner"
    onclick="return confirm('Are you sure?')">
</form>
</div>
