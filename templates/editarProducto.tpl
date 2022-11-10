{include file="header.tpl"}
<h1>Productos:</h1>
<form action="editarProducto/{$producto->id}" method="POST" class="my-4">
<table class="table table-success table-striped">        

   

<tbody>
    {foreach from=$productos item=$producto}
                <tr>
                    <td>{$producto->id}</td>
                    <td>{$producto->nombre}</td>
                    <td>{$producto->descripcion}</td>
                    <td>{$producto->marca}</td>
                    <td>{$producto->precio}</td>
                    
                </tr>            
    {/foreach}
</tbody>
</table>


{foreach from=$productos item=$producto }
<div class="mb-3">
  <label for="type" class="form-label">Nombre</label>
  <input type="text" class="form-control"  name="nombre" value="{$producto->nombre}">
</div>
<div class="mb-3">
  <label for="container" class="form-label">Descripcion</label>
  <input type="text" class="form-control"  name="descripcion" value="{$producto->descripcion}">
</div>
<div class="mb-3">
  <label for="stock" class="form-label">Marca</label>
  <input type="text" class="form-control"  name="marca" value="{$producto->marca}">
</div>
<div class="mb-3">
  <label for="price" class="form-label">Precio</label>
  <input type="text" class="form-control"  name="precio" value="{$producto->precio}">  
{/foreach}
<div class="mb-3">
<label class="form-label">Seleccione una opcion:</label>
<select name="opcionProducto" class="form-control">
{foreach from=$categoria item=$producto }
  <option value="{$producto->id_categoria}">{$producto->nombre}</option> 
{/foreach}
</select> 
</div>
  <button type="submit" class="btn btn-primary mt-2">Editar</button> 
</form>
{include file="footer.tpl"}