<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cpersona extends CI_Controller {

	function __construct() {
	    parent::__construct();	
			$this->load->model('Mpersona');
			$this->load->model('Modelo_datos');
			$this->load->library('encrypt');
	}

	public function index(){
		$this->load->view('inicio');
	}

	public function contactos(){
		$this->load->view('principal');
	}

	public function guardar(){
		$param['pnombre'] = $this->input->post('nombre');
		$param['pcorreo'] = $this->input->post('correo');
		$param['ppass']	  =	sha1($this->input->post('pass')); 
		$param['pobs']    = $this->input->post('obs');

		$this->mpersona->guardar($param);
	}
	public function verLista(){
		
		$this->load->view("redactar");
		
	}

	public function mostrar(){	
		//valor a Buscar
		$buscar = $this->input->post("buscar");
		
		$data = array(
			"clientes" => $this->Modelo_datos->buscar($buscar)			
		);
		echo json_encode($data);
	}


}