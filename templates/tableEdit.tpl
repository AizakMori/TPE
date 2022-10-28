<div class="container">
    <form enctype="multipart/form-data" action="all/edit/{$id}" method="POST" class="my-2">
    <div class="row">
        <div class="col-2">
        <input class="form-group" type="file" name="img"></input>
        </div>
        </div>
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
                {foreach from=$categories item=$item}
                    <option value="{$item->id_puntos}">{$item->category}</option>
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
    <button type="submit" class="btn btn-primary mt-2">Guardar cambios</button>
    </form>
    </div>