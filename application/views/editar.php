<form id="form" action="<?=base_url()?>Welcome/editarContacto/<?=$id?>" method="POST">
	<div>
		<label>Nombre</label><br />
		<input type="text" name="nombre" id="nombre" value="<?=$nombre?>"><br />
		<label>Correo</label><br />
		<input type="text" name="correo" id="correo" value="<?=$correo?>"><br />
		<label>Observaciones	</label><br />
		<input type="text" name="obs" id="obs" value="<?=$observaciones?>"><br />
		<input type="submit" name="enviar" id="enviar" value="Enviar">
	</div>
</form>