<!DOCTYPE html>
<html>
<head>
	<title>LISTA DE CLIENTES</title>
</head>
<body>

	<?php if($this->resultado == NULL OR $this->resultado == 1 ) { ?> 

			<h3>LISTA DE CLIENTES</h3>

				<?php foreach($this->clientes as $c) { ?>
					<a href="mi_cliente.php/?cuil=<?= $c['cuil_cuit'] ?>"><?= $c['nombre'] ?></a>
					<br>
				<?php } ?>
			

				<br><br><br><br><br><br><br><br><br><br><br>



				<a href="NuevoCliente.php">AGREGAR NUEVO CLIENTE</a>
				<br><br>
				<a href="ListaBorrarCliente.php">BORRAR CLIENTE</a>
				<br><br>
				<a href="inicio.php">VOLVER</a>
				
				


<?php }

	elseif ($this->resultado == 3) {  //existe un cliente con ese cuit?>

		<h2>YA ESXISTE UN CLIENTE CON ESE CUIL/CUIT</h2>
		<a href="ListadoClientes.php">VOLVER</a>



<?php } ?>








	
</body>
</html>

<?php



//<a href="Honorarios.php">Honorarios</a>


?>


















