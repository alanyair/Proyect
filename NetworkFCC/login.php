<?php

  /*
    En ocasiones el usuario puede volver al login
    aun si ya existe una sesion iniciada, lo correcto
    es no mostrar otra ves el login sino redireccionarlo
    a su pagina principal mientras exista una sesion entonces
    creamos un archivo que controle el redireccionamiento
  */

  session_start();

  // isset verifica si existe una variable o eso creo xd
  if(isset($_SESSION['id'])){
    header('location: controller/redirec.php');
  }

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login en PHP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Bootstrap 3 template for corporate business" />
  <!-- css -->
  <link href="public/css/bootstrap.min.css" rel="stylesheet" />
  <link href="public/plugins/flexslider/flexslider.css" rel="stylesheet" media="screen" />
  <link href="public/css/cubeportfolio.min.css" rel="stylesheet" />
  <link href="public/css/style.css" rel="stylesheet" />
  <link href="public/css/miestilo.css" rel="stylesheet" />

  <!-- Theme skin -->
  <link id="t-colors" href="public/skins/default.css" rel="stylesheet" />

  <!-- boxed bg -->
  <link id="bodybg" href="public/bodybg/bg1.css" rel="stylesheet" type="text/css" />


  </head>
  <body>

    <!--
      Las clases que utilizo en los divs son propias de Bootstrap
      si no tienes conocimiento de este framework puedes consultar la documentacion en
      https://v4-alpha.getbootstrap.com/getting-started/introduction/
    -->
    <div id="wrapper">
    <!-- start header -->
    <header>
      <div class="top">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">             
              <a href="registro.php">
                  <button type="submit" class="btn btn-info derecha margen-izquierdo"> Registrarse </button>
              </a>               
            </div>
          </div>
        </div>
      </div>

      
    </header>
    <!-- end header -->

    <!-- Formulario Login -->
<section id="content">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
          <!-- Margen superior (css personalizado )-->
          <div class="margen-superior"></div>

          <!-- Estructura del formulario -->
          <fieldset>

            <h2 class="center">Entrar <small>accede a tu cuenta.</small></h2>
            
            <hr class="colorgraph">
            <div class="margen-superior"></div>
              
            <!-- Caja de texto para usuario -->
            <label class="sr-only" for="user">Usuario</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-user"></i></div>
              <input type="text" class="form-control input-lg" id="user" placeholder="Ingresa tu usuario">
            </div>

            <!-- Div espaciador -->
            <div class="margen-superior"></div>

            <!-- Caja de texto para la clave-->
            <label class="sr-only" for="clave">Contraseña</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-lock"></i></div>
              <input type="password" autocomplete="off" class="form-control input-lg" id="clave" placeholder="Ingresa tu usuario">
            </div>

            <!-- Animacion de load (solo sera visible cuando el cliente espere una respuesta del servidor )-->
            <div class="row" id="load" hidden="hidden">
              <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5">
                <img src="img/load.gif" width="100%" alt="">
              </div>
              <div class="col-xs-12 center text-accent">
                <span>Validando información...</span>
              </div>
            </div>
            <hr class="colorgraph">
            
            <!-- Fin load -->

            <!-- boton #login para activar la funcion click y enviar el los datos mediante ajax -->
            <div class="row">
              <div class="col-xs-8 col-xs-offset-2">
                <div class="spacing-2"></div>
                <div class="margen-superior"></div>
                <button type="button" class="btn btn-info btn-block" name="button" id="login">Iniciar sesion</button>
              </div>
            </div>

            <section class="text-accent center">
              <div class="margen-superior"></div>
              <h4 class="center">No tienes una cuenta? <small><a href="registro.php"> Registrate!</a></small></h4>
             
            </section>

          </fieldset>
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
</div>


   <script src="public/js/jquery.js"></script>
    <script src="public/js/jquery.min.js"></script>
    <!-- Bootstrap js -->
    <script src="public/js/bootstrap.min.js"></script>
    <!-- SweetAlert js -->
    <script src="public/js/sweetalert.min.js"></script>
    <!-- Js personalizado -->
    <script src="public/js/operaciones.js"></script>
  <script src="public/js/modernizr.custom.js"></script>
  <script src="public/js/jquery.easing.1.3.js"></script>
  <script src="public/plugins/flexslider/jquery.flexslider-min.js"></script>
  <script src="public/plugins/flexslider/flexslider.config.js"></script>
  <script src="public/js/jquery.appear.js"></script>
  <script src="public/js/stellar.js"></script>
  <script src="public/js/classie.js"></script>
  <script src="public/js/jquery.cubeportfolio.min.js"></script>
  <script src="public/js/google-code-prettify/prettify.js"></script>
  <script src="public/js/animate.js"></script>
  </body>
</html>
    