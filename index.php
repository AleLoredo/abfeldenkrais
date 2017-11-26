<?php 
include "Administrable!/includes/cbd.php";
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); 
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

if (!empty($_POST['enviar'])) {
date_default_timezone_set('America/Buenos_Aires');
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensajes = $_POST['mensaje'];
$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$mensaje = "<b>DATOS DE LA PERSONA:</b> <br />"; 
$mensaje .= "Nombre: " . $nombre . "<br />";
$mensaje .= "E-Mail: " . $email . " <br />";
$mensaje .= "Mensaje: " . $mensajes . " <br />";
$mensaje .= "---------------------------- <br />";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'abfeldenkrais@fibertel.com.ar';
$asunto = 'Feldenkrais | Contacto';

mail($para, $asunto, utf8_decode($mensaje), $header);

}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>ab | feldenkrais</title> 
	<meta name="description" content="El Método Feldenkrais es un método de aprendizaje sobre uno mismo que utiliza el movimiento y la atención para mejorar la conciencia de cómo hacemos lo que hacemos."/>
	<meta name="keywords" content="feldenkrais" />
	<meta name="author" content="M2Studio"/>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/slider1.css" rel="stylesheet">
	<link href="css/slider2.css" rel="stylesheet">
	<link href="css/slider3.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
	<header>
		<div class="container">
			<div class="row-fluid">
				<div class="navigation"> 
					<div class="navbar navbar-fixed-top">
			    		<div class="navbar-inner">
			          		<a class="btn btn-navbar btnOverlay" data-toggle="collapse" data-target=".nav-collapse">
			            		menu
			          		</a>
			          		<div class="nav-collapse collapse">
			          			<h1><a class="navbar-brand home" href="#">Feldenkrais</a></h1>
			            		<ul class="nav">
									<li><a href="#" class="metodo">El metodo <br />Feldenkrais®</a></li>
			              			<li><a href="#" class="preguntas">Preguntas<br />frecuentes</a></li>
									<li><a href="#" class="donde">¿Dónde tomar<br />clases?</a></li>
									<li><a href="#" class="galeria">Galería de<br />imagenes</a></li>
									<li><a href="#" class="contacto">Contacto</a></li>
			            		</ul>
					<div id="curriculum"><a href="http://www.abfeldenkrais.com.ar/cv_alicia_basaldua.pdf" target="blank"><img src="img/cv.png" alt=""></a></div>
			          		</div>
			        	</div>
			      	</div>
				</div>
			</div>
		</div>
	</header>
	<div id="home">
		<div class="demo-1">
	        <div id="slider" class="sl-slider-wrapper">
				<div class="sl-slider">
					<div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="1" data-slice2-scale="2">
						<div class="sl-slide-inner">
							<img src="img/moshe.jpg" alt="">
							<h2>Movement is life</h2>
							<blockquote><p>wothout movement<br/> life is unthinkable</p><cite>Moshe Feldenkrais</cite></blockquote>
						</div>
					</div>
				</div>
				<nav id="nav-arrows" class="nav-arrows">
					<span class="nav-arrow-prev">Previous</span>
					<span class="nav-arrow-next">Next</span>
				</nav>
				<nav id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</nav>
			</div>
	    </div>
	</div>
	<div id="metodo" class="color white">
		<div class="container">
			<div class="wrapper span12">
			<div id="page-title">
				<div id="page-title-inner">
					<h2><span>El Método</span></h2>
						<?php 
$sBusqueda="SELECT * FROM contenidos WHERE id=1";
$rBusqueda = mysql_query($sBusqueda,$conexion);
$Busqueda=mysql_fetch_array($rBusqueda);
					 ?>
				</div>	
			</div>
      		<div class="row-fluid">
        		<div class="span12">
					<?php echo $Busqueda['elmetodo']; ?>
        		</div>
			</div>
			</div>
			</div>
			</div>
			<div id="preguntas" class="color white">
		<div class="container">
<div class="wrapper span12">
			<div id="page-title">
				<div id="page-title-inner">
					<h2><span>Preguntas frecuentes</span></h2>

					<?php 
$sBusqueda="SELECT * FROM contenidos WHERE id=1";
$rBusqueda = mysql_query($sBusqueda,$conexion);
$Busqueda2=mysql_fetch_array($rBusqueda);
					 ?>

				</div>	
			</div>
	<div class="row-fluid">
		<div class="span6">
			<h3 class="metodo_1">Qué es el método feldenkrais®</h3>
			<?php echo $Busqueda2['quees']; ?>
		</div>
		<div class="span6">
			<h3 class="metodo_2">Para qué sirve</h3>
			<?php echo $Busqueda2['paraque']; ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<h3 class="metodo_3">Las dos modalidades</h3>
			<?php echo $Busqueda2['modalidades']; ?>	
		</div>
		<div class="span6">
			<h3 class="metodo_4">Para quien es el método feldenkrais®</h3>
			<?php echo $Busqueda2['paraquien']; ?>
		</div>
	</div>
			<div class="clearfix"></div>
			<hr class="clean">					
			</div>
		</div>
	</div>
	<div id="donde" class="color white">
	<div class="container">
	<div class="wrapper span12">				
			<div id="page-title">
		<div id="page-title-inner">
					<h2><span>¿Dónde tomar clases?</span></h2>
				</div>	
			</div>
				<div class="row-fluid">
					<div class="span12"><p>El estudio de Alicia Basaldúa se encuentra en las Lomas de San Isidro. <br />
Elflein y Colectora de Ramal a Tigre.<br />
Clases grupales de autoconciencia a través del movimiento.</p></div>
					</div>
		
			<div class="four-tables">
				
			
				<div class="row-fluid">
					<div class="span12">
					<div class="span4">
						<div class="pricing-table">
							<div class="color-verde">
								<h3>Horarios</h3>
								<ul>
<?php
$rBusqueda = mysql_query("SELECT * FROM tblproductos");
$total_registros = mysql_num_rows($rBusqueda); 
$i=1;
while($Busqueda=mysql_fetch_array($rBusqueda)) {
	if($Busqueda[id]=="1"){

while($Busqueda['horario_'.$i] != NULL){ ?>
	<li><?php echo $Busqueda['horario_'.$i]; $i=$i+1;}}}?></li>
									
								</ul>
							</div>
						</div>
					</div>

					<div class="span4">
						<div class="pricing-table">
							<div class="color-verde honorarios">
								<h3>Honorarios</h3>
								<ul>
								<?php	
$rBusqueda = mysql_query("SELECT * FROM tblproductos");
$total_registros = mysql_num_rows($rBusqueda); 
$i=1;
while($Busqueda=mysql_fetch_array($rBusqueda)) {
	if($Busqueda[id]=="1"){
								while($Busqueda['honorarios_'.$i] != NULL){ ?>
	<li><?php echo $Busqueda['honorarios_'.$i]; $i=$i+1;}}}?></li>
								</ul>
							</div>
						</div>
					</div>	

					<div class="span4">
						<div class="pricing-table">
							<div class="masinfo">
								<h4>Para mayor información</h4> 
							<p>	 Póngase en contacto con nosotros a los siguientes teléfonos:</p>
<ul>
<li>Tel: (011) 4765-6255</li>
<li>Cel: 154-144-5516 (Alicia)</li>
<li>Cel: 153-377-6531 (Mariana)</li>
</ul>
							</div>
						</div>
					</div>


				
				</div>
			

			</div>
		
			</div>
		
		
		</div>
	
		
	</div>

	

	<div id="galeria" class="color white">
		
	
		<div class="container">

		
			<div class="wrapper span12">
	
						
			<div id="page-title">

				<div id="page-title-inner">

					<h2><span>Galería de imagenes</span></h2>

				</div>	

			</div>
			<div id="portfolio-wrapper" class="row-fluid">
								
		
	

    <?php


$carpeta = 'Administrable!/uploads';
if (is_dir($carpeta))
{
  if ($handle = opendir($carpeta))
  {
          //Notice the parentheses I added:
          while(($file = readdir($handle)) !== FALSE)
          {
                  $results_array[] = $file;
          }
          closedir($handle);
  }
}
sort($results_array);
foreach($results_array as $value)
{if($value != '.' && $value != '..' && $value != '.htaccess' && $value != '.htpasswd' && $value != 'index.php' && $value && substr($value, 0,1) != '.')
    {
      $archivo = preg_replace('/\\.[^.\\s]{3,4}$/', '', $value);
      if (@!in_array($archivo, $files_array))
      {
        echo '
            <div class="span4 portfolio-item website html5 css3 responsive">
               <div class="picture"> <a style="width: 100%; height: 170px; background-position:center; background-size: 100%; " rel="image" href="Administrable!/uploads/'.$value.'">
                <div style="background-image: url(\'Administrable!/uploads/'.$value.'\'); width: 100%; height: 170px; background-position:center; background-size: 100%; ""></div>
</a>
            </div>
            </div>
';
      }
    }
}

  ?>



			</div>
		
			</div>
		
		</div>
	
	</div>



	

	<div id="mapBg"></div>
	<div id="contacto" class="color blue transparent">
		
	
		<div class="container">

		
			<div class="wrapper span12">

				
	
		
			<div id="page-title">

				<div id="page-title-inner">

						<h2><span>Contacto</span></h2>

				</div>	

			</div>
		
			
		
			<div class="row-fluid">		
				
				<div class="span12">
					
				
					
					Estudio Alicia Basaldúa • Lomas de San Isidro • CP 1642 • Tel: (011) 4765-6255 • Mail: aliciabasaldua1@gmail.com	
				
				
				</div>	
			
			</div>
		
			
			<hr class="clean">
			
		
			<div class="row-fluid">		
			
			
				<div class="span6">
					
				
					<div id="contact-form">

						<form method="post" action="#">
							
							<fieldset>
								
								<input tabindex="4" id="nombre" name="nombre" type="text" value="" class="span12" placeholder="Nombre"  required />
								<input tabindex="2" id="email" name="email" type="email" value="" class="span12" placeholder="Mail" required />
								<textarea tabindex="3" class="input-xlarge span12" id="mensaje" name="mensaje" rows="7" placeholder="Mensaje"></textarea>

								<div class="actions">

									<input type="submit" class="btn btn-succes btn-large" name="enviar"  id="enviar" value="Enviar" />
								</div>
								
							</fieldset>

						</form>

					</div>
				
					

				</div>
			
				
				<div class="span6">
					
				
					<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
					<div id="googlemaps">
						<div id="map" class="google-map google-map-full"></div>
					</div>
					<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
					<script src="js/jquery.gmap.min.js"></script>
					<script type="text/javascript">
						$('#map').gMap({
							controls: {
								panControl: false,
								zoomControl: false,
								mapTypeControl: false,
								scaleControl: false,
								streetViewControl: false,
								overviewMapControl: false
							},
							maptype: 'ROADMAP',
							scrollwheel: true,
							zoom: 13,
							markers: [
								{
									address: 'Ada Elflein 3473', // Your Adress Here
									html: '',
									popup: false,
								}

							],

						});
						
						$('#mapBg').gMap({
							controls: {
								panControl: false,
								zoomControl: false,
								mapTypeControl: false,
								scaleControl: false,
								streetViewControl: false,
								overviewMapControl: false
							},
							maptype: 'ROADMAP',
							scrollwheel: true,
							zoom: 13,
							markers: [
								{
									address: 'Ada Elflein 3473', // Your Adress Here
									html: '',
									popup: false,
								}

							],

						});
						
					</script>
				
				
				</div>	
			
			</div>
		

			</div>
		
		
		</div>
	
		
	</div>

</div>
	

<footer >
	<div class="row-fluid">		
		<div class="span12">
			<p>ab | feldenkrais | 2015.  Alicia Basaldúa<br />
Profesora acreditada por la federación internacional de Feldenkrais · <a href="http://www.abfeldenkrais.com.ar/cv_alicia_basaldua.pdf" target="blank">Descargar CV</a> </p>
		</div>
	</div>
</footer>	




<?php 
if (!empty($_POST['enviar'])) {   ?>

 <div class="modal" id="myModal">
	<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          
          <h4 class="modal-title"><img src="img/logo.svg" alt=""></h4>
        </div>
        <div class="modal-body">
       <?php echo $nombre; ?>, Se ha enviado correctamente, próximamente estaremos respondiendo su consulta. <br />Muchas gracias.
        </div>
        <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
        </div>
      </div>
    </div>
</div>
  

<script type="text/javascript">
$( document ).ready( function() {
    $( '#myModal' ).modal( 'toggle' );
});
</script>

<?php  } ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="js/isotope.js"></script>
<script type="text/javascript" src="js/jquery.imagesloaded.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/flexslider.js"></script>
<script type="text/javascript" src="js/carousel.js"></script>
<script type="text/javascript" src="js/fancybox.js"></script>
<script type="text/javascript" src="js/twitter.js"></script>
<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
<script type="text/javascript" src="js/jquery.ba-cond.min.js"></script>
<script type="text/javascript" src="js/jquery.slitslider.js"></script>

<script type="text/javascript" src="js/excanvas.js"></script>
<script type="text/javascript" src="js/jquery.flot.min.js"></script>
<script type="text/javascript" src="js/jquery.flot.pie.min.js"></script>
<script type="text/javascript" src="js/jquery.flot.stack.js"></script>
<script type="text/javascript" src="js/jquery.flot.resize.min.js"></script>

<script defer="defer" src="js/custom.js"></script>
<script type="text/javascript">	
	$(function() {
	
		var Page = (function() {

			var $navArrows = $( '#nav-arrows' ),
				$nav = $( '#nav-dots > span' ),
				slitslider = $( '#slider' ).slitslider( {
					onBeforeChange : function( slide, pos ) {

						$nav.removeClass( 'nav-dot-current' );
						$nav.eq( pos ).addClass( 'nav-dot-current' );

					}
				} ),

				init = function() {

					initEvents();
					
				},
				initEvents = function() {

					// add navigation events
					$navArrows.children( ':last' ).on( 'click', function() {

						slitslider.next();
						return false;

					} );

					$navArrows.children( ':first' ).on( 'click', function() {
						
						slitslider.previous();
						return false;

					} );

					$nav.each( function( i ) {
					
						$( this ).on( 'click', function( event ) {
							
							var $dot = $( this );
							
							if( !slitslider.isActive() ) {

								$nav.removeClass( 'nav-dot-current' );
								$dot.addClass( 'nav-dot-current' );
							
							}
							
							slitslider.jump( i + 1 );
							return false;
						
						} );
						
					} );

				};

				return { init : init };

		})();

		Page.init();
	
	});
</script>
    
    Testeando
</body>
</html>