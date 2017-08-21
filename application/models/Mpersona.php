<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpersona extends CI_Model {

	function __construct() {
	    parent::__construct();
	}

	public function guardar($param){
		$campos = array(
			'nombre' => $param['pnombre'],
			'correo' => $param['pcorreo'],
			'password' =>$param['ppass'],
			'observaciones' => $param['pobs'] 
			);
		$query = $this->db->insert('contactos', $campos);
			if ($query = true) {
				echo "Datos almacenados <a href='index'>Volver</a>";
			}else{
				echo "Error al guardar";
			}
	}
	public function verTodol(){
	 	$query = $this->db->get('contactos');
		 	if ($query->num_rows() > 0) {
		 		return $query;
		 	}else{
		 		return FALSE;
		 	}
	 }
}