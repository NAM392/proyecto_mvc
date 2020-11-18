<!DOCTYPE html>
<html>
<head>
	<title>Nnuevo Cliente</title>
</head>
<body>

<h2>AGREGAR NUEVO CLIENTE </h2>

<form method="POST" action="agregarCliente.php" >

<p title="cuil" >Cuil</p>
<input type="" name="cuil">
<br>
	
<p title="nombre" >Nombre y Apellido</p>
<input type="" name="nombre">
<br>

<p title="dni" >Dni</p>
<input type="" name="dni">
<br>

<p title="domicilio" >Domicilio</p>
<input type="" name="domicilio">
<br>

<p title="mail" >Mail</p>
<input type="" name="mail">
<br>

<p title="celular" >Celular</p>
<input type="" name="celular">
<br><br><br><br>

<button type="submit" id="agregar" >AGREGAR</button>

<br><br><br><br>

<a href="ListadoClientes.php">CANCELAR</a>

</form>


<script  src="../jquery.js" ></script>
<script type="text/javascript">
	




	$("#agregar").click(function(){
		 var resp = confirm("confirma?");
		 if(!resp) return false;
	 } );




</script>



</body>
</html>