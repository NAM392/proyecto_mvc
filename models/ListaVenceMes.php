<?php

//models

class ListaVenceMes extends Model {
	
	public function getTodos() {
		$this->db->query("SELECT * FROM listavencemes");
		return $this->db->fetchAll();
	}

	public function getMiFecha($id_impuesto,$ultimo) {
		$this->db->query("SELECT f_mes FROM listavencemes WHERE id_impuesto = $id_impuesto AND ultimo_num_cui  = $ultimo ");
		return $this->db->fetch();
	}


}