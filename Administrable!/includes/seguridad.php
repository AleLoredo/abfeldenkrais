<?php
//Inicio la sesión
	session_name ("m2studio_losada"); 
	session_cache_limiter ("private");
	session_start();

//COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO

@$IDUsuario=$_SESSION['nrousuario'];
global $IDUsuario;

@$TipoUsuario=$_SESSION["permisos"];
if ($TipoUsuario==NULL) { $TipoUsuario=0; }		
if ($_SESSION["autentificado"] != "SI") {
	header("Location: login.php");
	exit();
}	
?>