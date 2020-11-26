<!DOCTYPE html>
<html>
<head>
	<title>mes en curso</title>
</head>
<body>
<h1><?= $this->mes['mes'] ?></h1>

<?php foreach ($this->clientes as $c){
	if(intval($c['honorarios']) > 0){
		echo $c['cuil_cuit']  + " importe :  " + intval($c['honorarios'] )+ "<button>modifica</button>";
	}
}


?>








</body>
</html>