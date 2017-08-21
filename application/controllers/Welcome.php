<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
	    parent::__construct();	
		$this->load->model('modelo_datos');
	}

	public function index()
	{
		$this->load->view('inicio');
	}
	public function agregar(){
		$this->load->view('agregar');
	}

	public function guardar(){

		$data = array(
			'nombre' => $this->input->post('nombre', TRUE) ,
			'correo' => $this->input->post('correo', TRUE),
			'observaciones' => $this->input->post('obs', TRUE)
		 );

		$this->modelo_datos->guardar($data);
		redirect('Welcome/index');

	}

	public function ver(){
		$data = array(
			'clientes' => $this->modelo_datos->verTodo() 
			);
		$this->load->view('ver', $data);
	}

	public function verLista(){
		$sdata = array(
			'lclientes'=> $this->modelo_datos->verTodol()
			);
		$this->load->view('listaContactos', $sdata);


	}


	public function eliminar(){
		$id = $this->uri->segment(3);
		$this->modelo_datos->eliminar($id);
		redirect('Welcome/ver');
	}

	public function editar(){
		$id = $this->uri->segment(3);
		$obtenerDatos = $this->modelo_datos->obtenerDatos($id);
		if ($obtenerDatos != FALSE){
			foreach ($obtenerDatos->result() as $row) {
				$nombre = $row->nombre;
				$correo = $row->correo;
				$observaciones = $row->observaciones;
			}
			$data = array(
				'id' => $id,
				'nombre' => $nombre,
				'correo' => $correo,
				'observaciones' => $observaciones
				);
		}else{
			return FALSE;
		}
		$this->load->view('editar',$data);
	}

	public function editarContacto(){
		$id = $this->uri->segment(3);
		$data = array(
			'nombre' => $this->input->post('nombre', true),
			'correo' => $this->input->post('correo', true),
			'observaciones' => $this->input->post('obs', true)
			);
		$this->modelo_datos->editarContacto($id,$data);
		redirect ('Welcome/ver');
	}

	public function buscar(){
		$data = array();

		$query = $this->input->get('query',TRUE);

		if ($query){
			$result = $this->modelo_datos->buscar(trim($query)); // trim quita espacios en blanco
			if ($result != FALSE){
				$data = array('result' => $result);
			}else{
				$data = array('result' => '');
			}
		}else{
				$data = array('result' => '');
			}
		$this->load->view('buscar', $data);
		}

		public function mostrar(){
			if ($this->input->is_ajax_request()) {
				$buscar = $this->input->post("buscar");
				$datos = $this->modelo_datos->mostrar($buscar);
				json_encode($datos);o
			}
		}
	}

