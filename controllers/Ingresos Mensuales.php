<?php 

require '../fw/fw.php';
require '../views/InicioMensual.php';



$vista = new InicioMensual();
$vista->nombre_usuario = "nombre de usuario";
$vista->render();


















 ?>