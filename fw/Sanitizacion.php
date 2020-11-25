<?php 

class Sanitizacion extends Model {
	
	public function Sani_cuil($cuil) {
		//esta vacia
		if(!isset($cuil )) throw new ValidationException('error set ');
		//es numero
		if(!is_numeric($cuil)throw new ValidationException('error numeric ');
		//tiene 12 digitos
		if(substr($cuil, 11))throw new ValidationException('error cantidad numeros ');
		//escapo comillas
		$_cuil = $this->db->escape($cuil)
		return $_cuil;

	}








}




class ValidationException extends Exceptio{}




















 ?>