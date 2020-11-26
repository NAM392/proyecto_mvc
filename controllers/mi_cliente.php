<?php 


	require '../fw/fw.php';
	require '../models/ListaCliente.php';
	require '../models/ListaImpuesto.php';
    require '../models/ClienteInscripto.php';
    require '../models/ListaVenceMes.php';
    require '../models/ListaVenceYear.php';
   	require '../views/alone_Cliente.php';

	$cuil = $_GET['cuil'];

   	
   	$anio = new ListaVenceYear();
   	$mes = new ListaVenceMes();
	$LC = new ListaCliente();
	$insc = new ClienteInscripto();
	$imp = new ListaImpuesto();
	$ultimo=substr($cuil, -1);
	$mis_inscripciones = $insc->getImpuestoInscripto($cuil);
	$mis_impuestos = [];
	$mis_vencimientos = [];

	foreach ( $mis_inscripciones as $mis ) {
		//creo un array asociativo con impuestos y su estado
		$nombre_de_imp = $imp->getNombreImpuestoconID($mis['id_impuesto']);
		$mis_impuestos[$nombre_de_imp ['nombre_impuesto']] = $mis['estado'];
		//creo un array asociativo con impuestos y su fecha de vencimiento
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