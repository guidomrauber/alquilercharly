<?php 
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
    $celular= $_POST['celular'];
	$asunto = 'Formulario Rellenado desde web';
	$mensaje = "Nombre: ".$nombre."          Email: $email   celular: $celular Mensaje:".$_POST['mensaje'];


	if(mail('alquilercharly@gmail.com', $asunto, $mensaje)){
		echo "Correo enviado";
	}
 ?>