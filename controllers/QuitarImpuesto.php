<?php 
session_start();
if(!isset($_SESSION['ingrese'])){
	header('location: ing.php');
	exit();
}


require '../fw/fw.php';
require '../views/EliminoImpuestoCliente.php';
require '../models/ClienteInscripto.php';
require '../models/ListaImpuesto.php';


$cuil = $_GET['cuil'];

$CI = new ClienteInscripto();
$imp = new ListaImpuesto();
$inscripciones = $CI->MisInscripciones($cuil);

$mis_inscripciones = [];

foreach($inscripciones as $insc){
	$mis_inscripciones[$insc['id_impuesto']] = $imp->getNombreImpuestoconID($insc['id_impuesto']);

}



$EIC = new EliminoImpuestoCliente();
$EIC->mis_inscripciones = $mis_inscripciones;
$EIC->cuil = $cuil;
$EIC->render();




























 ?>