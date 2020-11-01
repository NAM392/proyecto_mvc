<?php

//models

class ListaVenceMes extends Model {
	
	public function getTodos() {
		$this->db->query("SELECT * FROM listavencemes");
		return $this->db->fetchAll();
	}


}