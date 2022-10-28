{include file='templates/header.tpl'}
<h1>Detalles de {$titulo} </h1>
<div div class="mb-3" role="group">
<button type="button" class="btn btn-secondary col-2"><a href="all/add" class="text-decoration-none link-light">Añadir Invocacion</a></button>
</div>
<div class="d-grid gap-2 d-md-flex justify-content-md-center">
</div>
<table class="table table-dark table-striped-columns">
    <tr>
        <td>Num. invoc</td>
        <td>Nombre</td>
        <td>Categoria</td>
        <td>Elemento</td>
        <td>velocidad</td>
        <td>Rendimiento</td>
        <td>habilidad</td>
        <td>!</td>
        <td>!</td>
    </tr>
    {foreach from=$detail item=$valor}
         <tr >
            <td >{$valor->id_puntos}</td>
            <td >{$valor->nombre}</td>
            <td class="table-secondary">{$valor->category}</td>
             <td >{$valor->elemento}</td>
             <td >{$valor->velocidad}</td>
             <td >{$valor->rendimiento}</td>
             <td >{$valor->habilidad}</td>
             <td class="table-secondary"><strong><a class="nav-link text-center" href="all/modif/{$valor->id}">Modificar</a></strong></td>
            <td class="table-secondary"><strong><a class="nav-link text-center" href="all/delete/{$valor->id}">Borrar</a></strong></td>
         </tr>
    {/foreach}
</table>
{if !empty($categories)}{include file='templates/tableEdit.tpl'}{/if}
