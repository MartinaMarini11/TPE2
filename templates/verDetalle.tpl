{include file="header.tpl"}
<h1>Detalle del producto: {$producto->nombre} </h1>
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
<a class="btn btn-primary" href="home"> Volver al home</a>

{include file="footer.tpl"}
