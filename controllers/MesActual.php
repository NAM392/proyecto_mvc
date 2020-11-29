<?php 
	require '../fw/fw.php';
	require '../models/ListaDeudores.php';
	require '../models/Meses.php';
	require '../views/MesEnCurso.php';
	


	
	$M = new Meses();
	$LC = new ListaDeudores();
	$deudores = $LC->getTodos();



	$hoy = getdate();
	$mes_actual = $M->getMes($hoy['mon']);


	$vista = new MesEnCurso();
	$vista->mes = $mes_actual;
	$vista->deudores = $deudores;
	$vista->render();









	 ?>








