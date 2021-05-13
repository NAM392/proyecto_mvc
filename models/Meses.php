<?php 

class Meses extends Model {
	
	private function Vali_num($num) {
		//esta vacia
		if(!isset($num )) throw new ValidationException('error set ');
		//es un numero
		if(!is_int($num)) throw new ValidationException('error numeros ');
		//es un numero valido de mes
		if($num < 1 || $num > 12) throw new ValidationException('no es un mes valido ');
		
		$sani_num = $num;
		return $sani_num;
	}


	public function getMes($n_mes) {
		$numero_mes = $this->Vali_num($n_mes);
		$this->db->query("SELECT mes FROM meses WHERE numero_mes = $n_mes");
		return $this->db->fetch();
	}



}



 ?>