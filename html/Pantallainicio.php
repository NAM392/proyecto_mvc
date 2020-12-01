<!DOCTYPE html>
<html>
<head>
	<title>Asistente Contable Impositivo</title>
	<meta http-equiv="content-type" ; content="text/html" ; charset="utf-8">

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
			    margin: 10px;
			    margin-left: 10%;
			    margin-right: 8%;
			    
		
						    
			}
		h3{
			    padding-left: 350px;
			    padding-top: 89px;
    			font-family: fixed-width fontsAndale Mono, monospace;
		}	

		div.todo{
			    background-color: blue;
    			padding: 75px;
    			height: 100%;
    			width: 100%;
		}

		a {
			text-decoration: none;
			color: black;


		}

		div.ing {

				margin-top: 146px;
			    align-content: center;
			    margin-left: 250px;
			    text-align: center;
			    height: 26px;
			    width: 164px;
			    border-style: solid;
			    background-color: #07C5A9;
			    border-radius: 20px;
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

		div.cl {
				margin-top: 70px;
			    align-content: center;
			    margin-left: 420px;
			    text-align: center;
			    height: 26px;
			    width: 164px;
			    border-style: solid;
			    background-color: lightgreen;
			    border-radius: 20px;


		}




	</style>
</head>
<body>



<div class="todo" >
 <div class="Fondo" >
 	<h3  class="titulo"  >Bienvenido : <?= $this->nombre_usuario ?></h3>

<div  class="ing">
<a href="Honorarios">Honorarios</a>
</div>

<div class="hon" >
<a href="Lista-Clientes">Lista de Clientes</a>
</div>

<div class="cl" >
<a href="destroy">CERRAR SESION</a>
</div>

</div>
</div>





</body>
</html>

