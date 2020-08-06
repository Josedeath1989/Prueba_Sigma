<?php 

$url = "https://sigma-studios.s3-us-west-2.amazonaws.com/test/colombia.json";

$json = file_get_contents($url);

$datos = json_decode($json,true);





$ama = $datos['Amazonas'];
$atl = $datos['Atlántico'];
$caq = $datos['Caquetá'];
$ces = $datos['Cesar'];
$cho = $datos['Chocó'];
$cor = $datos['Córdoba'];
$gua = $datos['Guainía'];
$guav = $datos['Guaviare'];
$hui = $datos['Huila'];
$guaj = $datos['La Guajira'];
$put = $datos['Putumayo'];
$qui = $datos['Quindío'];
$san = $datos['San Andrés y Providencia'];
$suc = $datos['Sucre'];
$tol = $datos['Tolima'];
$vau = $datos['Vaupés'];
$vic = $datos['Vichada'];


//echo "<pre>";
//print_r($ama);
//echo "</pre>";




?>