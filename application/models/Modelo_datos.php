<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelo_datos extends CI_Model {

	function __construct() {
	    parent::__construct();

}
 
 public function guardar($data){
 	$this->db->insert('contactos', $data);
 }

 public function verTodo(){ 
 	$this->db->get('contactos');

 }
  public function verTodol(){
 	$query = $this->db->get('contactos');
 	if ($query->num_rows() > 0) {
 		return $query;
 	}else{
 		return FALSE;
 	}
 }

 public function eliminar($id){
 	$this->db->where('id', $id);
 	$this->db->delete('contactos');
 }

 public function obtenerDatos($id){
 	$this->db->where('id', $id);
 	$query = $this->db->get('contactos');
 		if ($query->num_rows() > 0) {
 			return $query;
 		}else{
 			return FALSE;
 		}
 }

 public function alias($value){
 	$this->db->select('alias');
 	$this->db->where('correo',$value);
 	$consulta = $this->db->get('contactos');

 	if ($consulta->num_rows() > 0) {
 		return $consulta->row_array();
 	}else{
 		echo "No hay datos asociados";
 	}
 }

 public function editarContacto($id, $data){
 	$this->db->where('id', $id);
 	$this->db->update('contactos', $data);
 }

 public function mostrar($valor){
 	$this->db->like("nombre", $valor);

 	$consulta = $this->db->get("contactos");

 	if ($consulta->num_rows() > 0) {
 		return $consulta->result();
 	}else{
 		echo "No hay datos";
 	}

 }
public function buscar($buscar)
	{
		$this->db->like("nombre",$buscar);
		$this->db->or_like("rubro",$buscar);
		$this->db->or_like("empresa",$buscar);
		$this->db->or_like("correo",$buscar);
		$this->db->or_like("observaciones",$buscar);
		$this->db->select("nombre, correo");
			$consulta = $this->db->get("contactos");
			return $consulta->result();
	}
}
