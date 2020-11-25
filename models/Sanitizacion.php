<?php 

class Sanitizacion extends Model {
	
	public function Sani_cuil($cuil) {
		$_cuil = intval($cuil);
		//esta vacia
		if(!isset($_cuil )) throw new ValidationException('error set ');
		//es numero
		if(!is_numeric($_cuil)) throw new ValidationException('error numeric ');
		//tiene 12 digitos
		if(substr($_cuil, 11))throw new ValidationException('error cantidad numeros ');
		//escapo comillas
		$sani_cuil = $this->db->escape($_cuil);
		return $sani_cuil;

	}


	public function Sani_string($palabra) {
		//esta vacia
		if(!isset($palabra )) throw new ValidationException('error set ');
		//es un string
		if(!is_string($palabra)) throw new ValidationException('error string ');
		//tamaño minimo y maximo
		$pb = strlen($palabra);
		if($pb > 50 || $pb < 1) throw new ValidationException('error longitud ');
		//escapar comodines 
		$_palabra = $this->db->escapeWildcards($palabra);
		//escapo comodines
		$sani_palabra = $this->db->escape($_palabra);
		return $sani_palabra;

	}

	public function Sani_dni($_dni) {
		$dni = intval($_dni);
		//esta vacia
		if(!isset($dni)) throw new ValidationException('error set ');
		//es un numero
		if(!is_numeric($dni)) throw new ValidationException('error numeros ');
		//tiene 8 digitos
		if(substr($dni, 8))throw new ValidationException('error longitud max ');
		$dn = strlen($dni);
		if($dn < 7) throw new ValidationException('error longitud min ');
		//escapo comillas
		$sani_dni = $this->db->escape($dni);
		return $sani_dni;

	}	
 

	public function Sani_number($_number) {
		$number = intval($_number);
		//esta vacia
		if(!isset($number)) throw new ValidationException('error set ');
		//es un numero
		if(!is_numeric($number)) throw new ValidationException('error numeros ');
		//tiene menos de 50 digitos , mas de 1 digito
		if(substr($number, 50))throw new ValidationException('error longitud max ');
		$nb = strlen($number);
		if($nb < 1) throw new ValidationException('error longitud min ');
		//escapo comillas
		$sani_number = $this->db->escape($number);
		return $sani_number;

	}


	public function Sani_idimpuesto($_idimpuesto) {
		/*reveer sanitizacion de esto*/
		//esta vacia
		if(!isset($number)) throw new ValidationException('error set ');
		//es un numero
		if(!is_numeric($number)) throw new ValidationException('error numeros ');
		//tiene menos de 50 digitos , mas de 1 digito
		if(substr($number, 50))throw new ValidationException('error longitud max ');
		$nb = strlen($number);
		if($nb < 1) throw new ValidationException('error longitud min ');
		//escapo comillas
		$sani_number = $this->db->escape($number);
		return $sani_number;

	}
































}




class ValidationException extends Exception{}




















 ?>