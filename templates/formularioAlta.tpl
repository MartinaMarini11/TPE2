<h1>Agregar nuevo producto</h1>
<form method="POST" action="agregarProducto">
    <label for="nombre">Nombre del producto:</label>
    <input  input class="form-control" type="text" placeholder="" aria-label="default input example" id="nombre" type="text" name="nombre"  required>
    <label for="descripcion">Descripcion:</label>
    <input input class="form-control" type="text" placeholder="" aria-label="default input example" id="descripcion" type="text" name="descripcion"  required>
    <label for="marca">Marca:</label>
    <input input class="form-control" type="text" placeholder="" aria-label="default input example" id="marca" type="text" name="marca" required>
    <label for="precio">Precio:</label>
    <input input class="form-control" type="text" placeholder="" aria-label="default input example" id="precio" type="text" name="precio" required>
    <div class="mb-3">
<label class="form-label">Categoria:</label>
<select name="categoria" class="form-control">
{foreach from=$categoria item=$producto }
  <option value="{$producto->id_categoria}">{$producto->categoria}</option> 
{/foreach}
</select> 
</div>
    
    <button type="submit" class="btn btn-success">Agregar</button>
    
</form>