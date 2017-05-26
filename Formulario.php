<!DOCTYPE html>
<html lang = "es">
	<head>
		<meta charset="utf-8">
		<title> Easygame </title>
		<meta name="viewport" content="width-device-width, user-scalable=no initial-scale=1.0, minium-scale=1.0"/>
		<link rel="stylesheet" href="estilos.css">
		<script  src ="JavaScript/validar.js"></script>
		<script  src ="JavaScript/notify.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<!-- Bootstrap -->
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <!-- Custom CSS -->
	    <link href="css/main.css" rel="stylesheet">
	    <!-- Scroll Menu -->
	    <link href="css/sweetalert.css" rel="stylesheet">
		
		
	</head>

<body>
<div class = "Todo">
	<div class = "Titulo" ><img src = "Imagenes/portada.jpg"></div>
	<div class="contenedor">
		<form action="InicioPublic.html"><input class="Cont_menu" type = "submit" value =" Inicio "></form>
		<form action="JuegosTodosPublic.html"><input class="Cont_menu" type = "submit" value =" Juegos "></form>
		<form action="ConsolasPublic.html"><input class="Cont_menu" type = "submit" value =" Consolas "></form>
		<form action="TutorialesPublic.html"><input class="Cont_menu" type = "submit" value =" Tutoriales "></form>
		<form action="ContactoPublic.html"><input class="Cont_menu" type = "submit" value =" Contacto "></form>
	</div>
	
	<hr size = 4 color = "#425816"/>
	<h2>Registro</h2>

	<form action = "RegistroFormulario.php" class  = "Login-form" method="post "  id ="cliente" onsubmit= "return validar();">

		<div class = "conRegistro" >
			<input class = "Login-form__input" type="text" id ="usuario" name = 'Usuario' placeholder = "Usuario" requiered >

			<input class = "Login-form__input" type="text" id = "nombre" name ="Nombre" placeholder = "Nombre" requiered>
		
			<input class = "Login-form__input" type="text" id = "apellido" name ="Apellido" placeholder = "Apellido" requiered>
			
			<input class = "Login-form__input" type="text" id = "correo" name ="Correo" placeholder = "Correo" requiered >
			
			<input class = "Login-form__input" type="password" id = "clave"  name ="Contraseña" placeholder = "Contraseña" requiered>

			<input class = "Login-form__input" type="password" id = "conClave" name = "rContraseña" placeholder = "Confirma Contraseña" requiered>
			
			<div class = "divMensaje" type="text" id = "mensaje"></div>
			<br>
			
			<input class="Login-form__submit" type="submit" value="Entrar" id = "Registrar" href = "Inicio.php">
			<br>
			<a  class ="YaRegistro" href = 'LogIn.html'> Ya estoy registrado </a>
		</div>

	</form>	

	
	
	
	<br><br>
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
