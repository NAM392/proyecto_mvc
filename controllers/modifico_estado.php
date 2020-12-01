<?php 
session_start();
if(!isset($_SESSION['ingrese'])){
	header('location: ing.php');
	exit();
}


require '../fw/fw.php';
require '../models/ClienteInscripto.php';
require '../models/ListaImpuesto.php';
require '../models/ListaCliente.php';
require '../views/alone_Cliente.php';
require '../models/ListaVenceMes.php';
require '../models/ListaVenceYear.php';



$cuil = $_GET['cuil'];
$_n_imp = $_GET['nombre'] ;
var_dump($_n_imp);
$_nombre_imp = str_replace('_', ' ', $_n_imp);




	$anio = new ListaVenceYear();
   	$mes = new ListaVenceMes();
	$imp = new ListaImpuesto();
	$ci = new ClienteInscripto();
	$LC = new ListaCliente();
	$ultimo=substr($cuil, -1);
	$mis_impuestos=[];

	
	
	$id_imp= $imp->getIDconNombre($_nombre_imp);
	
	$id_del_impuesto = $id_imp['id_impuesto'];

	$ci->ModificoEstadoOK($id_del_impuesto, $cuil);

	$mis_inscripciones = $ci->getImpuestoInscripto($cuil);
	foreach ( $mis_inscripciones as $mis ) {
		$nombre_de_imp = $imp->getNombreImpuestoconID($mis['id_impuesto']);
		$mis_impuestos[$nombre_de_imp ['nombre_impuesto']] = $mis['estado'];
		
		if( $x=$mes->getMiFecha($mis['id_impuesto'],$ultimo) ){	$fecha = $x;};
		if( $x=$anio->getMiFecha($mis['id_impuesto'],$ultimo) ){$fecha = $x;};
		$mis_vencimientos[$nombre_de_imp ['nombre_impuesto']] = $fecha['fecha'];
	}	
	
	
	$un_cliente = $LC->getClienteConCuil($cuil);
	$vista = new alone_Cliente();
	$vista->un_cliente = $un_cliente;
	$vista->mis_impuestos = $mis_impuestos;
	$vista->mis_vencimientos = $mis_vencimientos;
	$vista->render();
	



?>