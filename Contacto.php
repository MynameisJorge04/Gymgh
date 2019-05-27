<?php
 include "db.php";
?>

<!DOCTYPE html>
<html lang="es">
<html>
<head>
	<meta charset="utf-8">
	<title>Contacto</title>

	<meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">

  <link href="https://file.myfontastic.com/t5tNwfwUapz4yDzK3B6sfe/icons.css" rel="stylesheet">

	<link rel="stylesheet" href="css/estilos.css">

	<link rel="stylesheet" href="css/Contacto.css">

	<script type="text/javascript">
		function ajax(){
			var req = new XMLHttpRequest();

			req.onreadystatechange = function(){
		if (req.readyState == 4 && req.status == 200) {
		document.getElementById('chat').innerHTML = req.responseText;

				}
			}

			req.open('GET', 'chat.php', true);
			req.send();
		}

		setInterval(function(){ajax();}, 1000);
	</script>

</head>
<body onload="ajax();">

<header class="header">
      <div class="contenedor">

       <img src="img/logo.png" alt="" title="" width="" class="logo">

        <span class="icon-menu" id="btn-menu"></span>
        
        <nav class="nav" id="nav">
          <ul class="menu">
            <li class="menu__item"><a  class="menu__link" href="index.html">Inicio</a></li>
            <li class="menu__item"><a  class="menu__link" href="eventos.html">Eventos</a></li>
            <li class="menu__item"><a  class="menu__link" href="tips.html">Tips</a></li>
            <li class="menu__item"><a  class="menu__link" href="Contacto.php">Contacto</a></li>
            <li class="menu__item"><a  class="menu__link" href="Blog.html">Blog</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <div class="banner"> 
        <img src="img/banas.jpg" alt="banner" title="" >
         <div class="contenedor">
        <h1 class="banner__titulo">Gym GH Tlaxcala</h1>
        <p class="banner__txt">Bienvenidos -Conoce más sobre lo que ofrecemos-</p>
        </div>
    </div>
   



<section id="uno">
  <img src="img/barras.jpg">

   <div class="conte1">
  <h2>Contactanos</h2>
    <h3 class="yeah">Este chat, es en linea tiene como primeras indicaciones e infromacion<br><br>
      Horario: 9:00am a 11:00pm<br><br>
      1.-Llenar de forma correcta los dos campos<br><br>
      2.-Tener como tal el objetivo de aclarar dudas<br><br>
      3.-Esperar de forma ordenada la respuesta de la servidora
    </h3>
	<div id="contenedor1">
		<div id="caja-chat">
			<div id="chat">
       
			</div>

		</div>

		<form method="POST" action="Contacto.php">
			<input type="text" name="nombre" placeholder="Ingresa tu nombre:">
			<textarea name="mensaje" placeholder="Ingresa tu mensaje"></textarea>
			<input name="enviar" type="submit" value="Enviar"/>
		</form>
    <?php
     if (isset($_POST['enviar'])) {
       $nombre = $_POST['nombre'];
       $mensaje = $_POST['mensaje'];
       $consulta = "INSERT INTO chat (nombre, mensaje) VALUES ('$nombre', '$mensaje')";
       $ejecutar = $conexion->query($consulta);
     }

    ?>

	</div>
</div>
</section>

 <footer class="footer">
         <div class="social">
            <img src="img/icono1.png" alt="" title="" >
             <img src="img/icono2.png" alt="" title="" >
             <img src="img/icono3.png" alt="" title="" >
             </div>
         <p class="copy">&copy; Todos los derechos reservados CBTIS03 2019</p>
         </footer>
          <script src="js/menu.js"></script>

</body>
</html>