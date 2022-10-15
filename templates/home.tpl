{include file='templates/header.tpl'}
<div class="container text-center">
    <h3>Tabla de invocaciones</h3> 
</div>
<table class="table table-dark table-striped">
<tr class="text-center">
<td>Nombre</td>
<td >Categoria</td>
<td>Rendimiento</td>
<td><button type="button" class="btn btn-outline-light "><a class="nav-link" href="home/all">Detalle de todos!!</a></button></td>
</tr>
{foreach from=$valores item=$valor}
    <tr class="text-center">
    <td >{$valor->nombre}</td>
    <td class="table-secondary">{$valor->normal}</td>
    <td >{$valor->dificil}</td>
    <td class="table-secondary"><a class="nav-link" href='detail/{$valor->id}'>detalles de {$valor->nombre}</a></td>
    </tr>
{/foreach}
</table>

{include file= 'templates/footer.tpl'}