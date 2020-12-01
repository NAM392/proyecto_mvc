<?php 


class Login extends Model {

	private function Vali_string($palabra) {
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
		return $_palabra;

	}


	public function InicioSesion($_user,$_pass){
		$user = $this->Vali_string($_user);		
		$pass = $this->Vali_string($_pass);		
		$hash_pass = md5($pass);
		$this->db->query("SELECT usuario FROM login WHERE usuario = '$user' AND pass = '$hash_pass' ");
		$r= $this->db->fetch();
		if($r['usuario'] == $user){
			return 1;
		}
		else {
			return 0;
		}
	}







}







 ?>