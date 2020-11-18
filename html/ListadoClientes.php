<!DOCTYPE html>
<html>
<head>
	<title>LISTA DE CLIENTES</title>
</head>
<body>

	<h3>LISTA DE CLIENTES</h3>

		<?php foreach($this->clientes as $c) { ?>
			<a href="mi_cliente.php/?cuil='<?= $c['cuil_cuit'] ?>'"><?= $c['nombre'] ?></a>
			<br>
		<?php } ?>
	

		<br><br><br><br><br><br><br><br><br><br><br>



		<a href="NuevoCliente.php">AGREGAR NUEVO CLIENTE</a>
		<br><br>
		<a href="inicio.php">VOLVER
		</a>


              




	
</body>
</html>

<?php



//<a href="Honorarios.php">Honorarios</a>


?>


















