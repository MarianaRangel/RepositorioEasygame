<!DOCTYPE html>
<html lang = "es">
	<head>
		<meta charset="utf-8">
		<title> Easygame </title>
		<meta name="viewport" content="width-device-width, user-scalable=no initial-scale=1.0, minium-scale=1.0"/>
		<link rel="stylesheet" href="estilos.css">
	
	<!--<script type="text/javascript" src = "JavaScript/javascript.js"></script>-->
	<script  src ="JavaScript/validar.js"></script>
    <script src = "http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <style>
          .thumb {
            height: 300px;
            border: 1px solid #000;
            margin: 10px 5px 0 0;
	   }
        </style>
</head>
<body>
<div class = "Todo">
	<div class = "Titulo" ><img src = "Imagenes/portada.jpg"></div>
	<div class="contenedorLogOut">
		<form action="Perfil.html"><a href="Carrito.html"><img src = "Imagenes/carrito2.png" id = "CarritoLink" width = "40px" height = "40px"></a></form>
		<form action="InicioPublic.html"><input class = "contenedorLogOut LogO" type="submit" value="Salir" ></form>
	</div>

	<div class="contenedor">
		<form action="Inicio.php"><input class="Cont_menu" type = "submit" value =" Inicio "></form>
		<form action="JuegosTodos.html"><input class="Cont_menu" type = "submit" value =" Juegos "></form>
		<form action="Consolas.html"><input class="Cont_menu" type = "submit" value =" Consolas "></form>
		<form action="Tutoriales.html"><input class="Cont_menu" type = "submit" value =" Tutoriales "></form>
		<form action="Contacto.html"><input class="Cont_menu" type = "submit" value =" Contacto "></form>
	</div>

	<hr size = 4 color = "#425816"/>

	<form action = "guardar.php" method="post">
	<article class = "Info">
	<div class = "PerfilImagen">
			<input type="file" id="files" name="files[]" />
        <br />
        <output id="list"></output>
	</div>
			<div class = "Perfil" >
			<label class = "Label"> Usuario</label>
			<input class = "Login-form__input" type="text" id = "username" name = "username" placeholder = " Usuario">
			<label class = "Label"> Nombre</label>
			<input class = "Login-form__input" type="text" id = "firstName" name = "firstName" placeholder = "Nombre">
			<label class = "Label"> Apellido</label>
			<input class = "Login-form__input" type="text" id = "lastName" name = "lastName" placeholder = "Apellido">
			<label class = "Label"> E-mail</label>
			<input class = "Login-form__input" type="text" id = "mail" name = "mail" placeholder = "Correo">
			<label class = "Label"> Contraeña</label>
			<input class = "Login-form__input" type="password" id = "password" name = "password" placeholder = "Contraseña">
			<br>
				
			<input class="Login-form__submit" type="submit" value="Guardar">
		</div>
		
		   <script>
              function archivo(evt) {
                  var files = evt.target.files; // FileList object
             
                  // Obtenemos la imagen del campo "file".
                  for (var i = 0, f; f = files[i]; i++) {
                    //Solo admitimos imágenes.
                    if (!f.type.match('image.*')) {
                        continue;
                    }
             
                    var reader = new FileReader();
             
                    reader.onload = (function(theFile) {
                        return function(e) {
                          // Insertamos la imagen
                         document.getElementById("list").innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                        };
                    })(f);
             
                    reader.readAsDataURL(f);
                  }
              }
             
              document.getElementById('files').addEventListener('change', archivo, false);
      </script>
		
		<script type="text/javascript" src="JavaScript/jquery.min.js"></script>
		<script type="text/javascript" >
			function cambiar(){
				$('#editar').attr('Value','GUARDAR');
				<?php
					include 'conexion.php'	;
					
					$conn = new mysqli($servername, $username, $password, $dbname);

					if ($conn->connect_error) {
						die("Fallo de conexión: " . $conn->connect_error);
					} 

					$idusuario = $_GET["IdUsuario"];
					$nom = $_GET["Nombre"];
					$apellido = $_GET["Apellido"];
					$cor = $_GET["Correo"];
					$cont = $_GET["Contraseña"];
					


					$sql = "INSERT INTO Videojuego (IdUsuario,Nombre,Apellido,Correo,Contraseña)
					VALUES ($idusuario, $nom, $apellido, $cor, $cont)";

					if ($conn->query($sql) === TRUE) {
						echo "Nuevo registro creado";
					} else {
						echo "Error: " . $sql . "<br>" . $conn->error;
					}

					$conn->close();
				?>
			}
			function cancelar(){
				$('#cancelar').attr('Value','EDITAR')
			}	
		</script>


	</article>
				
		
	</form>

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

