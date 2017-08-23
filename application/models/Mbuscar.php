<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mbuscar extends CI_Controller {

	function __construct() {
	    parent::__construct();	
	}

	public function buscar(){
		$buscar = $_POST['b'];
	        
	      if(!empty($buscar)) {
	            buscar($buscar);
	      }
		$sql = mysql_query("SELECT * FROM contactos WHERE nombre LIKE '%".$b."%' LIMIT 10");
          
        $contar = @mysql_num_rows($sql);
          
        if($contar == 0){
              echo "No se han encontrado resultados para '<b>".$b."</b>'.";
	        }else{
	          while($row=mysql_fetch_array($sql)){
	            $nombre = $row['nombre'];
	            $correo = $row['correo'];
	            $obs = $row['observaciones'];
	            echo $correo." - "."<a>".$nombre."</a>"."<br />";
    	    }
	    }
  	}
}

