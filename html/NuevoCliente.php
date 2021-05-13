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
<form method="POST" action="agrego-cliente" >

<p title="cuil" >Cuil</p>
<input type="number" name="cuil" id="cuil" value="" min="1" maxlength="99999999999"  required>
<br>
	
<p title="nombre" >Nombre y Apellido</p>
<input type="" name="nombre" id="nombre" maxlength="50" required>
<br>

<p title="dni" >Dni</p>
<input type="number" name="dni" id="dni" maxlength="8" required>
<br>

<p title="domicilio" >Domicilio</p>
<input type="" name="domicilio" id="domicilio" maxlength="50" required>
<br>

<p title="mail" >Mail</p>
<input type="email" name="mail" id="mail" maxlength="30" required>
<br>

<p title="celular" >Celular</p>
<input type="number" name="celular" id="celular" min="1" max="99999999999" required>
<br><br><br><br>

<button type="submit" id="agregar" >AGREGAR</button>



<a href="Lista-Clientes">CANCELAR</a>

</form>
</div>
</div>

<script  src="../jquery.js" ></script>
<script type="text/javascript">
	



	$("#agregar").click(function(){
		var val_cuil = $("#cuil").val();
		var val_nomb =  $("#nombre").val();
		var val_dni = $("#dni").val();
		var val_mail = $("#mail").val();
		var val_dom = $("#domicilio").val();
		var val_celu = $("#celular").val();
		var regex_nomb = /([a-zA-Z]{5,} +[a-zA-Z]{5,})+/;
		var flag = 0;

	
		var errors = "ERRORES : \n";
		if(val_cuil.length == 0){
			errors+="cuil  vacio \n";
			flag = 1;
		} 
		else if (val_cuil.length != 11){
			errors+="cuil  mal cargado \n";	
			flag = 1;
		}
		if(val_nomb.length == 0 ){
			errors+="nombre vacio \n";
			flag = 1;
		}
		else if (val_nomb.length > 50 ){
			errors+="nombre y apellido invalido\n";	
			flag = 1;
		}
		else if (!regex_nomb.test(val_nomb)){
			errors+="nombre y apellido invalido\n";	
			flag = 1;
		}
		if(val_dni.length == 0){
			errors+="dni  vacio \n";
			flag = 1;
		} 
		else if (val_dni.length != 8){
			errors+="dni  mal cargado \n";	
			flag = 1;
		}
		if(val_dom.length == 0){
			errors+="domicilio  vacio \n";
			flag = 1;
		} 
		else if (val_dom.length > 50 ){
			errors+="domicilio  mal cargado \n";	
			flag = 1;
		}
		else if (val_dom.indexOf(" ") <= 0 ){
			errors+="domicilio : faltan altura o datos extra \n";	
			flag = 1;
		}
		if(val_mail.length == 0){
			errors+="mail  vacio \n";
			flag = 1;
		} 
		else if (val_mail.length > 30 ){
			errors+="mail  mal cargado \n";	
			flag = 1;
		}
		else if (val_mail.indexOf("@") <= 0 ){
			errors+="mail invalido \n";	
			flag = 1;
		}
		if(val_celu.length == 0){
			errors+="celular  vacio \n";
			flag = 1;
		} 
		else if (val_celu.length < 10 ){
			errors+="celular: faltan numeros \n";	
			flag = 1;
		}
		else if (val_celu.length > 15 ){
			errors+="celular  mal cargado \n";	
			flag = 1;
		}

		if(flag==1){
			alert(errors);
			return false;
		}

		 var resp = confirm("confirma?");
		 if(!resp) return false;
		 return true;
	 } );


</script>



</body>
</html>