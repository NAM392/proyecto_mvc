<?php 

class Meses extends Model {
	
	public function getMes($n_mes) {
		$this->db->query("SELECT mes FROM meses WHERE numero_mes = $n_mes");
		return $this->db->fetch();
	}



}



 ?>