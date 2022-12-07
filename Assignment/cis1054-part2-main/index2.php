<?php

require_once __DIR__.'/bootstrap.php';
require_once __DIR__.'/database.php';
require_once __DIR__.'/menu.php';

if (isset($_GET['category']))
{
    $categorySelected = $db -> quote($_GET["category"]);
}
else
{
    $categorySelected = -1;
}

//Get the db object
$db = new Db();

$items = $db -> select("SELECT item.id, item.image, item.name,item.ingredients, item.price, t.name as category FROM items item inner join category t on item.category = t.id where (t.id = $categorySelected or $categorySelected = -1) order by item.id asc");

echo $twig->render('index.html', ['items' => $items, 'itemcategory' => $itemcategory]);

