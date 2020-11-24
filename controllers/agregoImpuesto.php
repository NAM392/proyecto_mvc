<?php 
require '../fw/fw.php';
require '../models/ListaCliente.php';
require '../models/ClienteInscripto.php';
require '../models/ListaImpuesto.php';
require '../views/NuevoImpuesto.php';
/*COMPRUEBO ENTRADA*/
$cuil = $_GET['cuil'];

$LI = new ListaImpuesto();
$CI = new ClienteInscripto();
$clientes = new ListaCliente();

/* traigo solo los impuestos que no estoy inscripto*/
$mis_inscripciones = $CI->MisInscripciones($cuil);
/*  traigo todos los impuestos  */
$todos_imp = $LI->getTodos();
/*creo variable con impuestos a los cuales no estoy inscripto y la cargo con todos los impuestos*/
$solo_impuesto_NI = $todos_imp;

/*  elimino todos los impuestos que ya estoy inscripto  */
for ($i=0; $i < count($todos_imp); $i++) { 

	for ($j=0; $j < count($mis_inscripciones); $j++) { 
		
			if( $todos_imp[$i]['id_impuesto'] == $mis_inscripciones[$j]['id_impuesto'] ) {
				
				unset($solo_impuesto_NI [$i]);
			}
	}

}


$cliente = $clientes->getClienteConCuil($cuil);

$vista = new NuevoImpuesto();
$vista->no_inscripto = $solo_impuesto_NI;
$vista->cuil = $cuil;
$vista->cliente = $cliente;
$vista->render();




 ?>