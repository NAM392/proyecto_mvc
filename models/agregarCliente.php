<?php 


class agregarCliente extends Model {


	public function getConCuil($cuil_cuit) {
		$this->db->query("SELECT * FROM listacliente WHERE cuil_cuit = $cuil_cuit ");
		return $this->db->fetchAll();
	}
	
	public function agregar($cuil_cuit,$nombre,$dni,$domicilio,$mail,$celular) {
		if($this->getConCuil($cuil_cuit) == NULL ) { // verifico que no exista ya ese cuil/cuit
					if(!$this->db->query("INSERT INTO listacliente (cuil_cuit,nombre,dni,domicilio,mail,celular,fecha_inicio) VALUES ($cuil_cuit,'$nombre',$dni,'$domicilio','$mail',$celular,NOW() )  ")){return 1;}
			
					else {return 0;} //error porque algo salio mal
		}
		else {return 3;}//error por cuil repetido

		
			
	}	



}
























 ?>