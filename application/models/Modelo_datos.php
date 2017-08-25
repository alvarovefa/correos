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

 public function editarContacto($id, $data){
 	$this->db->where('id', $id);
 	$this->db->update('contactos', $data);
 }
 public function buscar($query){
 	$this->db->like('nombre', $query);
 	$query = $this->db->get('contactos');
 		if ($query->num_rows() > 0){
 			return $query;
 		}else{
 			return false;
 		}
 }
 public function mostrar($valor){
 	$this->db->like("nombre", $valor);
 	$consulta = $this->db->get("contactos");

 	if ($consulta->num_rows() > 0) {
 		return $consulta;
 	}else{
 		echo "No hay datos";
 	}
 }
}
