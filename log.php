<?php

session_start();
if (isset($_POST['nombre']) && isset($_POST['pass'])) {
	$usuarios = file_get_contents("usuarios.json");
	$usuariosArray = explode(PHP_EOL, $usuarios);
	array_pop($usuariosArray);

	foreach ($usuariosArray as $key => $usuario) {
	    $usuarioArray = json_decode($usuario, true);
	    if ($_POST['nombre'] == $usuarioArray["usuario"]) {
				$userok = $_POST['nombre'];
				$hash = $usuarioArray["password"];

	      if (password_verify($_POST['pass'], $hash)) {
					$logueado = 'true';
					$_SESSION["usuario"] = $usuarioArray["usuario"];
					$_SESSION["nombre"] = $usuarioArray["nombre"];
	      }
	    }
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
    <div class="container">

      <?php if (isset($logueado)): ?>
        <!-- Main Heading Starts -->
         <h2 class="main-heading text-center">
           Usuario Logueado
         </h2>
        <!-- Main Heading Ends -->
        <!-- Login Form Section Starts -->
         <section class="login-area">
           <div class="row">
             <div class="col-sm-6">
        <!-- Login Panel Starts -->
         <div class="panel panel-smart">
           <div class="panel-heading">
             <h3 class="panel-title">Tu cuenta</h3>
           </div>
           <div class="panel-body">
             <p>
               Bienvenido a tu cuenta.
             </p>
           <!-- Login Form Starts -->
      <?php endif; ?>

      <?php if (!isset($logueado)): ?>
        <!-- Main Heading Starts -->
         <h2 class="main-heading text-center">
           USUARIOS
         </h2>
        <form action="log.php" method="POST" class="form-inline" role="form">
         <div class="form-group">
           <label class="sr-only" for="exampleInputEmail">Email</label>
           <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Email" if <?=(isset($userok)) ? 'value="' . $userok . '"' : ''; ?>>
         </div>
         <br><br>
         <div class="form-group">
           <label class="sr-only" for="exampleInputPassword">Password</label>
           <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña">
         </div>
         <br><br>
         <button type="submit" class="btn btn-warning">
           Entrar
         </button>
       </form>

      <?php endif;
      print_r($usuarios) ;
      die();
      ?>

</body>
</html>
