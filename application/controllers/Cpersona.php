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
	function sendMail(){
		//$correos = $this->input->post("email");
		   $config = Array(
		  'protocol' => 'smtp',
		  'smtp_host' => 'ssl://smtp.googlemail.com',
		  'smtp_port' => 465,
		  'smtp_user' => 'correopruebas@consultoramda.cl', 
		  'smtp_pass' => 'lar10279',
		  'mailtype' => 'html',
		  'charset' => 'iso-8859-1',
		  'wordwrap' => TRUE
		);
		

			$this->load->library('email', $config);
		    $to_email = $this->input->post("email");
		    $lista = explode(',', $to_email);
		    $adjunto = $this->input->post("archivo");
		    
		    foreach ($lista as $key => $value) {
		        $this->email->set_newline("\r\n");
		        $this->email->from('correopruebas@consultoramda.cl');
		        $this->email->to($value);
		        $this->email->subject('Prueba');
		        $this->email->message('Hola');
			      if($this->email->send())
			     {
			      echo 'Email enviado  ';
			     }
			     else
			    {
			     show_error($this->email->print_debugger());
			    }
		    }

		}
	

}