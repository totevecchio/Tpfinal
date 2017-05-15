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

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Servicios

                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Services</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Image Header -->
        <div class="row">
            <div class="col-lg-12">
                <img class="img-responsive" src="imagen/portada2.png" alt="">
            </div>
        </div>
        <!-- /.row -->

        <!-- Service Panels -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Panel de Servicios</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="panel panel-default text-center">
                    <img  src="imagen/tres.png" alt="">

                    <div class="panel-body">
                        <h4>Venta</h4>
                        <p>Vendemos tanto cervezas artesanales como cervezas comerciales e importadas.</p><br>

                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="panel panel-default text-center">
                          <img  src="imagen/uno.png" alt="">
                    <div class="panel-body">
                        <h4>Suscripcion</h4>
                        <p>Con la suscripcion recibiras un 6pack con distintas cervezas y origenes de las mismas para degustar, es mensual. </p>

                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="panel panel-default text-center">
                  <img  src="imagen/dos.png" alt="">
                    <div class="panel-body">
                        <h4>Bares Recomendados</h4>
                        <p>Constantemente vamos actualisando nuestra base de bares donde se puede degustar cerveza artesanal.</p>

                    </div>
                </div>
            </div>

        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Lista de Servicios</h2>
            </div>
            <div class="col-lg-12">

                <ul id="myTab" class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#service-one" data-toggle="tab"><i class=""></i>Venta</a>
                    </li>
                    <li class=""><a href="#service-two" data-toggle="tab"><i class=""></i>Suscripcion</a>
                    </li>
                    <li class=""><a href="#service-three" data-toggle="tab"><i class="t"></i>Bares Recomendados</a>
                    </li>
                </ul>

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="service-one">
                        <h4>Venta</h4>
                        <p>Vendemos tanto cervezas artesanales como cervezas comerciales e importadas.</p>
                    </div>
                    <div class="tab-pane fade" id="service-two">
                        <h4>Suscripcion</h4>
                        <p>Con la suscripcion recibiras un 6pack con distintas cervezas y origenes de las mismas para degustar, es mensual.</p>
                    </div>
                    <div class="tab-pane fade" id="service-three">
                        <h4>Bares Recomendados</h4>
                        <p>Constantemente vamos actualisando nuestra base de bares donde se puede degustar cerveza artesanal.</p>
                    </div>

                </div>

            </div>
        </div>



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

</body>

</html>