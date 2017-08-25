<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

	function __construct() {
	    parent::__construct();	
	    $this->load->library('email');
	}
	function sendMail(){
		$this->email->from('alvaro.vergara@outlook.es', 'Alvaro Vergara');
		$this->email->to('avergaf@gmail.com');

		$this->email->subject('Probando');
		$this->email->message('Probando función');


		if ($this->email->send()) {
			echo "correo enviado";
		}else{
			echo "corre no enviado";
		}
	}
}