<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Controller {

	function __construct() {
	    parent::__construct();	
	}

	public function ingresar($user, $pass){
		$this->db->select('correo','nombre');
		$this->db->from('contactos');
		$this->db->where('correo', $user);
		$this->db->where('password', $pass);

		$resultado = $this->db->get();

		if ($resultado->num_rows() == 1) {
			$r = $resultado->row();

			$s_usuario = array(
				's_usuario' => $r->nombre,
				's_eusuario' => $r->correo
				);
			$this->session->set_userdata($s_usuario);
			return 1;
		}else{
			return 0;
		}

			return $resultado->result();

	}

}