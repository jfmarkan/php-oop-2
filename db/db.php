<?php

include_once __DIR__ . '/../classes/Product.php';
include_once __DIR__ . '/../classes/Type.php';
include_once __DIR__ . '/../classes/Category.php';
include_once __DIR__ . '/../classes/Description.php';

$dog = new Category('Dog', '<i class="fa-solid fa-dog"></i>');
$cat = new Category('Cat', '<i class="fa-solid fa-cat"></i>');

$food = new Type ('Food', '<i class="fa-solid fa-bowl-food"></i>');
$cage = new Type ('Cage', '<i class="fa-solid fa-suitcase"></i>');
$toy = new Type ('Toy', '<i class="fa-solid fa-baseball"></i>');

$product1 = new Description($dog, $food, '146004', 'Alimento para perro adulto raza mediana', 'dog-food.png', 'ProPlan','$35.990');
$product2 = new Description($dog, $cage, '276004', 'Transpotadora con puerta de metal', 'dog-cage.webp', 'Bergamo Gipsy','$12.050');
$product3 = new Description($dog, $toy, '237564', 'Hueso de Soga', 'dog-toy.webp', 'Rascals','$3.050');
$product4 = new Description($cat, $food, '146026', 'Alimento para gato adulto pollo y arroz', 'cat-food.png', 'ProPlan','$35.950');
$product5 = new Description($cat, $cage, '248030', 'Bolso Explorer Airline transparente', 'cat-cage.webp', 'Cocooning','$83.000');
$product6 = new Description($cat, $toy, '243752', 'Castillo vesper para gato', 'cat-toy.webp', 'Catit','$24.390');

$products = [$product1, $product2, $product3, $product4, $product5, $product6];