<?php 
include "includes/cbd.php";

@$error=$_GET['e'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=latin1" />
<title><?php echo $CLIENTE . ' - '; ?>Panel de Administraci&oacute;n</title>
<link rel="stylesheet" type="text/css" href="css/main.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
<!--[if lte IE 6]>
<link rel="stylesheet" type="text/css" href="css/ie6_or_less.css" />
<![endif]-->
<script type="text/javascript" src="js/common.js"></script>

<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>

</head>
<body id="type-a">
<div id="wrap">
  <div id="header">
    <div id="site-name"><?php echo $CLIENTE . ' - '; ?>Panel de Administraci&oacute;n</div>
   
  </div>
  <div id="content-wrap">
    <div id="content">
      <div class="featurebox">
        <h3>Ingreso a Area Restringida</h3>
        <p>Ud. est&aacute; ingresando a un &aacute;rea segura. Para mayor seguridad por favor no comparta sus credenciales. </p>
        
                <form action="login-control.php" method="post">
		  <table border="0" cellspacing="0" cellpadding="0">
		    <tr>
		      <td width="100">Usuario</td>
		      <td><input type="text" name="usuario" id="usuario" />
		        <?php if ($error == "1" ) {?> Usuario o Clave Incorrecta!
           		  <?php }?></td>
	        </tr>
		    <tr>
		      <td width="100">Clave</td>
		      <td><input type="password" name="clave" id="clave" /></td>
	        </tr>
		    <tr>
		      <td>&nbsp;</td>
		      <td><input type="submit" name="submit" id="submit" value="Ingresar" /></td>
	        </tr>
	      </table>
	
			</form>
      </div>
		

            
        	<div id="footer">
			<p>
            </p>
			<p>&nbsp;</p>
			</div>
    </div>
  </div>
</div>
</body>
</html>
