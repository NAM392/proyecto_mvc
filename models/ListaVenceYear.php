<?php

//models

class ListaVenceYear extends Model {
	
	public function getTodos() {
		$this->db->query("SELECT * FROM listavenceyear");
		return $this->db->fetchAll();
	}


}