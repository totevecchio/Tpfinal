<?php

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


var_dump($usuario);


 ?>
