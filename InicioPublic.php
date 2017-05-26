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
	<div class = "Titulo" ><img src = "Imagenes/portada.jpg"></div>
	<div class="contenedorLogOut">
		<form action="Perfil.html"><a href="LogIn.html"><img src = "Imagenes/carrito2.png" id = "CarritoLink" width = "40px" height = "40px"></a></form>
		<form action="Formulario.php"><input class = "contenedorLogOut LogO" type="submit" value="Registrarse"></form>
		<form action="LogIn.html"><input class = "contenedorLogOut LogO" type="submit" value="Ingresar"></form>
	</div>
	<div class="contenedor">
		<form action="InicioPublic.html"><input class="Cont_menu" type = "submit" value =" Inicio "></form>
		<form action="JuegosTodosPublic.html"><input class="Cont_menu" type = "submit" value =" Juegos "></form>
		<form action="ConsolasPublic.html"><input class="Cont_menu" type = "submit" value =" Consolas "></form>
		<form action="TutorialesPublic.html"><input class="Cont_menu" type = "submit" value =" Tutoriales "></form>
		<form action="ContactoPublic.html"><input class="Cont_menu" type = "submit" value =" Contacto "></form>
	</div>
	<hr size = 4 color = "#425816"/>

	<article class ="ContenedorImagenesNoticias">
		<div class = "Noticias">
			<h2><div class = "ImageneNoticias"> <font color="white"> Noticias </font>
			<br><br>
				<!--<img src= "Imagenes/5.jpg" > 
					<font color="silver"> 
					<br><h6> FIFA 14 es la 21.ª edición de la serie FIFA de EA Sports. <br>Fue anunciado el 17 de abril de 2013 por sus productores principales de la franquicia: Nick Channon y Sebastián Enrique.</h6></font>
					<br><br>
				<img src= "Imagenes/8.jpg" >
					<font color="silver"> 
					<br><h6> Far Cry 4 es un juego de acción en primera persona/mundo abierto desarrollado por Ubisoft Montreal en conjunto con Ubisoft Red Storm, Ubisoft Toronto, Ubisoft Shanghai y Ubisoft Kiev y distribuido por Ubisoft.</h6></font>
					<br><br>
				<img src= "Imagenes/wii.jpg" >
					<font color="silver"> 
					<br><h6> Wii remote plus + nunchuck</h6></font>-->
				<?php
		include 'conexion.php';
		$re=mysql_query("select * from Articulo")or die(mysql_error());
		while ($f=mysql_fetch_array($re)) {
		?>


			<div class="producto">
			<center>
				<img src="./Imagenes/<?php echo $f['Imagen'];?>"><br>
				<span><?php echo $f['IdArticulo'];?></span><br>
				<a href="./detallesArticulo.php?IdArticulo=<?php echo $f['IdArticulo'];?>">ver</a>
			</center>
		</div>
	<?php
		}
	?>
			</div>
				</h2>
		</div>
		
		
		<div  class =  "TodosSlider">
		<!--<div class = "ImagenInicio" ><img src = "Imagenes/nuevo.jpg" width="100%" height="190px" ></div>-->
			<section>
		
	<?php
		include 'conexion.php';
		$re=mysql_query("select * from Videojuego")or die(mysql_error());
		while ($f=mysql_fetch_array($re)) {
		?>


			<div class="producto">
			<center>
				<img src="./Imagenes/<?php echo $f['Imagen'];?>"><br>
				<span><?php echo $f['IdVideojuego'];?></span><br>
				<a href="./detalles.php?IdVideojuego=<?php echo $f['IdVideojuego'];?>">ver</a>
			</center>
		</div>
	<?php
		}
	?>
		
		

		
	</section>

		<!--<div class ="Modal" id="img1">
		<div class = "Imagen">
				<a href= "#img4"> &#60; </a>
				<a href= "JuegoIndividual_1.html"><img src="Imagenes/1.jpg" > </a>
				<a href= "#img2">></a>
			</div>
			<a class ="Cerrar" href="">x</a>
		</div>-->

		<!--<div class ="Modal" id="img2">
			<div class = "Imagen">
				<a href= "#img1"> &#60; </a>
				<a href= "JuegoIndividual_2.html"><img src="Imagenes/2.jpg"> </a>
				<a href= "#img3">></a>
			</div>
			<a class ="Cerrar" href="">x</a>
		</div>

		<div class ="Modal" id="img3">
			<div class = "#Imagen">
				<a href= "#img2"> &#60; </a>
				<a href= "JuegoIndividual_3.html"><img src="Imagenes/3.jpg"> </a>
				<a href= "#img4">></a>
			</div>
			<a class ="Cerrar" href="">x</a>
		</div>

		<div class ="Modal" id="img4">
			<div class = "Imagen">
				<a href= "#img3"> &#60; </a>
				<a href= "JuegoIndividual_4.html"><img src="Imagenes/4.jpg"> </a>
				<a href= "#img1">></a>
			</div>
			<a class ="Cerrar" href="">x</a>
		</div>

		<br><br>

		<div class = "ImagenInicio" ><img src = "Imagenes/destacado.jpg" width="100%" height="190px"></div>

			<ul class = "galeriaDestacado">
				<li><a href="#img6" class = "ImagenJuego"><img src= "Imagenes/6.jpg"> </a></li>
				<li><a href="#img9" class = "ImagenJuego"><img src= "Imagenes/9.jpg"> </a></li>
				<li><a href="#img10" class = "ImagenJuego"><img src= "Imagenes/10.jpg"> </a></li>
				<li><a href="#img12" class = "ImagenJuego"><img src= "Imagenes/12.jpg"> </a></li>
				<li><a href="#img2.d" class = "ImagenJuego"><img src= "Imagenes/2.jpg"> </a></li>
				<li><a href="#img7" class = "ImagenJuego"><img src= "Imagenes/7.jpg"> </a></li>

			</ul>

		<div class ="Modal" id="img6">
			<div class = "Imagen">
				<a href= "#img6"> &#60; </a>
				<a href= "JuegoIndividual_6.html"><img src="Imagenes/6.jpg"> </a>
				<a href= "#img9">></a>
			</div>
			<a class ="Cerrar" href="">x</a>
		</div>

		<div class ="Modal" id="img9">
			<div class = "Imagen">
				<a href= "#img6"> &#60; </a>
				<a href= "JuegoIndividual_9.html"><img src="Imagenes/9.jpg"> </a>
				<a href= "#img3">></a>
			</div>
			<a class ="Cerrar" href="">x</a>
		</div>

		<div class ="Modal" id="img10">
			<div class = "#Imagen">
				<a href= "#img9"> &#60; </a>
				<a href= "JuegoIndividual_10.html"><img src="Imagenes/10.jpg"> </a>
				<a href= "#img12">></a>
			</div>
			<a class ="Cerrar" href="">x</a>
		</div>

		<div class ="Modal" id="img12">
			<div class = "Imagen">
				<a href= "#img10"> &#60; </a>
				<a href= "#JuegoIndividual_12.html"><img src="Imagenes/12.jpg"> </a>
				<a href= "#img2.d">></a>
			</div>
			<a class ="Cerrar" href="">x</a>
		</div>
		<div class ="Modal" id="img2.d">
			<div class = "Imagen">
				<a href= "#img12"> &#60; </a>
				<a href= "JuegoIndividual_2.html"><img src="Imagenes/2.jpg"> </a>
				<a href= "#img7">></a>
			</div>
			<a class ="Cerrar" href="">x</a>
		</div>
		<div class ="Modal" id="img7">
			<div class = "Imagen">
				<a href= "#img2.d"> &#60; </a>
				<a href= "JuegoIndividual_7.html"><img src="Imagenes/7.jpg"> </a>
				<a href= "#img6">></a>
			</div>
			<a class ="Cerrar" href="">x</a>
		</div>

		<br><br>

		<div class = "ImagenInicio" ><img src = "Imagenes/vendido.jpg" width="100%" height="190px"></div>
			<ul class = "galeriaVendidos">
				<li><a href="#img14" class = "ImagenJuego"><img src= "Imagenes/14.jpg"> </a></li>
				<li><a href="#img8" class = "ImagenJuego"><img src= "Imagenes/8.jpg"> </a></li>
				<li><a href="#img11" class = "ImagenJuego"><img src= "Imagenes/11.jpg"> </a></li>
				<li><a href="#img5" class = "ImagenJuego"><img src= "Imagenes/5.jpg"> </a></li>

			</ul>

		<div class ="Modal" id="img14">
			<div class = "Imagen">
				<a href= "#img5"> &#60; </a>
				<a href= "JuegoIndividual_14.html"><img src="Imagenes/14.jpg"> </a>
				<a href= "#img8">></a>
			</div>
			<a class ="Cerrar" href="">x</a>
		</div>

		<div class ="Modal" id="img8">
			<div class = "#Imagen">
				<a href= "#img14"> &#60; </a>
				<a href= "JuegoIndividual_8.html"><img src="Imagenes/8.jpg"> </a>
				<a href= "#img11">></a>
			</div>
			<a class ="Cerrar" href="">x</a>
		</div>

		<div class ="Modal" id="img11">
			<div class = "Imagen">
				<a href= "#img8"> &#60; </a>
				<a href= "JuegoIndividual_11.html"><img src="Imagenes/11.jpg"> </a>
				<a href= "#img5">></a>
			</div>
			<a class ="Cerrar" href="">x</a>
		</div>

		<div class ="Modal" id="img5">
			<div class = "Imagen">
				<a href= "#img11"> &#60; </a>
				<a href= "JuegoIndividual_5.html"><img src="Imagenes/5.jpg"> </a>
				<a href= "#img14">></a>
			</div>
			<a class ="Cerrar" href="">x</a>
		</div>
-->

		</div>
	</article>
	
	

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
