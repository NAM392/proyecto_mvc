<?php

//models

class ListaVenceYear extends Model {
	
	public function getTodos() {
		$this->db->query("SELECT * FROM listavenceyear");
		return $this->db->fetchAll();
	}

	public function getMiFecha($id_impuesto,$ultimo) {
		$this->db->query("SELECT fecha FROM listavenceyear WHERE id_impuesto = $id_impuesto AND ultimo_num_cui  = $ultimo ");
		return $this->db->fetch();
	}

}