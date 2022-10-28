{include file='templates/header.tpl'}
<div class="mb-3">
<h2>Categorias:</h2>
<div class="mb-2 mx-2" role="group">
<div div class="mb-3" role="group">
<button type="button" class="btn btn-secondary col-2"><a href="categories/add" class="text-decoration-none link-light">Añadir categoria</a></button>
<h3>Categoria/Rendimiento</h3>
</div>
  {foreach from=$categories item=$valor}
    <div class="mb-2" role="group">
    <div class="mb-2 btn-group">
    <button type="button" class="btn btn-secondary btn-lg"><a href="categories/show/{$valor->id_puntos}" class="text-decoration-none link-light">{$valor->category}/{$valor->rendimiento}</a></button>
    <button type="button" class="btn btn-primary btn-sm"><a href="categories/modificar/{$valor->id_puntos}" class="text-decoration-none link-light">Modificar</a></button>
    <button type="button" class="btn btn-primary btn-sm"><a href="categories/delete/{$valor->id_puntos}" class="text-decoration-none link-light">Eliminar</a></button>
    </div>
    </div>
{{/foreach}}
</div >
{if $respuesta != null}
    <div class="alert alert-dark" role="alert">
    <h3> {$respuesta} </h3>
    </div>
{/if}

<div>
    {if $id == true}
        <table class="table table-dark table-striped-columns">
    <tr>
        <td>Num. invoc</td>
        <td>Nombre</td>
        <td>Elemento</td>
        <td>velocidad</td>
        <td>Detalles</td>
    </tr>
    {foreach from=$category item=$valor}
         <tr >
            <td >{$valor->id_puntos}</td>
            <td >{$valor->nombre}</td>
             <td >{$valor->elemento}</td>
             <td >{$valor->velocidad}</td>
             <td class="table-secondary"><strong><a class="nav-link" href='detail/{$valor->id}'>detalles de {$valor->nombre}</a></strong></td>
         </tr>
    {/foreach}
</table>
{/if}
</div>