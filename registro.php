<?php
	require_once("funciones.php");
	$pNombre = "";
	$pUsuario = "";
	$pMail = "";
	$pcontrasena="";
	$conContrasena = "";


	if ($_POST)
	{
		$pNombre = $_POST["nombre"];
		$pUsuario = $_POST["usuario"];
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
                    <a href="iniciar.php">Iniciar Sesion</a>
                </li>
                <li>
                    <a href="registro.php">Registrarse</a>
                </li>
              
                      </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Registrarse

                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Registrarse</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">

            </div>
            <!-- Contact Details Column -->

        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">

                <section class="section-login">
                  <div class="container">
      <div class="row">
          <div class="col-sm-6 col-md-4 col-md-offset-4">
              <h2 class="text-center login-title">Registrate a Beer For' U</h2>
              <div class="account-wall">

								<form action="registro.php" method="POST" enctype="multipart/form-data">
									<?php if (!empty($errores)) { ?>
										<div style="width:200px;background-color:yellow">
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

												<input id="nombre" class="form-control" placeholder="Nombre" type="text" name="nombre" value="<?php echo $pNombre; ?>"></input>
											</div>
											<div>

												<input id="mail" class="form-control" placeholder="Email" type="text" name="mail" value="<?php echo $pMail; ?>"></input>
											</div>
											<div>
											<div>

												<input id="usuario" class="form-control" placeholder="Usuario" type="text" name="usuario" value="<?php echo $pUsuario; ?>"></input>
											</div>
												<input id="pass" class="form-control" placeholder="Contraseña" type="password" name="pass"  value= "<?php echo $pcontrasena; ?>"></input>
											</div>
											<div>

												<input id="cpass"	class="form-control" placeholder="Comfirmar Contraseña" type="password" name="cpass" value= "<?php echo $conContrasena; ?>"></input>
											</div>

											<div>
												<input id="submit" class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Registrae Ahora"></input>
											</div>
										</form>
      </div>
  </div>


            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">

                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

</body>

</html>
