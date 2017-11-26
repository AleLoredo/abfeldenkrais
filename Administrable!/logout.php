<?php
	header("Location: login.php?nocache=" . time() );
	
	session_start();
	session_destroy();
	

?>
