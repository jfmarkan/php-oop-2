<?php

include_once __DIR__ . '/../classes/Product.php';
include_once __DIR__ . '/../classes/Type.php';
include_once __DIR__ . '/../classes/Category.php';
include_once __DIR__ . '/../classes/Description.php';

$dog = new Category('Dog', '<i class="fa-solid fa-dog"></i>');
$cat = new Category('Cat', '<i class="fa-solid fa-cat"></i>');

$dogFood = new Food($dog, '146004', 'Alimento para perro adulto raza mediana', 'dog-food.png', 'ProPlan','$35.990', '26%', '15%', '3%', '12%', '8,5%', '0,9% / 1,6%', '0,7% / 1,2%');
$dogCage = new Cage($dog, '276004', 'Transpotadora con puerta de metal', 'dog-cage.webp', 'Bergamo Gipsy','$12.050', 'Todos los Tamaños', '68,4cm', '47,6cm', '43,8cm');
$dogToy = new Toy($dog, '237564', 'Hueso de Soga', 'dog-toy.webp', 'Rascals','$3.050', 'Soga', 'Verde');
$catFood = new Food($cat, '146026', 'Alimento para gato adulto pollo y arroz', 'cat-food.png', 'ProPlan','$35.950','36%','16%','2,5%','12%','8,5%','0,9% / 1,4%','0,9% / 1,4%');
$catCage = new Cage($cat, '248030', 'Bolso Explorer Airline transparente', 'cat-cage.webp', 'Cocooning','$83.000', 'Todos los Tamaños', '40cm', '25cm', '30cm');
$catToy = new Toy($cat, '243752', 'Castillo vesper para gato', 'cat-toy.webp', 'Catit','$24.390', 'Nylon', 'Azul');

$products = [$dogFood, $catFood, $dogCage, $catCage, $dogToy, $catToy];