<!DOCTYPE html>
<html lang = "es">
	<head>
		<meta charset="utf-8">
		<title> Easygame </title>
		<meta name="viewport" content="width-device-width, user-scalable=no initial-scale=1.0, minium-scale=1.0"/>
		<link rel="stylesheet" href="estilos.css">
		<script  src ="JavaScript/validar.js"></script>
	</head>
	
<body>
<div class = "Todo">
	<div class = "Titulo" ><img src = "Imagenes/portada.jpg"></div>

	<div class="contenedor">
		<form action="Inicio.php"><input class="Cont_menu" type = "submit" value =" Inicio "></form>
		<form action="JuegosTodos.html"><input class="Cont_menu" type = "submit" value =" Juegos "></form>
		<form action="Consolas.html"><input class="Cont_menu" type = "submit" value =" Consolas "></form>
		<form action="Tutoriales.html"><input class="Cont_menu" type = "submit" value =" Tutoriales "></form>
		<form action="Contacto.html"><input class="Cont_menu" type = "submit" value =" Contacto "></form>
	</div>

	<hr size = 4 color = "#425816"/>


	<h2>Ingreso</h2>

	<form action = "" class  = " Login-form" onsubmit= "return LogIn();">
		<div class = "conRegistro" >
			
			<input class = "Login-form__input" type="text" id = "correo" name = "correo" placeholder = "&#128272; Correo">	
			<input class = "Login-form__input" type="password" id = "password" name = "password" placeholder = "&#128272; Contraseña">
			<div class = "divMensaje" type="text" id = "mensaje"></div>
			<br>
            <form action="Inicio.html"><input class="Login-form__submit" type="submit" value="Entrar" ></form>
<?php
			session_start();
		 
	require("conexion.php");
	//		include 'conexion.php';

	$correo=$_POST['correo'];
	$pass=$_POST['password'];


	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$sql2=mysqli_query($mysqli,"SELECT * FROM Usuario WHERE Correo ='$correo'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['easygame']){/////pasadmin
			$_SESSION['id']=$f2['idUsuario'];
			$_SESSION['nombre']=$f2['Nombre'];
			

			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='InicioAdmin.html'</script>";
		
		}
		else{
			echo '<script>alert("PFFF")</script> ';
		}
	}

/*
	$sql=mysqli_query($mysqli,"SELECT * FROM Usuario WHERE Correo ='$correo'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['Contraseña']){
			$_SESSION['id']=$f2['idUsuario'];
			$_SESSION['nombre']=$f2['Nombre'];

			header("Location: Inicio.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='LogIn.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='LogIn.php'</script>";	

	}*/

?>
		</div>
	</form>	

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


