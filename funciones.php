<?php
	function validarUsuario($miUsuario)
	{
		$errores = [];

		if (trim($miUsuario["nombre"]) == "")
		{
			$errores[] = "Falta el nombre";
		}
		if (trim($miUsuario["apellido"]) == "")
		{
			$errores[] = "Falta el apellido";
		}
		if (trim($miUsuario["pass"]) == "")
		{
			$errores[] = "Falta la pass";
		}
		if (trim($miUsuario["cpass"]) == "")
		{
			$errores[] = "Falta el cpass";
		}
		if ($miUsuario["pass"] != $miUsuario["cpass"])
		{
			$errores[] = "Pass y Cpass son distintas";
		}
		if ($miUsuario["mail"] == "")
		{
			$errores[] = "Falta el mail";
		}
		if (!filter_var($miUsuario["mail"], FILTER_VALIDATE_EMAIL))
		{
			$errores[] = "El mail tiene forma fea";
		}
		if (existeElMail($miUsuario["mail"]))
		{
			$errores[] = "Usuario ya registrado";
		}
		return $errores;
	}

	function existeElMail($mail)
	{
		$usuarios = file_get_contents("usuarios.json");

		$usuariosArray = explode(PHP_EOL, $usuarios);

		array_pop($usuariosArray);

		foreach ($usuariosArray as $key => $usuario) {
			$usuarioArray = json_decode($usuario, true);

			if ($mail == $usuarioArray["mail"])
			{
				return true;
			}
		}

		return false;
	}

	function guardarUsuario($miUsuario)
	{
		$usuarioJSON = json_encode($miUsuario);

		file_put_contents("usuarios.json", $usuarioJSON . PHP_EOL, FILE_APPEND);
	}

	function crearUsuario($miUsuario)
	{
		$usuario = [
			"nombre" => $miUsuario["nombre"],
			"apellido" => $miUsuario["apellido"],
			"mail" => $miUsuario["mail"],
			"password" => password_hash($miUsuario["pass"], PASSWORD_DEFAULT),
			"sexo" => $miUsuario["sexo"],
			"id" => traerNuevoId()
		];

		return $usuario;
	}

	function traerNuevoId()
	{
		$usuarios = file_get_contents("usuarios.json");

		$usuariosArray = explode(PHP_EOL, $usuarios);

		//Para quitar el último ENTER
		array_pop($usuariosArray);

		if (count($usuarios) == 0) {
			return 1;
		}

		$ultimoUsuario = $usuariosArray[count($usuariosArray) - 1];
		$ultimoUsuarioArray = json_decode($ultimoUsuario, true);

		return $ultimoUsuarioArray["id"] + 1;
	}

	function enviarAFelicidad()
	{
		header("location:bienvenido.php");exit;
	}
?>
