<?php 
session_start();
if(!isset($_SESSION['ingrese'])){
	header('location: ing.php');
	exit();
}


require '../fw/fw.php';
require '../models/ListaDeudores.php';
require '../views/DeudoresTotales.php';

$deudores = new ListaDeudores();
$deuda = $deudores->DeudaTotalAcumulada();


$vista = new DeudoresTotales();
$vista->todos = $deuda;
$vista->render();






























 ?>