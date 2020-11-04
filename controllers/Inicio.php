<?php

// controllers/inicio.php

require '../fw/fw.php';
require '../views/Pantallainicio.php';

$vista = new Pantallainicio();
$vista->nombre_usuario = "nombre de usuario";
$vista->render();


//var_dump($elegi_cliente);






/*



else {
	
		$LC = new ListaCliente();
		$un_cliente = $LC->getClienteConCuil();

		$vista = new alone_Cliente();
		$vista->un_cliente = $un_cliente;

}



*/























?>