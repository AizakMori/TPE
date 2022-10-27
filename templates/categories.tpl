{include file='templates/header.tpl'}
<ul>
{foreach from=$categories item=$valor}
    <li><a href="categories/show/{$valor->normal}">{$valor->normal}</li>
    {{/foreach}}