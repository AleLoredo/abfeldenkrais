<?php
include "includes/cbd.php";

@$usuario=$_POST["usuario"];
@$clave=$_POST["clave"];


$result=mysql_query("SELECT * FROM tblusuarios WHERE usuario ='$usuario' AND clave='$clave'", $conexion);
$campos=mysql_fetch_array($result);

if ($campos==NULL ) { 
	/* Si no existe en BD es incorrecto */
	
	header("Location: login.php?e=1");
	
	
	}else { 
		/* Si existe... */
		session_name ("m2studio_losada"); 
		session_cache_limiter ("private"); 
		session_start();
		$_SESSION["autentificado"]= "SI";
		$_SESSION['usuario']=$campos["usuario"];
		$_SESSION['nrousuario']=$campos["id"];
		$_SESSION['usuariocompleto']=$campos["nombre"] . " " . $campos["apellido"];
	
	
		/* Acceso logueado al sistema...  */
		header ("Location: home.php?uid=1&amp;nocache=" . time() );	
}


?>