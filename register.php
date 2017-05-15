<?php
	require_once("funciones.php");
	$pNombre = "";
	$pApellido = "";
	$pMail = "";
	$pcontrasena="";
	$conContrasena = "";
	$sexos = ["Masculino", "Femenino", "Otro"];

	if ($_POST)
	{
		$pNombre = $_POST["nombre"];
		$pApellido = $_POST["apellido"];
		$pMail = $_POST["mail"];
		$pcontrasena = $_POST["pass"];
		$conContrasena = $_POST["cpass"];
		//Acá vengo si me enviaron el form

		//Validar
		$errores = validarUsuario($_POST);

		// Si no hay errores....
		if (empty($errores))
		{
			$usuario = crearUsuario($_POST);
			// Guardar al usuario en un JSON
			guardarUsuario($usuario);
			// Reenviarlo a la felicidad
			enviarAFelicidad();
		}
	}
?>

<html>
	<head>
		<title>Registracion</title>
	</head>
	<body>
		<h1>Registrate!</h1>
		<form action="register.php" method="POST" enctype="multipart/form-data">
			<?php if (!empty($errores)) { ?>
				<div style="width:300px;background-color:red">
					<ul>
						<?php foreach ($errores as $error) { ?>
							<li>
								<?php echo $error ?>
							</li>
						<?php } ?>
					</ul>
				</div>
			<?php } ?>
			<div>
				<label for="nombre">Nombre:</label>
				<input id="nombre" type="text" name="nombre" value="<?php echo $pNombre; ?>"></input>
			</div>
			<div>
				<label for="apellido">Apellido:</label>
				<input id="apellido" type="text" name="apellido" value="<?php echo $pApellido; ?>"></input>
			</div>
			<div>
				<label for="mail">Mail:</label>
				<input id="mail" type="text" name="mail" value="<?php echo $pMail; ?>"></input>
			</div>
			<div>
				<label for="pass">Contrase&ntilde;a:</label>
				<input id="pass" type="password" name="pass"  value= "<?php echo $pcontrasena; ?>"></input>
			</div>
			<div>
				<label for="cpass">Confirmar Contrase&ntilde;a:</label>
				<input id="cpass" type="password" name="cpass" value= "<?php echo $conContrasena; ?>"></input>
			</div>
			<div>
				<label for="sexo">Sexo:</label>
				<select name="sexo" id="sexo">
					<?php foreach ($sexos as $key => $sexo) { ?>
						<?php if (isset($_POST["sexo"]) && $key == $_POST["sexo"]) { ?>
							<option selected value="<?php echo $key?>"><?php echo $sexo?></option>
						<?php } else { ?>
							<option value="<?php echo $key?>"><?php echo $sexo?></option>
						<?php } ?>
					<?php } ?>
				</select>
			</div>
			<div>
				<input id="submit" type="submit" name="submit" value="Enviar"></input>
			</div>
		</form>
	</body>
</html>
