<!DOCTYPE html>
<html lang = "es">
	<head>
		<meta charset="utf-8">
		<title> Easygame </title>
		<meta name="viewport" content="width-device-width, user-scalable=no initial-scale=1.0, minium-scale=1.0"/>
		<link rel="stylesheet" href="estilos.css">
		<link rel="stylesheet" href="fonts/style.css">
	</head>
	<script type="text/javascript" src = "JavaScript/validar.js"></script>
	

<body>
<div class = "Todo">
	<div class = "Titulo" ><img id = "imagen"  src = "Imagenes/portada.jpg"></div>
	<div class="contenedorLogOut">
		<form action="Perfil.html"><a href="Carrito.html"><img src = "Imagenes/carrito2.png" id = "CarritoLink" width = "40px" height = "40px"></a></form>
		<form action="Perfil.html"><input class = "contenedorLogOut LogO" type="submit" value="Perfil"></form>
		<form action="InicioPublic.html"><input class = "contenedorLogOut LogO" type="submit" value="Salir"></form>
	</div>	
	<div class="contenedor">
		<form action="Inicio.php"><input class="Cont_menu" type = "submit" value =" Inicio " id = "abc"></form>
		<form action="JuegosTodos.html"><input class="Cont_menu" type = "submit" value =" Juegos "></form>
		<form action="Consolas.html"><input class="Cont_menu" type = "submit" value =" Consolas "></form>
		<form action="Tutoriales.html"><input class="Cont_menu" type = "submit" value =" Tutoriales "></form>
		<form action="Contacto.html"><input class="Cont_menu" type = "submit" value =" Contacto "></form>
	</div>
	<hr size = 4 color = "#425816"/>

	<article class ="ContenedorImagenesNoticias">
		<div class = "Noticias">
			<h2><div class = "ImageneNoticias"> <font color="white"> Noticias </font>
			<br><br>
				<img src= "Imagenes/5.jpg" > 
					<font color="silver"> 
					<br><h6> FIFA 14 es la 21.ª edición de la serie FIFA de EA Sports. <br>Fue anunciado el 17 de abril de 2013 por sus productores principales de la franquicia: Nick Channon y Sebastián Enrique.</h6></font>
					<br><br>
				<img src= "Imagenes/8.jpg" >
					<font color="silver"> 
					<br><h6> Far Cry 4 es un juego de acción en primera persona/mundo abierto desarrollado por Ubisoft Montreal en conjunto con Ubisoft Red Storm, Ubisoft Toronto, Ubisoft Shanghai y Ubisoft Kiev y distribuido por Ubisoft.</h6></font>
					<br><br>
				<img src= "Imagenes/wii.jpg" >
					<font color="silver"> 
					<br><h6> Wii remote plus + nunchuck</h6></font>
			</div> </h2>
		</div>
		
		
		<div  class =  "TodosSlider">
		<h2>Detalles</h2>
			<section>
		
				<?php
					include 'conexion.php';
					$re=mysql_query("select * from Articulo where IdArticulo =".$_GET['IdArticulo'])or die(mysql_error());
							
					while ($f=mysql_fetch_array($re)) {
					?>
						<center class = "Individual">
							<img src="./Imagenes/<?php echo $f['Imagen'];?>"><br>
							<span>Codigo: <?php echo $f['IdArticulo'];?></span><br>
							<span><?php echo $f['Nombre'];?></span>
							<span>Precio $<?php echo $f['Precio'];?></span><br>
							<span><?php echo $f['Descripcion'];?></span><br>	
						</center>

				<?php
					}
				?>	
			</section>
		</div>
	</article>
	
	<p>* Para poder adquirir un articulo de Easygame es necesario que se registre</p>
	<br>

	<hr size = 4 color = "#374A12" />

	<div class = "Abajo">
		<div class = "ContactoP">
			<div class = "Datos Direccion"> Rio Jame #2185 Col. Consola, Jalisquito, Mejico</div>	
			<div class = "Datos Correo"> easygame@prograinternet.com</div>	
			<div class = "Datos Telefono"> (52) 331144558866</div>	
		</div>
		<div class = "ContactoRS RedesSociales">
			<div class = "RS Facebook"> Facebook: EASY GAME</div>
			<div class = "RS Youtube"> Youtube Easy Game Demos</div>
			<div class = "RS Twitter">Twitter: @EasyGame</div>				 
		</div>
	</div>	<!--Cierra abajo-->	
</div>	

</body>
</html>
