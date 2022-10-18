{include file="header.tpl"}
<h1>Productos:</h1>
<table class="table table-success table-striped">        
<thead>
<tr>    
    <th>id</th>
    <th>Nombre</th>
    <th>Descripcion</th>
    <th>Marca</th>
    <th>Precio</th>
    <th>Borrar</th>
    <th>Editar</th>
</tr>
</thead>

   

<tbody>
    {foreach from=$categorias item=$categoria}
                <tr>
                    <td>{$categoria->id}</td>
                    <td>{$categoria->nombre}</td>
                    <td>{$categoria->descripcion}</td>
                    <td>{$categoria->marca}</td>
                    <td>{$categoria->precio}</td>
                    
                </tr>            
    {/foreach}
</tbody>

{include file="footer.tpl"}