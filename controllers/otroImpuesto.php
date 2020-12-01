<?php 
session_start();
if(!isset($_SESSION['ingrese'])){
	header('location: ing.php');
	exit();
}

require '../fw/fw.php';
require '../models/ClienteInscripto.php';

$cuil = $_GET['cuil'];
$id_impuesto = $_POST['impuestos'];



/* probar throw catch */

$CI = new ClienteInscripto();
$resultado = $CI->AgregoNuevoImpuesto($cuil,$id_impuesto);


header('Location:Lista-Clientes');















 ?>