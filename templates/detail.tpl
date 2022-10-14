{include file='templates/header.tpl'}
<h1>Detalles de {$titulo} </h1>
<div class="d-grid gap-2 d-md-flex justify-content-md-center">
<form action="filtro" method="POST" class="input-group mb-1">
        <select name="categoria" class="form-select " id="inputGroupSelect01">
            <option value="default">Categoria</option>
            <option value="comun">Comun</option>
            <option value="raro">Raro</option>
            <option value="epico">Epico</option>
            <option value="legendario">Legendario</option>
        </select>
        <select name="rendimiento" class="form-select" id="inputGroupSelect01">
            <option value="default">Rendimiento</option>
            <option value="bajo" class="">bajo</option>
            <option value="alto" class="">alto</option>
        </select>
        <button type="submit" class="btn btn-outline-dark dropdown">Filtrar</button>
</form>
</div>
<table class="table table-dark table-striped-columns">
    <tr>
        <td>Nombre</td>
        <td>Categoria</td>
        <td>Elemento</td>
        <td>velocidad</td>
        <td>Rendimiento</td>
        <td>habilidad</td>
    </tr>
    {foreach from=$detail item=$valor}
         <tr >
            <td >{$valor->nombre}</td>
            <td class="table-secondary">{$valor->normal}</td>
             <td >{$valor->elemento}</td>
             <td >{$valor->velocidad}</td>
             <td >{$valor->dificil}</td>
             <td >{$valor->habilidad}</td>
         </tr>
    {/foreach}
</table>
{if $edit == 1}{include file='templates/tableEdit.tpl'}
    {include file= 'templates/footer.tpl'}
{else}{include file= 'templates/footer.tpl'}{/if}
