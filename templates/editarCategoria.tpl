
<h2>Editar categoria:</h2>
<form action="editarCategoria/{$producto->id}" method="POST" class="my-4">
<div class="mb-3">
<label class="form-label">Categoria:</label>
<select name="categoria" class="form-control">
{foreach from=$categoria item=$producto }
  <option value="{$producto->id_categoria}">{$producto->categoria}</option> 
{/foreach}
</select> 
</div>
  <button type="submit" class="btn btn-primary mt-2">Editar</button> 
</form>



