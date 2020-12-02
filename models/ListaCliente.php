<?php

//models

class ListaCliente extends Model {

	private function Vali_cuil($cuil) {
		//esta vacia
		if(!isset($cuil )) throw new ValidationException('error set ');
		//es numero
		if(!ctype_digit($cuil)) throw new ValidationException('error numeric ');
		//tiene 11 digitos
		if(!substr($_cuil, 11))throw new ValidationException('error cantidad numeros ');
		//escapo comillas
		$sani_cuil = $this->db->escape($cuil);
		return $sani_cuil;

	}

	private function Vali_idimpuesto($_idimpuesto) {
		//esta vacia
		if(!isset($_idimpuesto)) throw new ValidationException('error set ');
		//es un numero
		if(!ctype_digit($_idimpuesto)) throw new ValidationException('error numeros ');
		//tiene menos de 50 digitos , mas de 1 digito
		if(!$_idimpuesto >= 1)throw new ValidationException('es un 0 ');
		//escapo comillas
		$sani_imp = $this->db->escape($_idimpuesto);
		return $sani_imp;

	}

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
		return $sani_palabra;

	}
	private function Vali_dni($_dni) {
		
		//esta vacia
		if(!isset($_dni)) throw new ValidationException('error set ');
		//es un numero
		
		if(!ctype_digit($_dni)) throw new ValidationException('error numeros ');
		//tiene 8 digitos
		$dn = strlen($_dni);

		if($dn < 7 || $dn > 8) throw new ValidationException('error longitud min ');
		//escapo comillas
		$sani_dni = $this->db->escape($_dni);
		return $sani_dni;

		}	

	private function Vali_number($_number) {
		
		//esta vacia
		if(!isset($_number)) throw new ValidationException('error set ');
		//es un numero
		if(!ctype_digit($_number)) throw new ValidationException('error numeros ');
		//tiene menos de 50 digitos , mas de 1 digito
		$nb = strlen($_number);
		if($nb < 1  || $nb > 50 ) throw new ValidationException('error longitud min ');
		//escapo comillas
		$sani_number = $this->db->escape($_number);
		return $sani_number;

	}	


	public function getTodos() {
		$this->db->query("SELECT * FROM listacliente");
		return $this->db->fetchAll();
	}

	public function getClienteConCuil($_cuil) {
		$cuil = $this->Vali_cuil($_cuil);	
		$this->db->query("SELECT * FROM listacliente
							WHERE cuil_cuit = $cuil");
		return $this->db->fetch();
	}


	public function agregar($_cuil,$_nombre,$_dni,$_domicilio,$_mail,$_celular) {
		$cuil_cuit = $this->Vali_cuil($_cuil);	
		$nombre = $this->Vali_string($_nombre);
		$dni = $this->Vali_dni($_dni);
		$domicilio = $this->Vali_string($_domicilio);
		$mail = $this->Vali_string($_mail);
		$celular = $this->Vali_number($_celular);

			if($this->getClienteConCuil($cuil_cuit) == NULL ) { // verifico que no exista ya ese cuil/cuit
						if(!$this->db->query("INSERT INTO listacliente (cuil_cuit,nombre,dni,domicilio,mail,celular,fecha_inicio) VALUES ($cuil_cuit,'$nombre',$dni,'$domicilio','$mail',$celular,NOW() )  ")){return 1;}
				
						else {return 0;} //error porque algo salio mal
			}
			else {return 3;}//error por cuil repetido
				
		}
	

	public function Erase ($cuil_cuit){
		if(!$this->db->query("DELETE FROM listacliente WHERE cuil_cuit = $cuil_cuit")){return 1;}

		else {return 0;} //error porque algo salio mal
				
	}	







}	


