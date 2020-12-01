<?php 
session_start();
if(!isset($_SESSION['ingrese'])){
	header('location: ing.php');
	exit();
}

require '../fw/fw.php';
require '../models/ListaDeudores.php';

$id_deudor = $_GET['id_deudor'];
$monto = $_POST['monto'];


$deudores = new ListaDeudores();

$resultado = $deudores->CambioDeuda($id_deudor,$monto);


if($resultado == 1){
	header('Location:Honorarios');


}
























 ?>