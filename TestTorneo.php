<?php

$torneo = new Torneo([], 100000);

$objCat1 = new Categoria(1, 'futbol');
$objCat2 = new Categoria(2, 'basquetbol');

$objE1 = new Equipo('Boca', 'Almiron', 11, $objCat1);
$objE2 = new Equipo('River', 'Demichelis', 11, $objCat1);
$objE3 = new Equipo('Racing', 'Gago', 11, $objCat1);
$objE4 = new Equipo('Independiente', 'Insua', 11, $objCat1);
$objE5 = new Equipo('San Lorenzo', 'Tevez', 11, $objCat1);
$objE6 = new Equipo('Estudiantes', 'Dominguez', 9, $objCat1);

$objE7 = new Equipo('San Lorenso', 'Silvio', 5, $objCat2);
$objE8 = new Equipo('Quimsa', 'Gonzales', 5, $objCat2);
$objE9 = new Equipo('Cordoba', 'Koch', 5, $objCat2);
$objE10 = new Equipo('Corrientes', 'Victoriano', 5, $objCat2);
$objE11 = new Equipo('Obras', 'Martines', 5, $objCat2);
$objE12 = new Equipo('Rivadavia', 'Jorge', 5, $objCat2);


$objBasket = new Basquetbol(11, '2024-05-05',$objE7,80,$objE8,120,7);
$objBasket = new Basquetbol(12,'2024-05-06',$objE9,81,$objE10,110,8);
$objBasket = new Basquetbol(13,'2024-05-07',$objE11,115,$objE12,85,9);

$objFutbol = new Futbol(14,'2024-05-07',$objE1,3,$objE2,2);
$objFutbol = new Futbol(15,'2024-05-08',$objE3,0,$objE4,1);
$objFutbol = new Futbol(16,'2024-05-09',$objE5,2,$objE6,3);

echo $torneo->ingresarPartido($OBJE5, $objE11, '2024-05-23', 'Futbol');
echo $torneo->ingresarPartido($objE11, $objE11, '2024-05-23', 'basquetbol');
echo $torneo->ingresarPartido($objE9, $objE10, '2024-05-25', 'basquetbol');

