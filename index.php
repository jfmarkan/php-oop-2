<?php

include_once __DIR__ . '/classes/category.php';

$category = new Category("Perros");
$type = new Type("Perros", "Comida");
$product = new Product("Perros", "Comida", "Marca", "Nombre del producto", 9.99, "ABC123");

var_dump($category);