<!DOCTYPE html>
<html>
<head>
	<title>Ingreso</title>
	<link rel="icon" href="../../Argentina-icon.ico">
	<style>
		
		html{
			width: 100%;
			height: 100%;


		}


		div.fondo{
			height: 700px;
		    width: 100%;
		    background-color: lightblue;
		    align-items: center;
		    align-content: center;
		    float: left;
		    display: flex;

		}

		div.LOGIN	{
		    margin-left: 29%;
		    width: 315px;
		    height: 25%;
		    padding-top: 9%;
		    background-color: lightgreen;
		    /* float: left; */
		    /* display: block; */
		    /* margin-left: 10px; */
		    padding-left: 132px;
		    padding-bottom: 163px;
		    padding-top: 30px;
		}
		
		
		input {
			padding: 0;
			margin: 0;
		}



		p{
			padding: 0;
			margin: 0px;
		}

		button{
			width: 200px;
			padding-left: -10px;
			margin-left: -10px;
		}


		h2{
			margin-left: 27px;
			color: blue;
			font-family: cursive;

		}

	</style>
</head>
<body>
<div class="fondo" id="fonde">
	<div class="LOGIN" id="logs" >
	<form method="POST" action="InicioSesion.php" >
    <h2>INGRESO</h2>		
	<p>USUARIO</p>
	<input type="text" name="user">
	<p>PASSWORD</p>
	<input type="password" name="pass" >	
	<br><br><br>
	<button id="send" type="submit">ENVIAR</button>
	</form>	

	</div>



	
</div>
</body>

</html>