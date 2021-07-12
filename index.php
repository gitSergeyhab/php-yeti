<?
require_once('functions.php');
require_once('data.php');

$content = renderTemplate('templates/index.php', [
    'products_table' => $products_table,
    'hm' => get_hours_minutes(),
    ]);

$layout = renderTemplate('templates/layout.php', [
    'title' => 'YetiCave - Главная',
    'content' => $content,
    'products' => $products,
    ]);

print($layout);
