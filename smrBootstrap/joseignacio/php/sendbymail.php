<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contacto</title>
 
    <!-- CSS de Bootstrap 
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    -->
    <!-- CSS de Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
    <!-- Favicon -->
    <link href="../images/favicon.jpg" rel="icon" type="image/x-icon" />

    <!-- librerías opcionales que activan el soporte de HTML5 para IE8 -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body background="../images/bgdots.jpg">
<br>
<br>
<br>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="../index.html">Diseño editorial</a>
  </div>
 
  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li><a href="../html/presentacion.html">Presentación</a></li>
      <li class="active"><a href="../html/contacto.html">Contacto</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Servicios <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="../html/maquetacion.html">Maquetación</a></li>
          <li><a href="#">Portadas</a></li>
          <li><a href="#">Corrección</a></li>
          <li class="divider"></li>
          <li><a href="#">EPUB</a></li>
          <li class="divider"></li>
          <li><a href="#">Marketing editorial</a></li>
          <li><a href="#">Nuestros precios</a></li>
        </ul>
      </li>
    </ul>
   </div>
</nav>
<div id="inside-media" class="pull-right"><img src="../images/social.png" usemap="#Map">
          <map name="Map">
            <area shape="rect" coords="4,3,32,30" href="https://plus.google.com/113541543230342031433" rel="publisher" target="_blank" alt="Google+">
            <area shape="rect" coords="38,4,62,28" href="https://www.facebook.com/JamesCrawfordPublishing?fref=ts" target="_blank" alt="Facebook">
            <area shape="rect" coords="67,5,92,28" href="https://twitter.com/JimCPublishing" target="_blank" alt="Twitter">
          </map>
    </div>
  <div align="center">
    <img src="../images/jcp.png">
  </div>
  <div class="gradient1">
    <h1><span></span>Formas de maquetación.</h1>
  </div>  
    <p align="justify">
    	En la actualidad, los diseños se han vuelto de un 
    <br>
    <br>	
    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
    	

<div class="container">
<div class="row">
	<div class="col-md-3 col-sm-5">
		<img class="img-thumbnail img-responsive" src="../images/jcpoficinas.jpg">	
	</div>
	<div class="col-md-9 col-sm-12">

<?php
if(isset($_POST['mail'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "contacto@jamescrawfordpublishing.hol.es";
$email_from = "contacto@jamescrawfordpublishing.com";
$email_subject = "Contacto información diseño/maquetación";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['nombre']) ||
!isset($_POST['apellidos']) ||
!isset($_POST['mail']) ||
!isset($_POST['consulta'])){

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['nombre'] . "\n";
$email_message .= "Apellidos: " . $_POST['apellidos'] . "\n";
$email_message .= "E-mail: " . $_POST['mail'] . "\n";
$email_message .= "Consulta: " . $_POST['consulta'] . "\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers);

echo "¡El formulario se ha enviado con éxito!";
}
else {
echo "No has escrito ningún email, vuelve a intentarlo";  
}
?>
<br>
<br>
<a href="../html/contacto.html"><button type="submit" class="btn btn-default">Atrás</button></a>

	</div>
</div>
</div>



    <!-- Librería jQuery requerida por los plugins de JavaScript -->
    <script src="http://code.jquery.com/jquery.js"></script>
 
    <!-- Todos los plugins JavaScript de Bootstrap (también puedes
         incluir archivos JavaScript individuales de los únicos
         plugins que utilices) -->
    <script src="../js/bootstrap.min.js"></script>
    <br>
    <br>
    <footer class="col-md-6 col-md-offset-3">
      <p align="center">James Crawford Publishing® Diseño editorial SMR 2014©</p>
    </footer>
  </body>
</html>