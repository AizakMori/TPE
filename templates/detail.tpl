{include file='templates/header.tpl'}
<h1>Invocaciones disponibles: </h1>
{if isset($smarty.session.logged)==true}
<div div class="mb-3" role="group">
<button type="button" class="btn btn-secondary col-2"><a href="all/add" class="text-decoration-none link-light">Añadir Invocacion</a></button>
</div>
{/if}
<div class="d-grid gap-2 d-md-flex justify-content-md-center">
</div>
<table class="table table-dark table-striped-columns">
    <tr>
        <td>Imagen</td>
        <td>Nombre</td>
        <td>Categoria</td>
        <td>Elemento</td>
        <td>velocidad</td>
        <td>Rendimiento</td>
        <td>habilidad</td>
        {if isset($smarty.session.USER_ADMIN) == true}
        <td>!</td>
        <td>!</td>
        {/if}
    </tr>
    {foreach from=$detail item=$valor}
         <tr>
         <td><img  width="100" src="{$valor->img}"></td>
            <td >{$valor->nombre}</td>
            <td class="table-secondary">{$valor->category}</td>
             <td >{$valor->elemento}</td>
             <td >{$valor->velocidad}</td>
             <td >{$valor->rendimiento}</td>
             <td >{$valor->habilidad}</td>
             {if isset($smarty.session.USER_ADMIN) == true}
                <td class="table-secondary"><strong><a class="nav-link text-center" href="all/modif/{$valor->id}">Modificar</a></strong></td>
                <td class="table-secondary"><strong><a class="nav-link text-center" href="all/delete/{$valor->id}">Borrar</a></strong></td>
             {/if}
         </tr>
    {/foreach}
</table>
{if !empty($categories)}{include file='templates/tableEdit.tpl'}{/if}
