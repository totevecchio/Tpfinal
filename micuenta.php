<?php
	if(isset($_POST['submit'])){
		#var_dump($_POST);
		$json_registro = json_encode($_POST);
		#var_dump($json_registro);
		$handler = fopen ("usuarios.json", "w+");
		fwrite ($handler, $json_usuarios);
		fclose ($handler);


	}

	function esUnaImagen($ext) {
		$ext = strtolower($ext);
		if ($ext == 'jpg' || $ext == 'png' || $ext == 'gif'|| $ext == 'jpeg') {
			return TRUE;
		}
		return FALSE;
	}

	function tienePesoValido($size) {

		$pesoMaximo = 900000;
		// 90 KB

		if ($size > $pesoMaximo) {
			return FALSE;
		}
		return TRUE;
	}

	if (!empty($_POST)) {

		$ext = pathinfo($_FILES['archivo']['name'], PATHINFO_EXTENSION);

		$errores = $message = '';

		if (!esUnaImagen($ext) || !tienePesoValido($_FILES['archivo']['size'])) {
			$errores = 'La imagen es muy pesada o no tiene un formato valido';
		} else {

			$randomHash = md5(microtime().'foto');

			$archivo = dirname(__FILE__) . '/Foto_Perfil/' . $randomHash . '.' . $ext;
			$upload = move_uploaded_file($_FILES['archivo']['tmp_name'], $archivo);

			if ($upload) {
				$message = "Subio OK!";
				$img = $archivo;
			} else {
				$errores = "no subio";
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

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
                <a class="navbar-brand" href="index.php">Inicio</a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">

                <li>
                    <a href="services.php">Servicios</a>
                </li>
                <li>
                    <a href="iniciar.php">Iniciar Sesion</a>
                </li>
                <li>
                    <a href="registro.php">Registrarse</a>
                </li>
                <li>
                    <a href="contact.php">Contacto</a>
                </li>

                <li>
                    <a href="micuenta.php">Mi Cuenta</a>
                </li>


                    </ul>
                  </li>
              </ul>
          </div>
          <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
  </nav>

  <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Mi Cuenta
            </h1>
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a>
                </li>
                <li class="active">Mi Cuenta</li>
            </ol>
        </div>
    </div>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <form?

            Avatar:<input type="file" name="imgPerfil">
          </form>
          <h6>Subir una foto distinta...</h6>

          <input type="file" class="form-control">
        </div>
      </div>

      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a>
          <i class="fa fa-coffee"></i>
          Complete sus <strong>.Datos personales</strong>. para mejorar su perfil.
        </div>
        <h3>Datos Personales</h3>

        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">Nombre:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Apellido:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Compania:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">Username:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Contraseña:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Confirmar contraseña:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="button" class="btn btn-primary" value="Guardar Cambios">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancelar">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>

</body>

</html>
