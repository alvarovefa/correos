<form id="form" action="<?=base_url()?>Welcome/guardar" method="POST">
	<div>
		<label>Nombre</label><br />
		<input type="text" name="nombre" id="nombre"><br />
		<label>Correo</label><br />
		<input type="text" name="correo" id="correo"><br />
		<label>Observaciones	</label><br />
		<input type="text" name="obs" id="obs"><br />
		<input type="submit" name="enviar" id="enviar" value="Enviar">
	</div>
</form>