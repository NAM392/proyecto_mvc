<?php 
require '../fw/fw.php';
require '../models/ListaDeudores.php';

var_dump($_POST);
$id_deudor = $_GET['id_deudor'];
$monto = $_POST['monto'];


$deudores = new ListaDeudores();

$resultado = $deudores->CambioDeuda($id_deudor,$monto);


if($resultado == 1){
	header('Location: IngresosMensuales.php');


}
























 ?>