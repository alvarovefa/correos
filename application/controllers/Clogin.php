<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clogin extends CI_Controller {

	function __construct() {
	    parent::__construct();	
			$this->load->model('mlogin');
			$this->load->library('encrypt');
			$this->load->library('session');
	}

	public function index(){
		$this->load->view('vlogin');
	}

	public function ingresar(){
		$user = $this->input->post('txtuser');
		$pass = $this->encrypt->sha1($this->input->post('txtpass'));

		$res = $this->mlogin->ingresar($user, $pass);
			if ($res == 1) {
				$this->load->view('inicio');
			}else{
				$this->load->view('vlogin');
			}
	}
}