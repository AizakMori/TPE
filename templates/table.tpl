{include file='templates/header.tpl'}
{* {include file='templates/table_in.tpl'} *}
<div class="container text-center">
    <h3>Tabla de invocaciones</h3> 
    <button type="button" class="btn btn-dark"><a class="nav-link" href="all">Detalle de todos</a></button>
</div>
<table class="table table-dark table-striped">
<tr class="text-center">
<td>Nombre</td>
<td>Velocidad</td>
<td>Categoria</td>
<td>Informacion</td>
</tr>
{foreach from=$valores item=$valor}
    <tr class="text-center">
    <td >{$valor->nombre}</td>
    <td >{$valor->velocidad}</td>
    <td >{$valor->normal}</td>
    <td class="table-secondary"><a class="nav-link" href='detail/{$valor->id}'>detalles</a></td>
    </tr>
{/foreach}
</table>

{include file= 'templates/footer.tpl'}