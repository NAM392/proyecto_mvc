<?php 
	require '../fw/fw.php';
	require '../models/ListaCliente.php';
	require '../models/ListaVenceYear.php';
	require '../models/ListaVenceMes.php';
	require '../models/ClienteInscripto.php';
	require '../models/Meses.php';
	require '../views/MesEnCurso.php';
	


	
	$M = new Meses();
	$LC = new ListaCliente();
	$clientes = $LC->getTodos();



	$hoy = getdate();
	$mes_actual = $M->getMes(10);








	$vista = new MesEnCurso();
	$vista->mes = $mes_actual;
	$vista->clientes = $clientes;
	$vista->render();









	 ?>








