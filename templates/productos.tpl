{include file="header.tpl"}
{include file="formularioAlta.tpl"}



<hr>
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
    {foreach from=$productos item=$producto}
                <tr>
                    <td>{$producto->id}</td>
                    <td>{$producto->nombre}</td>
                    <td><a href='verDetalle/{$producto->id}'>Ver detalle </a></td>
                    <td>{$producto->marca}</td>
                    <td>{$producto->precio}</td>
                    <td><a class="btn btn-danger" href='borrar/{$producto->id}'> Borrar</a></td>
                    <td><a class="btn btn-warning" href='editarProducto/{$producto->id}'> Editar</a></td>
                    
                </tr>            
    {/foreach}
</tbody>
</table>
{include file="footer.tpl"}