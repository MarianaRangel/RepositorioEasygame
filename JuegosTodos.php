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
		<form action="Perfil.html"><a href="Carrito.html"><img src = "Imagenes/carrito2.png" id = "CarritoLink" width = "40px" height = "40px"></a></form>
		<form action="Perfil.html"><input class = "contenedorLogOut LogO" type="submit" value="Perfil"></form>
		<form action="JuegosTodosPublic.html"><input class = "contenedorLogOut LogO" type="submit" value="Salir"></form>
	</div>

	<div class="contenedor">
		<form action="Inicio.php"><input class="Cont_menu" type = "submit" value =" Inicio "></form>
		<form action="JuegosTodos.php"><input class="Cont_menu" type = "submit" value =" Juegos "></form>
		<form action="Consolas.html"><input class="Cont_menu" type = "submit" value =" Consolas "></form>
		<form action="Tutoriales.html"><input class="Cont_menu" type = "submit" value =" Tutoriales "></form>
		<form action="Contacto.html"><input class="Cont_menu" type = "submit" value =" Contacto "></form>
	</div>

	<hr size = 4 color = "#425816"/>



	<article class = "TodasImagenesEstrellas">
	<div class = "ImagenEstrella1">





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
			<!--<div class = "ImagenEstrella"º
				<img src="Imagenes/1.jpg">
			</div>-->
						
		
		<!--function getFruit($conn) {
    $sql = 'SELECT IdVideojuego, Nombre,Precio FROM Videojuego';
    foreach ($conn->query($sql) as $row) {
        print $row['IdVideojuego'] . "\t";
        print $row['Nombre'] . "\t";
        print $row['Precio'] . "\n";
	}
		}
		
		?>-->
<!---->
		
		<!--<div class="producto">
			<center>
				<img src="./Imagenes/</span><br>
				<div class="ec-stars-wrapper">
				<a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
				<a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
				<a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
				<a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
				<a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
				<span>Precio: $//</span><br><br>
			</div>
					<noscript>Necesitas tener habilitado javascript para poder votar</noscript>

			<a  class ="Boton" href="./Carrito.php?IdVideojuego=">Comprar</a>
			
		
				
			</center>
		</div>-->
		
	
	
		</div>


			<!--<Label class = "Precio">DeadRising <br><br> $450.00 </Label>-->

			<!--<input class="Adquirir__submit" type="submit" value="Adquirir">-->
						
		
		



<!--

		<div class = "ImagenEstrella1">
			<div class = "ImagenEstrella">
				<img src="Imagenes/2.jpg">
			</div>

			<div class="ec-stars-wrapper">
				<a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
				<a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
				<a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
				<a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
				<a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
			</div>
			<noscript>Necesitas tener habilitado javascript para poder votar</noscript>

			<Label class = "Precio">FarCry 3 <br><br> $420.00 </Label>

			<input class="Adquirir__submit" type="submit" value="Adquirir">
		</div>

		<div class = "ImagenEstrella1">
			<div class = "ImagenEstrella">
				<img src="Imagenes/3.jpg">
			</div>
	
			<div class="ec-stars-wrapper">
				<a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
				<a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
				<a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
				<a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
				<a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
			</div>
			<noscript>Necesitas tener habilitado javascript para poder votar</noscript>

			<Label class = "Precio">Halo Anniversary <br> $2500.00 </Label>

			<input class="Adquirir__submit" type="submit" value="Adquirir">
		</div>

		<div class = "ImagenEstrella1">
			<div class = "ImagenEstrella">
				<img src="Imagenes/6.jpg">
			</div>
	
			<div class="ec-stars-wrapper">
				<a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
				<a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
				<a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
				<a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
				<a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
			</div>
			<noscript>Necesitas tener habilitado javascript para poder votar</noscript>

			<Label class = "Precio">Batman <br><br> $350.00 </Label>

			<input class="Adquirir__submit" type="submit" value="Adquirir">
		</div>

		<div class = "ImagenEstrella1">
			<div class = "ImagenEstrella">
				<img src="Imagenes/9.jpg">
			</div>
	
			<div class="ec-stars-wrapper">
				<a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
				<a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
				<a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
				<a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
				<a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
			</div>
			<noscript>Necesitas tener habilitado javascript para poder votar</noscript>

			<Label class = "Precio">Fifa17 <br><br> $300.00 </Label>

			<input class="Adquirir__submit" type="submit" value="Adquirir">
		</div>

		<div class = "ImagenEstrella1">
			<div class = "ImagenEstrella">
				<img src="Imagenes/10.jpg">
			</div>
	
			<div class="ec-stars-wrapper">
				<a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
				<a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
				<a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
				<a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
				<a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
			</div>
			<noscript>Necesitas tener habilitado javascript para poder votar</noscript>

			<Label class = "Precio">Dark Soul III<br>$500.00 </Label>

			<input class="Adquirir__submit" type="submit" value="Adquirir">
		</div>

		<div class = "ImagenEstrella1">
			<div class = "ImagenEstrella">
				<img src="Imagenes/12.jpg">
			</div>
	
			<div class="ec-stars-wrapper">
				<a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
				<a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
				<a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
				<a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
				<a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
			</div>
			<noscript>Necesitas tener habilitado javascript para poder votar</noscript>

			<Label class = "Precio">Assassins creed unity <br><br> $350.00 </Label>

			<input class="Adquirir__submit" type="submit" value="Adquirir">
		</div>-->

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
	</div>
</div>	

</body>
</html>