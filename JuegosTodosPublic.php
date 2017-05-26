<!DOCTYPE html>
<html lang = "es">
	<head>
		<meta charset="utf-8">
		<title> Easygame </title>
		<meta name="viewport" content="width-device-width, user-scalable=no initial-scale=1.0, minium-scale=1.0"/>
		<link rel="stylesheet" href="estilos.css">
	</head>
	<script type="text/javascript" src = "JavaScript/javascript.js"></script>

<body>
<div class = "Todo">
	<div class = "Titulo" ><img src = "Imagenes/portada.jpg"></div>
	<div class="contenedorLogOut">
		<form action="Perfil.html"><a href="LogIn.html"><img src = "Imagenes/carrito2.png" id = "CarritoLink" width = "40px" height = "40px"></a></form>
		<form action="Formulario.php"><input class = "contenedorLogOut LogO" type="submit" value="Registrarse"></form>
		<form action="LogIn.html"><input class = "contenedorLogOut LogO" type="submit" value="Salir"></form>
	</div>

	<div class="contenedor">
		<form action="InicioPublic.php"><input class="Cont_menu" type = "submit" value =" Inicio "></form>
		<form action="JuegosTodosPublic.html"><input class="Cont_menu" type = "submit" value =" Juegos "></form>
		<form action="ConsolasPublic.html"><input class="Cont_menu" type = "submit" value =" Consolas "></form>
		<form action="TutorialesPublic.html"><input class="Cont_menu" type = "submit" value =" Tutoriales "></form>
		<form action="ContactoPublic.html"><input class="Cont_menu" type = "submit" value =" Contacto "></form>
	</div>

	<hr size = 4 color = "#425816"/>

	<article class = "TodasImagenesEstrellas">

	<?php
		include 'conexion.php';
				
		$conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Fallo de conexión: " . $conn->connect_error);
    } 
  $sql = "SELECT *FROM Videojuego";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "Imagen:  +" . $row["Imagen"]. "<br> Código: " . $row["IdVideojuego"]. " Nombre: " . $row["Nombre"]. "<br>" . "Precio: " . $row["Precio"]. "<br>" . "Descripcion: " . $row["Descripcion"]. "<br>" .
            "Consola: " . $row["Consola"]. "Imagen: " ."<br>" . $row["Imagen"]. "<br><br>";
        }
    } else {
        echo "0 resultados";
    }
    
    $conn->close();
?>
		<!--<div class = "ImagenEstrella1">
			<div class = "ImagenEstrella">
				<img src="Imagenes/1.jpg">
			</div>

			<Label class = "Precio">DeadRising <br><br> $450.00 </Label>

		</div>

		<div class = "ImagenEstrella1">
			<div class = "ImagenEstrella">
				<img src="Imagenes/2.jpg">
			</div>

			<Label class = "Precio">FarCry 3 <br><br> $420.00 </Label>
		</div>

		<div class = "ImagenEstrella1">
			<div class = "ImagenEstrella">
				<img src="Imagenes/3.jpg">
			</div>
		
			<Label class = "Precio">Halo Anniversary <br> $2500.00 </Label>
		</div>

		<div class = "ImagenEstrella1">
			<div class = "ImagenEstrella">
				<img src="Imagenes/6.jpg">
			</div>

			<Label class = "Precio">Batman <br><br> $350.00 </Label>

		</div>

		<div class = "ImagenEstrella1">
			<div class = "ImagenEstrella">
				<img src="Imagenes/9.jpg">
			</div>

			<Label class = "Precio">Fifa17 <br><br> $300.00 </Label>
		</div>

		<div class = "ImagenEstrella1">
			<div class = "ImagenEstrella">
				<img src="Imagenes/10.jpg">
			</div>
		<Label class = "Precio">Dark Soul III<br>$500.00 </Label>

		</div>

		<div class = "ImagenEstrella1">
			<div class = "ImagenEstrella">
				<img src="Imagenes/12.jpg">
			</div>
		<Label class = "Precio">Assassins creed unity <br><br> $350.00 </Label>
		</div>-->

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
	</div>
</div>	

</body>
</html>
