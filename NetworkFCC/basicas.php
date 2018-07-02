<?php

  $mysqli=new mysqli("localhost","root","","networkfcc");
  
   $query="SELECT e.InEvent, e.Nombre, e.Imagen, e.Descripcion, e.Tutor, e.Tipo, f.id, f.nombre, f.apellido1, f.apellido2 FROM eventos e, persona f where e.Tipo=1 ";
  $resultado=$mysqli->query($query);
    

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Netword-FCC</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Bootstrap 3 template for corporate business" />
  <!-- css -->
  <link href="public/css/bootstrap.min.css" rel="stylesheet" />
  <link href="public/plugins/flexslider/flexslider.css" rel="stylesheet" media="screen" />
  <link href="public/css/cubeportfolio.min.css" rel="stylesheet" />
  <link href="public/css/style.css" rel="stylesheet" />
  <link href="public/css/miestilo.css" rel="stylesheet" />
  <link href="public/css/lightbox.min.css" rel="stylesheet">

  <!-- Theme skin -->
  <link id="t-colors" href="public/skins/default.css" rel="stylesheet" />

  <!-- boxed bg -->
  <link id="bodybg" href="public/bodybg/bg1.css" rel="stylesheet" type="text/css" />



</head>

<body>
	<div id="wrapper">
		<!-- start header -->
		<header>
			<div class="top">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 ">
						<div class="col-md-2"><p>secretaria</p></div>							
                              <a href="registro.php">
                              <button type="submit" class="btn btn-info derecha margen-izquierdo"> Registrarse </button>
                              </a>	
                              <a href="login.php">
                                <button type="submit" class="btn btn-info derecha margen-derecho"> Entrar </button>
                              </a>
                              							
						</div>
					</div>
				</div>
			</div>

			<div class="navbar navbar-default navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
						<a class="navbar-brand" href="index.php"><img src="public/img/logo.png" alt="" width="120" height="45" /></a>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li><a href="index.php">Inicio</a></li>
							<li><a href="basicas.php">Ciencias basicas</a></li>
							<li><a href="computacion.php">Ciencias de la computacion</a>
							<li><a href="tecnologia.php">Tecnologia</a>
							<li><a href="general.php">Formacion general</a>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<!-- end header -->
		<section id="featured" class="bg">
				<!-- start slider -->
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-8 col-xs-12">
						<!-- Slider -->
						<div id="main-slider" class="main-slider flexslider">

							<ul class="slides text-center">
								<?php while($row=$resultado->fetch_assoc()){ ?>	
								<li>
									    <a class="example-image-link" href="medios/<?php echo $row['Imagen'];?>" data-lightbox="example-1"><img class="example-image img.responsive" src="medios/<?php echo $row['Imagen'];?>" height="400px" alt="" /></a>
										
											<h3>Materia: <?php echo $row['Nombre'];?></h3>
											<h4>Tutor: <?php 
												if ($row['Tutor'] ==  $row['id']){
													echo $row['nombre']." ".$row['apellido1']." ".$row['apellido2'];
												}	
											?></h4>								
											<p>Descripcion: <?php echo $row['Descripcion'];?></p>
											
								</li>
								<?php } ?>
							</ul>
						</div>
						<!-- end slider -->
					</div>
					<div class="col-md-4 col-sm-4 hidden-xs">
						
					</div>
				</div>
			</div>
        </section>


        <section id="content">			
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h2>Comunicate <small>sugerencias del sitio</small></h2>
						<hr class="colorgraph">
						<div id="sendmessage">Your message has been sent. Thank you!</div>
						<div id="errormessage"></div>
						<form action="" method="post" role="form" class="contactForm">
							<div class="form-group">
								<input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre" data-rule="minlen:4" data-msg="Pro favor escribe tu nombre" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" name="correo" id="correo" placeholder="Correo" data-rule="correo" data-msg="Por favor escribe un correo válido" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="asunto" id="asunto" placeholder="Asunto" data-rule="minlen:4" data-msg="Por favor escribe un asunto " />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<textarea class="form-control" name="mensaje" rows="5" data-rule="required" data-msg="Por favor escribe tu comentario" placeholder="Mensaje"></textarea>
								<div class="validation"></div>
							</div>

							<div class="text-center"><button type="submit" class="btn btn-info btn-block btn-md">Enviar Mensaje</button></div>
						</form>
						<hr class="colorgraph">

					</div>
				</div>
			</div>
        </section>
		
		
		<footer>
			<div class="container">
		      <h3 class="text-center">Información adicional </h3>
				<div class="row">
					<div class="col-sm-4 ">
						<div class="widget">
							<h4>Secretaria Academica</h4>
							<ul class="link-list">
								<li>Responsable: <a href="#">MC. Maria del Consuelo Molina García </a></li>
								<li>Extensión: <a href="#">7204</a></li>
								<li>Cubículo: <a href="#">115 - CC02</a></li>
								<li>Correo: <a href="#">secre.academica2011@gmail.com</a></li>
								<li>Sitio web: <a href="#">http://www.cs.buap.mx/~secreacademica</a></li>
							</ul>
						</div>

					</div>
					<div class="col-sm-4">
						<div class="widget">
							<h4>Bolsa de trabajo</h4>
							<ul class="link-list">
								<li>Responsable: <a href="#">M.C. Alma Delia Ambrosio Vázquez</a></li>
								<li>Extensión: <a href="#">7230</a></li>
								<li>Cubículo: <a href="#">103 S - CC01</a></li>
								<li>Correo: <a href="#">ambrosio@cs.buap.mx </a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-4 ">
						<div class="widget">
							<h4>Servicio Social</h4>
							<ul class="link-list">
								<li>Responsable: <a href="#">M.C. Nelva Betzabel Espinoza Hernández </a></li>
								<li>Extensión: <a href="#">7236</a></li>
								<li>Cubículo: <a href="#">115 - CC02</a></li>
								<li>Correo: <a href="#">nespinoza@cs.buap.mx </a></li>
								<li>Sitio web: <a href="#">http://sersoc.cs.buap.mx/</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--<div class="col-lg-6">
							<ul class="social-network">
								<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
								<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
							</ul>
		</div>-->
	</div>
	<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

  <script src="public/js/lightbox-plus-jquery.min.js"></script>
  <script src="public/js/jquery.min.js"></script>
  <script src="public/js/modernizr.custom.js"></script>
  <script src="public/js/jquery.easing.1.3.js"></script>
  <script src="public/js/bootstrap.min.js"></script>
  <script src="public/plugins/flexslider/jquery.flexslider-min.js"></script>
  <script src="public/plugins/flexslider/flexslider.config.js"></script>
  <script src="public/js/jquery.appear.js"></script>
  <script src="public/js/stellar.js"></script>
  <script src="public/js/classie.js"></script>
  <script src="public/js/uisearch.js"></script>
  <script src="public/js/jquery.cubeportfolio.min.js"></script>
  <script src="public/js/google-code-prettify/prettify.js"></script>
  <script src="public/js/animate.js"></script>
  <script src="public/js/custom.js"></script>
  

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

</body>

</html>