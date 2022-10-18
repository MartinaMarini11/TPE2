{include file="header.tpl"}
{include  file="categorias.tpl"}

<table class="table table-success table-striped">        
<thead>
<tr>    
    <th>id</th>
    <th>Nombre</th>
    <th>Descripcion</th>
    <th>Marca</th>
    <th>Precio</th>
    <th>Categoria</th>
</tr>
</thead>
<tbody>
     <tr>
        <td>{$producto->id}</td>
        <td>{$producto->nombre}</td>
        <td>{$producto->descripcion}</td>
        <td>{$producto->marca}</td>
        <td>{$producto->precio}</td>
        <td>{$producto->categoria}</td>
    </tr>            
</tbody>
</table>
<a href="categorias"> Volver a categorias</a>

{include file="footer.tpl"}
