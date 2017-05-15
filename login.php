<!doctype html>
<html lang="en" class="" style="overflow-x:hidden;">
<head>
	<meta charset="UTF-8">
	<title>E-Station - Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" href="lib/swiper/css/swiper.min.css">
	<link type="text/css" rel="stylesheet" href="fonts/shipping-font/styles.css">
	<link rel="stylesheet" href="styles/css/styles.css">
	<link rel="stylesheet" href="styles/css/theme-common.css" id="theme">
	<link rel="icon" type="image/png" href="img/logo (2).png" />


	</head>
<body>
	<div class="preloader-block">
	    <img src="img/preloader2.gif" alt="">
	</div>
	<div class="bx-panel-dummy"></div>

				<div class="landing-wrap" id="landing-wrap">
		<div class="wd-cut">

				<!-- Contacts -->
				<section id="s-contacts" class="s-contacts ">
	<div class="container wow fadeIn shake ">
		<div class="text-center">
			<a href="login.php" class="brand" ></a>

			<div class="sub-b-title">Ingrese sus datos para acceder</div>
		</div>
		<form action="index.php" method="post" class="form-req mt35">
			<div class="form-group">
				<label for="n1">nombre<span class="c-req"></span>:</label>
				<input id="user" type="text" name="nombre" class="form-control" id="n1" required data-validation-required-message="Ingrese su nombre de usuario."  >



			</div>
			<div class="form-group">
				<label for="n2">Contraseña:</label>
				<input type="password" name="contraseña" class="form-control" id="n2" required data-validation-required-message="Ingrese Contraseña." >

			</div>
			<a href=# data-testid="forgot_account_link">Olvidé mi contraseña</a>
 			<div class="col-xs-7 col-sm-7 col-md-7">
 			<input type="checkbox" value="">Mantener sesión iniciada
 			</div>
			<div class="text-center">
			<div class="row">
				<button type="submit" name="submit"  class="btn btn-default btn-block"  onClick="parent.location='index.php'">Ingresar</button>
				<button  class="btn btn-info btn-block" style="background:#d9534f;"  onClick="parent.location='registrar.php'">Registrarme</button>

			</div>
		</form>
	</div>
</section>
			</div><!-- .main-section -->

			<!-- FOOTER -->
			<footer>
	<nav class="socials">
		<div class="container">

			<a href="" class="icon-soc flaticon-twitter"></a>
			<a href="" class="icon-soc flaticon-facebook3"></a>
			<a href="" class="icon-soc flaticon-instagram19"></a>

		</div>
	</nav>
	<div class="copyright">
		<div class="container">
			<span class="ib vam mr10"><span class="hidden-xs">2004 - </span>2017 E-Station v1.2.2</span>
			<!-- <a href="" class="ib vam"><img src="img/logo-white.png" height="30" alt=""></a> -->
		</div>
	</div>
</footer>
		</div><!-- .wd-cut -->




		<!--Load libs-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="lib/jquery/jquery-1.11.3.min.js"><\/script>')</script>

<!-- Load Bootstrap and bootstrap plugins -->
<script src="lib/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="lib/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="lib/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="lib/bootstrap-filestyle.min.js"></script>
<!-- Load some plugins -->
<!--[if (gt IE 8)|!(IE)]><!-->
<script src="lib/swiper/js/swiper.jquery.min.js"></script>
<!--<![endif]-->
<!--[if IE 8 ]>
	<script src="lib/swiper-2.7.6/idangerous.swiper.min.js"></script>
<![endif]-->
<script src="lib/wow/wow.min.js"></script>
<script src="lib/sly.min.js"></script>
<script src="lib/countdown/jquery.countdown.min.js"></script>
<script src="lib/device.js"></script>
<script src="lib/jquery.parallax-scroll.js"></script>
<script src="lib/intlTelInput/intlTelInput.min.js"></script>
<script src="lib/jquery.scrollTo.min.js"></script>
<script src="lib/jquery.magnify.js"></script>
<script src="lib/jquery.easing.1.3.js"></script>
<script src="lib/dragula/dragula.min.js"></script>
<script src="lib/videoBG/videoBG.js"></script>
<!--Load scripts-->
<script src="lib/calctable.min.js"></script>

<!-- You can find global settings here -->
<script src="js/globals.js"></script>
<script src="js/util-functions.js"></script>

<script src="js/inits/init-settings.js"></script>
<script src="js/inits/init-checkBrowser.js"></script>
<script src="js/inits/init-video.js"></script>
<script src="js/inits/init-youtube.js"></script>
<script src="js/inits/init-bigSlider.js"></script>
<script src="js/inits/init-clientSlider.js"></script>
<script src="js/inits/init-affix.js"></script>
<script src="js/inits/init-mainMenu.js"></script>
<script src="js/inits/init-categories.js"></script>
<script src="js/inits/init-phoneMasking.js"></script>
<script src="js/inits/init-validation.js"></script>
<script src="js/inits/init-promos.js"></script>
<script src="js/inits/init-numberAnimation.js"></script>
<script src="js/inits/init-numberInputs.js"></script>
<script src="js/inits/init-cart.js"></script>
<script src="js/inits/init-modalDetailed.js"></script>

<script src="js/entry.js"></script>
<script>
	var baseUrl = '';
	if (typeof SITE_TEMPLATE_PATH !== "undefined") baseUrl = SITE_TEMPLATE_PATH + "/" + baseUrl;
	$(function(){
		ls.init.phoneMasking(document);
		$('.form-tel').intlTelInput("loadUtils", baseUrl + '/lib/intlTelInput/utils.js');
	})
</script>



	</div><!-- .landing-wrap -->
</body>
</html>
