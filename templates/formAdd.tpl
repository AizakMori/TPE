{include file='templates/header.tpl'}
{if $error == "all" }
<div class="container " >
<div class="container text-center"> <h3>Agregar invocacion</h3></div>
<form action="all/añadir" method="POST" class="my-4">
<div class="row">
    <div class="col-2">
        <div class="form-group">
            <label>Nombre</label>
            <input name="name" type="text" class="form-control">
        </div>
    </div>
    <div class="col-2">
    <div class="form-group">
        <label>Categoria</label>
        <select name="id" class="form-control">
            {foreach from=$categoria item=$item}
                <option value="{$item->id_puntos}">{$item->category} - {$item->rendimiento}</option>
            {/foreach}
        </select>
    </div>
    </div>
    <div class="col-2">
    <div class="form-group">
        <label>Elemento</label>
        <select name="element" class="form-control">
            <option value="normal">Normal</option>
            <option value="hielo">Hielo</option>
            <option value="fuego">Fuego</option>
            <option value="electro">Electro</option>
        </select>
    </div>
    </div>
    <div class="col-2">
        <div class="form-group">
            <label>Velocidad</label>
            <select name="speed" class="form-control">
                <option value="muy alta">muy alta</option>
                <option value="alta">alta</option>
                <option value="media">media</option>
                <option value="baja">baja</option>
                <option value="muy baja">muy baja</option>
            </select>
        </div>
    </div>
<div class="form-group">
    <label>Habilidad</label>
    <textarea name="habilidad" class="form-control" rows="1"></textarea>
</div>
<button type="submit" class="btn btn-dark mt-2">Añadir</button>
</form>

        {/if}
{*---------------------------------------------------------------------categoria---------------------------------------------------------------------*}
{if $error == "categories"}
<div class="container text-center"> <h3>Agregar Categoria</h3></div>
<form action="categories/añadir" method="POST" class="my-4">
<div class="row">
<div class="col-auto">
    <label>Nombre de la categoria</label>
    <textarea name="newcategory" class="form-control" rows="1" required></textarea>
    </div>
   <div class="col-auto">
        <div class="form-group">
            <label>Rendimiento</label>
            <select name="rendimiento" class="form-control">
                <option value="bajo">bajo</option>
                <option value="medio">medio</option>
                <option value="alto">alto</option>
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-dark mt-2">Añadir</button>
    </div>
</div>
</form>
{/if}
</div>

