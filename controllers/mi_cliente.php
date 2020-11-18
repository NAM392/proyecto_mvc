<?php 


	require '../fw/fw.php';
	require '../models/ListaCliente.php';
	require '../models/ListaImpuesto.php';
    require '../models/ClienteInscripto.php';
    require '../models/ListaVenceMes.php';
    require '../models/ListaVenceYear.php';


   	require '../views/alone_Cliente.php';


   	//comprobacion del GET
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
		//array_push($mis_impuestos, $imp->getNombreImpuestoconID($mis['id_impuesto']) );
		$nombre_de_imp = $imp->getNombreImpuestoconID($mis['id_impuesto']);
		$mis_impuestos[$nombre_de_imp ['nombre_impuesto']] = $mis['estado'];
		if($fecha=$mes->getMiFecha($mis['id_impuesto'],$ultimo))

		if($fecha=$anio->getMiFecha($mis['id_impuesto'],$ultimo))

		$mis_vencimientos[$nombre_de_imp ['nombre_impuesto']] = $fecha['fecha'];





	}

				
	//var_dump($nombre_de_imp ['nombre_impuesto']);
	$un_cliente = $LC->getClienteConCuil($_GET['cuil']);
	$vista = new alone_Cliente();
	$vista->un_cliente = $un_cliente;
	$vista->mis_impuestos = $mis_impuestos;
	$vista->mis_vencimientos = $mis_impuestos;

	$vista->render();








	/*
	foreach ($mis_inscripciones as $mis ) {
				
		$objImpuesto=new stdClass();
		$objImpuesto->nombre = $imp->getNombreconID($mis['id_impuesto']);
		$objImpuesto->estado = $mis['estado'];

		array_push($mis_impuestos, $objImpuesto);
		
	}

	$jsonImpuestos=json_encode($mis_impuestos);

	



	SELECT p.descripcion AS producto,f.razon_social as fabricante,s.cantidad AS stock FROM
	    ((producto p JOIN fabricante f on p.codigo_fabricante = f.codigo_fabricante)
		  JOIN stock s ON p.codigo_producto = s.codigo_producto)
		  ORDER BY f.razon_social,p.descripcion

	

*/












	


	 ?>