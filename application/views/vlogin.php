<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<form action="<?= base_url() ?>Clogin/contactos" method="POST">
		<table>
			<tr>
				<td>
					<label for="user">Usuario</label>
				</td>
				<td>	
					<input type="text" name="user" id="txtuser">
				</td>
			</tr>	
			<tr>
				<td>
					<label for="pass">Contraseña</label>
				</td>
				<td>
					<input type="password" name="pass" id="txtpass">	
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="entrar" id="entrar" value="Acceder">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>