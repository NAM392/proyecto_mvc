<?php 


class agregarCliente extends Model {
	
	public function agregar($cuil_cuit,$nombre,$dni,$domicilio,$mail,$celular) {
		
		$R=$this->db->query("INSERT INTO listacliente (cuil_cuit,nombre,dni,domicilio,mail,celular,fecha_inicio) VALUES ($cuil_cuit,'$nombre',$dni,'$domicilio','$mail',$celular,NOW() )  ");
		
		return $R;
	}





}
























 ?>