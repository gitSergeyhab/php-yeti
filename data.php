<?php
// ставки пользователей, которыми надо заполнить таблицу
$bets = [
    ['name' => 'Иван', 'price' => 11500, 'ts' => strtotime('-' . rand(1, 50) .' minute')],
    ['name' => 'Константин', 'price' => 11000, 'ts' => strtotime('-' . rand(1, 18) .' hour')],
    ['name' => 'Евгений', 'price' => 10500, 'ts' => strtotime('-' . rand(25, 50) .' hour')],
    ['name' => 'Семён', 'price' => 10000, 'ts' => strtotime('last week')]
];

$is_auth = (bool) rand(0, 1);

$user_name = 'Константин';
$user_avatar = 'img/user.jpg';

$products = ["доски и лыжи", "крепления", "ботинки", "одежда", "инструменты", "разное"];
$products_table = [
    "2014 Rossignol District Snowboard" => ["доски и лыжи", 10999, "img/lot-1.jpg"],
    "DC Ply 2016/2017 Snowboard" => ["доски и лыжи", 1159999, "img/lot-2.jpg"],
    "Крепления Union Contact Pro 2015 года размер L/XL" => ["крепления", 8000.80, "img/lot-3.jpg"],
    "Ботинки для сноуборда DC Munity Charocal" => ["ботинки", 10999, "img/lot-4.jpg"],
    "Куртка для сноуборда DC Munity Charocal" => ["одежда", 75000.333, "img/lot-5.jpg"],
    "Маска Oakley Canopy" => ["разное", 5400, "img/lot-6.jpg"]
];
