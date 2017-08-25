<div class="container">
	<h2>Buscar Contacto</h2>
</div>

<div id="body">
	<? $this->load->view('inicio.php');?>
</div>
<br /><br />
<form id="form" method="GET" action="<?=base_url()?>index.php/Welcome/buscar">
	<input type="text" name="query" id="query">
	<input type="submit" name="buscar" id="buscar" value="Buscar">
</form>
<br />
<br />
	<?php
		if($result){
			foreach ($result->result() as $row){				
			echo $row->nombre."<br />";
			}
		}
	?>