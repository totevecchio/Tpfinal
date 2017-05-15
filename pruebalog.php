<?php
	require_once("funlog.php");

	$pMail = "";
	$pcontrasena="";


	if ($_POST)
	{
		$pMail = $_POST["mail"];
		$pcontrasena = $_POST["pass"];
	
		//Acá vengo si me enviaron el form

		//Validar
		$errores = validarUsuario($_POST);

		// Si no hay errores....
		if (empty($errores))
		{
			echo "A iniciado session";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Beer For U</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/modern-business.css" rel="stylesheet">

    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

<input type="text" class="form-control" placeholder="Email"  value="<?php echo $pMail; ?>"></input>
<input type="password" class="form-control" placeholder="Contraseña" value= "<?php echo $pcontrasena; ?>"></input>
<button class="btn btn-lg btn-primary btn-block" id="submit" type="submit" value= "Enviar">
    Ingresar</button>

</body>

</html>
