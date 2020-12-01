<?php 
session_start();
if(!isset($_SESSION['ingrese'])){
	header('location: ing.php');
	exit();
}


require '../fw/fw.php';
require '../models/ListaDeudores.php';
require '../views/ModificoDeuda.php';
require '../models/Meses.php';


	$cuil = $_GET['cuil'];
	$mes = $_GET['mes'];

	$M = new Meses();
	$deudores = new ListaDeudores();
	$un_deudor = $deudores->getUnDeudorMes($cuil);


	$vista = new ModificoDeuda();
	$vista->un_deudor = $un_deudor;
	$vista->cuil = $cuil;
	$vista->mes = $mes;
	$vista->render();





















 ?>