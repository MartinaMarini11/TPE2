{include file="header.tpl"}


<h1>Categorias</h1>
<table class="table table-success table-striped">        
<thead>
<tr>    
    <th>id</th>
    <th>Categoria</th>
    {if isset ($smarty.session.USER_EMAIL)}
      <th>Borrar</th>
      <th>Editar</th>
  {/if}
</tr>
</thead>

   

<tbody>
{foreach from=$categorias item=$categoria }
    <tr>
        <td>{$categoria->id_categoria}</td>
        <td><a href="categoria/{$categoria->categoria}">{$categoria->categoria}</a></td>
        {if isset ($smarty.session.USER_EMAIL)}
          <td><a class="btn btn-danger" href='eliminarCategoria/{$categoria->id_categoria}'> Borrar</a></td>
          <td><a class="btn btn-warning" href='editarCategoria/{$categoria->id_categoria}'> Editar</a></td>
      {/if}
    
    </tr>   
  {/foreach}
  </tbody>
  </table>  
{if isset ($smarty.session.USER_EMAIL)}
  <h2>Agregar categoria:</h2>
<form action="agregarCategoria" method="POST" class="my-4">
    <div class="mb-3">
      <label for="categoria" class="form-label">Categoria</label>
      <input  input class="form-control" type="text" placeholder="" aria-label="default input example" id="categoria" type="text" name="categoria"  required>    </div>
  <button type="submit" class="btn btn-primary mt-2">Agregar</button> 
</form>
{/if}

{include file="footer.tpl"}