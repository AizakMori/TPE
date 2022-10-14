{include file='templates/header.tpl'}
<h1>Detalles de {$titulo} </h1>
<table class="table table-dark table-striped">
    <tr>
        <td>Nombre</td>
        <td>Categoria</td>
        <td>Elemento</td>
        <td>velocidad</td>
        <td>Rendimiento</td>
        <td>habilidad</td>
        <td>Interacciones</td>
    </tr>
    {foreach from=$detail item=$valor}
         <tr class="table-dark">
            <td class="table-dark">{$valor->nombre}</td>
            <td class="table-dark">{$valor->normal}</td>
             <td class="table-dark">{$valor->elemento}</td>
             <td class="table-dark">{$valor->velocidad}</td>
             <td class="table-dark">{$valor->dificil}</td>
             <td class="table-dark">{$valor->habilidad}</td>
             <td class="table-secondary"><a class="nav-link" href="delete/{$valor->id_puntos}">borrar</a><a class="nav-link" href="modif/{$valor->id}">modificar</a></td>
         </tr>
    {/foreach}
</table>
{if $edit == 1}{include file='templates/tableEdit.tpl'}
    {include file= 'templates/footer.tpl'}
{else}{include file= 'templates/footer.tpl'}{/if}
