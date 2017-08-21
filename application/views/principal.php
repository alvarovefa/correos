<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Domus</title>
</head>
<body>
	<h1>Agregar Cliente</h1>
	<form action="<?=base_url()?>Cpersona/guardar" method="POST">
		<table>
			<tr>
				<td>
					<label>Nombre</label>
				</td>
				<td>
					<input type="text" name="nombre" id="nombre">
				</td>
			</tr>
			<tr>
				<td>
					<label>Correo</label>
				</td>
				<td>
					<input type="text" name="correo" id="correo">
				</td>
			</tr>
			<tr>
				<td>
					<label>Contraseña</label>
				</td>
				<td>
					<input type="password" name="pass" id="pass">
				</td>
			</tr>
			<tr>
				<td>
					<label>Observacion</label>
				</td>
				<td>
					<input type="text" name="obs" id="obs">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="guardar" value="Guardar">
				</td>
			</tr>	
		</table>
	</form>
</body>
</html>