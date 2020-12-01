<?php 

require '../fw/fw.php';
require '../models/Login.php';
require '../views/Pantallainicio.php';

session_start();

if(!isset($_SESSION['ingrese'])){

	$usuario = $_POST['user'];
	$pass = $_POST['pass'];

	if(!isset($usuario)) {
		header('location:inicio');
		exit();
	}

	$ingreso = new Login();
	$resultado = $ingreso->InicioSesion($usuario,$pass);

	if($resultado){
		
		$_SESSION['ingrese'] = session_id();
		$_SESSION['usuario'] = $usuario;

		$vista = new Pantallainicio();
		$vista->nombre_usuario = $usuario;
		$vista->render();
	}
	else{
		header('location:inicio');
		exit();

	}

}

else {
		//session_start();
		$vista = new Pantallainicio();
		$vista->nombre_usuario = $_SESSION['usuario'];
		$vista->render();



}

















 ?>