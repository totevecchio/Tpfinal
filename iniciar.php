

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
                <h1 class="page-header">Iniciar Sesion

                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Iniciar Sesion</li>
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
              <h2 class="text-center login-title">Ingresa a Beer For' U</h2>
              <div class="account-wall">

                <form action="index.php" method="POST" enctype="multipart/form-data">
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
									<input id="user" type="text" name="usuario" class="form-control" id="f1" required data-validation-required-message="Ingrese su nombre de usuario."  >

									<input type="password" name="contraseña" class="form-control" id="f2" required data-validation-required-message="Ingrese Contraseña." >

                  <button class="btn btn-lg btn-primary btn-block" id="submit" type="submit"  onClick="parent.location= 'index.php'"  value= "Enviar">
                      Ingresar</button>




                  <label class="checkbox pull-left">
                      <input type="checkbox" value="remember-me">
                      Recordarme
                  </label>
                  <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                  </form>
              </div>
                <a href="recovery.html">Olvido su contraseña?</a>
          </div>
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
