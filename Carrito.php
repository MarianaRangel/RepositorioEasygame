<?php
	session_start();
	include './conexion.php';
	if(isset($_SESSION['carrito'])){
		if(isset($_GET['IdVideojuego'])){
				$arreglo = $_SESSION ['carrito'];
				$encontro = false;
				$numero = 0;
				for($i = 0 ; $i < count($arreglo); $i++){
					if($arreglo[$i]['IdVideojuego']==$_GET['IdVideojuego']){
						$encontro = true;
						$numero = $i;

					}		
				}
				if($encontro == true){
					$arreglo[$numero]['Cantidad'] = $arreglo[$numero]['Cantidad']+1;
					$_SESSION['carrito'] = $arreglo;
				}
				else{
					$Nombre = "";
				$Precio = 0;
				$Imagen= "";
				$re  = mysql_query("SELECT * FROM Videojuego where IdVideojuego = ".$_GET['IdVidejuego']);
				
				while($f = mysql_fetch_array($re)){
					$Nombre = $f['IdVidejuego'];
					$Precio = $f['Precio'];
					$Imagen = $f ['Imagen'];
				}
				$datosNuevos = array ('IdVidejuego' =>$_GET['IdVidejuego'], 'Nombre_carrito' => $Nombre, 'Precio_carrito'=> $Precio, 'Imagen_carrito' =>$Imagen, 'cantidad' => 1);

					array_push($arreglo, $datosNuevos);
					$_SESSION['Carrito'] = $arreglo;
				}
			}
		else{
			if(isset($_GET['IdVideojuego'])){
				$Nombre = "";
				$Precio = 0;
				$Imagen= "";
				$re  = mysql_query("SELECT * FROM Videojuego where IdVideojuego = ".$_GET['IdVidejuego']);
				
				while($f = mysql_fetch_array($re)){
					$Nombre = $f['IdVidejuego'];
					$Precio = $f['Precio'];
					$Imagen = $f ['Imagen'];
				}
				$arreglo[] = array ('IdVidejuego' =>$_GET['IdVidejuego'], 'Nombre_carrito' => $Nombre, 'Precio_carrito'=> $Precio, 'Imagen_carrito' =>$Imagen, 'cantidad' => 1);
									$_SESSION['carrito'] = $arreglo;
									
			}
	}
}
?>

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
		<form action="Perfil.html"><a href="Carrito.php"><img src = "Imagenes/carrito2.png" id = "CarritoLink" width = "40px" height = "40px"></a></form>
		<form action="Perfil.html"><input class = "contenedorLogOut LogO" type="submit" value="Perfil"></form>
		<form action="InicioPublic.html"><input class = "contenedorLogOut LogO" type="submit" value="Log Out"></form>
	</div>	
	<div class="contenedor">
		<form action="Inicio.php"><input class="Cont_menu" type = "submit" value =" Inicio " id = "abc"></form>
		<form action="JuegosTodos.php"><input class="Cont_menu" type = "submit" value =" Juegos "></form>
		<form action="Consolas.html"><input class="Cont_menu" type = "submit" value =" Consolas "></form>
		<form action="Tutoriales.html"><input class="Cont_menu" type = "submit" value =" Tutoriales "></form>
		<form action="Contacto.html"><input class="Cont_menu" type = "submit" value =" Contacto "></form>
	</div>
	<hr size = 4 color = "#425816"/>
	<article>
		<div  class =  "TodosSlider">
			<section>
						<?php
$total = 0;
	if(isset($_SESSION['carrito'])){
		$datos = $_SESSION['carrito'];
		$total = 0;
			for($i = 0; $i<count($datos);$i++){
?>
		<div class = "producto">
			<center>|
				<img src = "./Imagenes/<?php echo $datos[$i]['Imagen_carrito']; ?>">
				<span> <?php  echo $datos [$i]['Nombre_carrito'];?></span>
				<span> Precio: <?php  echo $datos [$i]['Precio_carrito'];?></span><br>
				<span>Cantidad: <input type ="text"  value = "<?php  echo $datos [$i]['Cantidad'];?>">
				</span><br>
				<span> Subtotal: <?php  echo $datos [$i]['Cantidad'] * $datos[$i]['Precio_carrito']; ?></span><br>
			</center>
		
		<?php
	$total = ($datos[$i]['Cantidad'] * $datos[$i]['Precio_carrito']) + $total;
}
	}else{
echo '<center><h2>El carrito esta vacio </h2></center>';
	}
echo'<center><h2>Total: '.$total.'</h2></center>'; 
?>
<center><a href= "./"> Regresar</a></center>;
</div>

		
			
			</section>
		</div>
	</article>
	

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
