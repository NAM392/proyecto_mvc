<!DOCTYPE html>
<html>
<head>
	<title>modifico deuda</title>
		<style>

		html , body {
			height: 100%;
			width: 100%;
			overflow:hidden;
		
			}

		div.Fondo{
			    height: 490px;
			    width: 60%;
			    align-content: center;
			    background-color: beige;
			    margin: 10px;
			    margin-left: 15%;
			    margin-right: 8%;
			    
		
						    
			}
		h2{
			    padding-left: 350px;
			    padding-top: 89px;
    			font-family: fixed-width fontsAndale Mono, monospace;
    			color: grey;
		}	

		div.todo{
			    background-color: lightgreen;
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



		button {
				margin-top: 30px;
			    align-content: center;
			    margin-left: 350px;
			    text-align: center;
			    height: 26px;
			    width: 164px;
			    border-style: solid;
			    background-color: #07C5A9;
			    border-radius: 20px;


		}

		p,label,input{
			margin-left: 360px;
			font-weight: bold;
		}


	</style>
</head>
<body>


<div class="todo" >}
	<div class="Fondo" >
<h2>Modifico Deuda</h2>
<p>N° Cliente : <?= $this->cuil ?></p>
<p>MES: <?= $this->mes ?></p>
<p>Monto : $<?= $this->un_deudor['monto_deuda'] ?></p>

<form method="POST" action="CambioDeuda.php?id_deudor=<?=$this->un_deudor['id_deudor'] ?>" >
<label for="monto" >Ingreso Monto :</label>
<input type="number" name="monto">
<button type="submit" >modificar</button>
</form>
</div>
</div>
</body>
</html>