{include file='templates/header.tpl'}
<h1>Detalles de {$titulo} </h1>
<div class="d-grid gap-2 d-md-flex justify-content-md-center">
</div>
<table class="table table-dark table-striped-columns">
    <tr>
        {if $edit == true}<td>Num. invoc</td>{/if}
        <td>Nombre</td>
        <td>Categoria</td>
        <td>Elemento</td>
        <td>velocidad</td>
        <td>Rendimiento</td>
        <td>habilidad</td>
    </tr>
    {foreach from=$detail item=$valor}
         <tr >
            {if $edit == true}<td >{$valor->id_puntos}</td>{/if}
            <td >{$valor->nombre}</td>
            <td class="table-secondary">{$valor->normal}</td>
             <td >{$valor->elemento}</td>
             <td >{$valor->velocidad}</td>
             <td >{$valor->dificil}</td>
             <td >{$valor->habilidad}</td>
         </tr>
    {/foreach}
</table>
{if $edit == true}{include file='templates/tableEdit.tpl'}{/if}
