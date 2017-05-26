function validar() {
	var nombre, apellido, usuario, correo, clave, conClave, expresion, mensaje;
	usuario = document.getElementById("usuario").value;
	nombre = document.getElementById("nombre").value;
	apellido = document.getElementById("apellido").value;
	correo = document.getElementById("correo").value;
	clave = document.getElementById("clave").value;
	conClave = document.getElementById("conClave").value;

	expresion = /\w+@+\w+\.+[a-z]/
	
	if (usuario === "" || nombre === "" || apellido === "" || correo === "" || clave === "" || conClave === ""){
		//alert("Todos los campos son obligatorios");
		document.getElementById('mensaje').innerHTML = 'Todos los campos son obligatorios';
		return false;	

	}
	else if(usuario.length > 15){
		document.getElementById('mensaje').innerHTML = 'Usuario solo permite 15 caracteres';
		return false;
	}else if(nombre.length > 20 ){
		//alert("Solo permite 20 caracteres");
		document.getElementById('mensaje').innerHTML = 'Nombre solo permite 20 caracteres';
		return false;
	}else if(apellido.length > 20){
		//alert("Solo permite 20 caracteres");
		document.getElementById('mensaje').innerHTML = 'Apellido solo permite 20 caracteres';
		return false;
	}
	else if(!expresion.test(correo)){
		//alert("Correo invalido");
		document.getElementById('mensaje').innerHTML = 'Correo invalido';
		return false;

	}
	else if(correo.length > 100){
		//alert("Su correo contiene mas de 100 caracteres");
		document.getElementById('mensaje').innerHTML = 'Su correo contiene mas de 100 caracteres';
		return false;
	}


	if(clave !== conClave){
		//alert("Las contraseñas no conciden");
		document.getElementById('mensaje').innerHTML = 'Las contraseñas no coinciden';
		 return false;
	}
	else if (clave.length > 30 || conClave.length > 30) {
		//alert("Su contaseña contiene mas de 30 caracteres");
		 document.getElementById('mensaje').innerHTML = 'Su contraseñ contiene mas de 30 caracteres';
		return false;
	}

}

function LogIn() {
	var correo,clave, mensaje;
	correo = document.getElementById("correo").value;
	clave = document.getElementById("password").value;	
	
	if (correo === "" || clave === ""){
		//alert("Todos los campos son obligatorios");
		document.getElementById('mensaje').innerHTML = 'Todos los campos son obligatorios';
		return false;	

	}
	else if (correo.length > 100){
		document.getElementById('mensaje').innerHTML = 'Correo solo permite 100 caracteres';
		return false;
	}
	else if(clave.length > 30 ){
		//alert("Su contaseña contiene mas de 30 caracteres");
		 document.getElementById('mensaje').innerHTML = 'Su contraseña contiene mas de 30 caracteres';
		return false;
	}

}


function total(){
	var total, articulo, articulo3;
	
	articulo = document.getElementById("Precio").value;
	articulo3 = document.getElementById("Precio").value;
	
	document.getElementById("Total").innerHTML = "'articulo' + 'artciculo3'";
		
}
