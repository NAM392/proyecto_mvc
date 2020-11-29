<!DOCTYPE html>
<html>
<head>
	<title>Nuevo Cliente</title>
		<style>

		html , body {
			height: 100%;
			width: 100%;
			overflow:hidden;
		
			}

		div.Fondo{
			    height: 490px;
			    width: 70%;
			    align-content: center;
			    background-color: lightblue;
			    margin-top: -10px;
			    margin-left: 10%;
			    margin-right: 8%;
			    
		
						    
			}
		h2{
			    padding-left: 450px;
			    padding-top: -29px;
    			font-family: fixed-width fontsAndale Mono, monospace;
		}	

		div.todo{
			    background-color: beige;
    			padding: 75px;
    			height: 100%;
    			width: 100%;
		}

		a {
			text-decoration: none;
			color: black;


		}

		a,button {

				margin-top: -30px;
			    align-content: center;
			    margin-left: 250px;
			    text-align: center;
			    height: 26px;
			    width: 164px;
			    border-style: solid;
			    background-color: lightgreen;
			    border-radius: 10px;
			}



		div.hon {
				margin-top: -30px;
			    align-content: center;
			    margin-left: 600px;
			    text-align: center;
			    height: 26px;
			    width: 164px;
			    border-style: solid;
			    background-color: #07C5A9;
			    border-radius: 20px;


		}

		input,p {
			margin-left: 440px;
		}



	</style>
</head>
<body>
<div class="todo" >
<h2>AGREGAR NUEVO CLIENTE </h2>
<div class="Fondo" >
<form method="POST" action="agregarCliente.php" >

<p title="cuil" >Cuil</p>
<input type="number" name="cuil">
<br>
	
<p title="nombre" >Nombre y Apellido</p>
<input type="" name="nombre">
<br>

<p title="dni" >Dni</p>
<input type="number" name="dni">
<br>

<p title="domicilio" >Domicilio</p>
<input type="" name="domicilio">
<br>

<p title="mail" >Mail</p>
<input type="" name="mail">
<br>

<p title="celular" >Celular</p>
<input type="number" name="celular">
<br><br><br><br>

<button type="submit" id="agregar" >AGREGAR</button>



<a href="ListadoClientes.php">CANCELAR</a>

</form>
</div>
</div>

<script  src="../jquery.js" ></script>
<script type="text/javascript">
	




	$("#agregar").click(function(){
		 var resp = confirm("confirma?");
		 if(!resp) return false;
	 } );




</script>



</body>
</html>