{include file='templates/header.tpl'}
<table class="table table-dark table-striped">
<tr>
<td>Nombre</td>
<td>velocidad</td>
<td>Rendimiento</td>
<td>habilidad</td>
</tr>
{foreach from=$valores item=$valor}
    <tr class="table-dark">
    <td class="table-dark">{$valor->nombre}</td>
    <td class="table-dark">{$valor->velocidad}</td>
    <td class="table-dark">{$valor->dificil}</td>
    <td class="table-dark"><a class="nav-link" href='detail/{$valor->id}'>detalles</a></td>
    </tr>
{/foreach}
</table>
<div class="container text-end">
<button type="button" class="btn btn-dark"><a class="nav-link" href="all">Detalle de todos</a></button>
</div>

{include file= 'templates/footer.tpl'}