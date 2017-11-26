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

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>ab | feldenkrais</title> 
	<meta name="description" content=""/>
	<meta name="keywords" content="" />
	<meta name="author" content=""/>
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<!-- end: Facebook Open Graph -->

    <!-- start: CSS -->
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
	<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
	
	<!--start: Header -->
	<header>
		
		<!--start: Container -->
		<div class="container">
						
			<!--start: Row -->
			<div class="row-fluid">
					
				<!--start: Navigation -->
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
				<!--end: Navigation -->	
					
			</div>
			<!--end: Row -->
			
		</div>
		<!--end: Container-->			
			
	</header>
	<!--end: Header-->
	<!-- start: 1st Page - Home -->
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
</div><!-- /sl-slider -->

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

			</div><!-- /slider-wrapper -->

	    </div>

	</div>
	<!-- end: 1st Page - Home -->
	
	<!-- start: 2nd Page - Services -->
	<div id="metodo" class="color white">
		
		<!--start: Container -->
		<div class="container">

			<!--start: Wrapper -->
			<div class="wrapper span12">
				
							<!-- start: Page Title -->
			<div id="page-title">

				<div id="page-title-inner">

					<h2><span>El Método</span></h2>

				</div>	

			</div>
			<!-- end: Page Title -->
			
			<!-- start: Row -->
      		<div class="row-fluid">
	
        		<div class="span12">
	
					<p>
						El Método Feldenkrais es un método de aprendizaje sobre uno mismo que utiliza el movimiento y la atención para mejorar la conciencia de cómo hacemos lo que hacemos. Surge como un proceso educativo que brinda la posibilidad de mejorar el accionar a través de movimientos fáciles y suaves.

					</p>	
          			
        		</div>
			
			</div>

			</div>
			</div>
			</div>
			<!-- end: Row -->
			<div id="preguntas" class="color white">
		
		<!--start: Container -->
		<div class="container">

			<!--start: Wrapper -->
			<div class="wrapper span12">
			<div id="page-title">

				<div id="page-title-inner">

					<h2><span>Preguntas frecuentes</span></h2>

				</div>	

			</div>
			<!-- start: Row -->
      		<div class="row-fluid">
	
        		<div class="span6">
						<h3 class="metodo_1">Qué es el método feldenkrais®</h3>
					<p>
						Fue creado por Moshe Feldenkrais (1904.1984), ingeniero, físico y primer cinturón negro de judo de occidente. Su curiosidad e interés en la neurología y su necesidad de recuperarse de un accidente en sus rodillas lo llevaron a explorar la relación entre el movimiento y la manera de sentir, pensar y actuar.<br/><br/>

Feldenkrais pasaba horas observando cómo los niños se movían y aprendían mientras jugaban. Sobre sus observaciones, su experiencia y sus conocimientos recreó durante más de cuarenta años, innumerables secuencias del desarrollo motriz humano. Así desarrolló el método que lleva su nombre, que propone transitar estas secuencias orientando la atención hacia los movimientos en sí y hacia las sensaciones que lo acompañan.
					</p>	
          			
        		</div>

				<div class="span6">
						<h3 class="metodo_2">Para qué sirve</h3>
					<p>
						· Mejorar el movimiento, la postura, la flexibilidad y la coordinación.<br/>
· Desarrollar la atención, facilitar la concentración, la espontaneidad y la creatividad.<br/> 
· Comprender más claramente cuáles son los propios patrones de movimiento.<br/>
· Detectar dónde hay tensiones, resistencias y esfuerzo de movimiento.<br/> 
· Mejorar la respiración, aliviar los dolores crónicos y modificar actitudes posturales.<br/>
· Volver gradualmente a movimientos más amplios y más fluidos.<br/>
· Aumentar la flexibilidad de las articulaciones.<br/>
· Estimular los músculos para recuperar su habilidad natural de contraerse y elongarse.<br/>
· Aprender cómo todo el cuerpo puede colaborar en cualquier movimiento y así hacer lo que hacemos de una manera más eficiente, confortable y plena.

					</p>	
          			
        		</div>
			
			</div>
			<!-- end: Row -->	
						<!-- start: Row -->
      		<div class="row-fluid">
        		<div class="span6">
						<h3 class="metodo_3">Las dos modalidades</h3>
	
					<p>
						Existen dos modalidades a la hora de tomar una clase de Feldenkrais:<br/><br/>
1) Clases en las que el profesor mueve al alumnos a través de un toque suave. Esta modalidad recibe el nombre de “Integración Feldenkrais®”. Las lecciones se adaptan a las necesidades y preguntas de cada alumno. Son clases individuales y se dan generalmente sobre una camilla donde el alumno se acuesta y así el profesor lo mueve, y ambos buscan, cuales son los patrones de movimiento que el alumno tiene y la posibilidad de encontrar nuevas alternativas, tal vez olvidadas. Es así que se amplía la atención y la habilidad para moverse de una manera más funcional que se corresponde al potencial de nuestro sistema nervioso.<br/><br/>

2) Clases en las que el profesor guía verbalmente al alumnos o grupo de alumnos. Esta modalidad recibe el nombre de “Autoconciencia a través del movimiento®”. El profesor sugiere movimientos que el alumno hace, en la mayoría de los casos, acostado o sentado en el piso. Así repite patrones que utiliza normalmente en su accionar diario, con la ventaja de que el peso de sostener la gravedad se ve enormemente disminuido. Al terminar la clase el alumno habrá reaprendido, a través de sus sistema nervioso, una forma distinta de actuar.<br/><br/>

Casa clase dura entre 30 y 60 minutos se organiza alrededor de una función. Las clases buscan que los alumnos descubran cuáles son los patrones neuromusculares o de rigidez con que se mueven. Al igual que en las clases de Integración Feldenkrais®, ellos podrán aumentar su sensibilidad y encontrar por exploración, otras formas más cómodas y fáciles para caminar, sentarse, pararse, correr, practicar deportes. 
					</p>	
          			
        		</div>

				<div class="span6">
						<h3 class="metodo_4">Para quien es el método feldenkrais®</h3>
					<p>
						Cualquier persona, grande o joven, con discapacidad o sin ella, puede tomar clases de Feldenkrais®. Es muy bueno para aquellos que padecen dolores crónicos o agudos de espalda, cuello, hombros, caderas, piernas o rodillas. Es una buena opción también para los que sin tener estos padecimientos quieren mejorar su auto imagen.<br/><br/>

El Método Feldenkrais es de gran ayuda para quienes tienen enfermedades relacionadas con el sistema nervioso central: esclerosis múltiple, parálisis cerebral y ataques cerebro vasculares (ACV).<br/><br/>
Además es una actividad muy buena para músicos, artistas, actores y deportistas que quieren aumentar sus habilidades y recrear su creatividad.<br/><br/>

Personas mayores pueden utilizarlo para mantener o recuperar la habilidad motriz sin dolor o esfuerzo. A través de la práctica de este método se puede disfrutar de una mayor facilidad de movimiento, una mayor vitalidad y una sensación de relajación.<br/><br/>
					</p>	
          			
        		</div>
			
			</div>
			<!-- end: Row -->	
	

			
			<div class="clearfix"></div>
			<hr class="clean">					
			</div>
			<!-- end: Wrapper -->
		
		</div>
		<!--end: Container -->
		
	</div>
	<!-- end: 2nd Page - Services -->
	
	<!-- start: 3rd Page - Pricing Tables -->
	<div id="donde" class="color white">
		
		<!--start: Container -->
		<div class="container">

			<!--start: Wrapper -->
			<div class="wrapper span12">

							<!-- start: Page Title -->
			<div id="page-title">

				<div id="page-title-inner">

					<h2><span>¿Dónde tomar clases?</span></h2>

				</div>	

			</div>
			<!-- end: Page Title -->
				<div class="row-fluid">
					<div class="span12"><p>El estudio de Alicia Basaldúa se encuentra en las Lomas de San Isidro. <br />
Elflein y Colectora de Ramal a Tigre.<br />
Clases grupales de autoconciencia a través del movimiento.</p></div>
					</div>
			<!-- start: Table -->
			<div class="four-tables">
				
				<!-- start: Row -->
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
				<!--end: Row -->

			</div>
			<!-- end: Table -->
			</div>
			<!-- end: Wrapper -->
		
		</div>
		<!--end: Container -->
		
	</div>
	<!-- end: 3rd Page - Pricing Tables -->
	
	<!-- start: 4th Page - Portfolio -->
	<div id="galeria" class="color white">
		
		<!--start: Container -->
		<div class="container">

			<!--start: Wrapper -->
			<div class="wrapper span12">
	
							<!-- start: Page Title -->
			<div id="page-title">

				<div id="page-title-inner">

					<h2><span>Galería de imagenes</span></h2>

				</div>	

			</div>
			<div id="portfolio-wrapper" class="row-fluid">
								
				<div class="span4 portfolio-item website html5 css3 responsive">
					<div class="picture">
						<a href="img/galeria/full/01.jpg" title="" rel="image">
							<img src="img/galeria/small/01.jpg" alt=""/><div class="image-overlay-zoom"></div>
						</a>
					</div>	
				</div>
				<div class="span4 portfolio-item website html5 css3 responsive">
					<div class="picture">
						<a href="img/galeria/full/02.jpg" title="Title" rel="image">
							<img src="img/galeria/small/02.jpg" alt=""/><div class="image-overlay-zoom"></div>
						</a>
					</div>
				</div>
				<div class="span4 portfolio-item website html5 css3 responsive">
					<div class="picture"><a href="img/galeria/full/03.jpg" title="Title" rel="image">
						<img src="img/galeria/small/03.jpg" alt=""/><div class="image-overlay-zoom"></div>
					</a>
					</div>
				</div>
				<div class="span4 portfolio-item admin dashboard html5 css3 responsive">
					<div class="picture"><a href="img/galeria/full/04.jpg" title="Title" rel="image">
						<img src="img/galeria/small/04.jpg" alt=""/><div class="image-overlay-zoom"></div>
					</a>
					</div>
				</div>

				<div class="span4 portfolio-item website html5 css3 responsive">
					<div class="picture"><a href="img/galeria/full/06.jpg" rel="image">
						<img src="img/galeria/small/06.jpg" alt=""/><div class="image-overlay-zoom"></div>
					</a>
					
					</div>
				</div>

				<div class="span4 portfolio-item website html5 css3 responsive">
					<div class="picture">
						<a href="img/galeria/full/08.jpg" title="Title" rel="image">
							<img src="img/galeria/small/08.jpg" alt=""/><div class="image-overlay-zoom"></div>
						</a>
					</div>
				</div>

				<div class="span4 portfolio-item admin dashboard html5 css3 responsive">
					<div class="picture"><a href="img/galeria/full/10.jpg" title="Title" rel="image">
						<img src="img/galeria/small/10.jpg" alt=""/><div class="image-overlay-zoom"></div>
					</a>
					</div>
				</div>
				<div class="span4 portfolio-item admin dashboard html5 css3 responsive">
					<div class="picture"><a href="img/galeria/full/11.jpg" title="Title" rel="image">
						<img src="img/galeria/small/11.jpg" alt=""/><div class="image-overlay-zoom"></div>
					</a>
					</div>
				</div>
				<div class="span4 portfolio-item website html5 css3 responsive">
					<div class="picture"><a href="img/galeria/full/12.jpg" rel="image">
						<img src="img/galeria/small/12.jpg" alt=""/><div class="image-overlay-zoom"></div>
					</a>
					
					</div>
				</div>
					<div class="span4 portfolio-item admin dashboard html5 css3 responsive">
					<div class="picture"><a href="img/galeria/full/13.jpg" title="Title" rel="image">
						<img src="img/galeria/small/13.jpg" alt=""/><div class="image-overlay-zoom"></div>
					</a>
					</div>
				</div>

				<div class="span4 portfolio-item website html5 css3 responsive">
					<div class="picture"><a href="img/galeria/full/16.jpg" rel="image">
						<img src="img/galeria/small/16.jpg" alt=""/><div class="image-overlay-zoom"></div>
					</a>
					
					</div>
				</div>
				<div class="span4 portfolio-item website html5 css3 responsive">
					<div class="picture"><a href="img/galeria/full/17.jpg" rel="image">
						<img src="img/galeria/small/17.jpg" alt=""/><div class="image-overlay-zoom"></div>
					</a>
					
					</div>
				</div>
				<div class="span4 portfolio-item website html5 css3 responsive">
					<div class="picture"><a href="img/galeria/full/18.jpg" rel="image">
						<img src="img/galeria/small/18.jpg" alt=""/><div class="image-overlay-zoom"></div>
					</a>
					
					</div>
				</div>
				<div class="span4 portfolio-item website html5 css3 responsive">
					<div class="picture"><a href="img/galeria/full/19.jpg" rel="image">
						<img src="img/galeria/small/19.jpg" alt=""/><div class="image-overlay-zoom"></div>
					</a>
					
					</div>
				</div>
			</div>
			<!-- end: Portfolio -->
			</div>
			<!-- end: Wrapper -->
		</div>
		<!--end: Container -->
	</div>
	<!-- end: 4th Page - Portfolio -->
	
	<!-- end: 6th Page - Team -->
	
	<!-- start: 7th Page - Contact -->
	<div id="mapBg"></div>
	<div id="contacto" class="color blue transparent">
		
		<!--start: Container -->
		<div class="container">

			<!--start: Wrapper -->
			<div class="wrapper span12">

				
	
			<!-- start: Page Title -->
			<div id="page-title">

				<div id="page-title-inner">

						<h2><span>Contacto</span></h2>

				</div>	

			</div>
			<!-- end: Page Title -->
			
			<!-- start: Row -->
			<div class="row-fluid">		
				
				<div class="span12">
					
					<!-- start: Contact Info -->
					
					Estudio Alicia Basaldúa • Lomas de San Isidro • CP 1642 • Tel: (011) 4765-6255 • Mail: aliciabasaldua1@gmail.com	
					<!-- end: Contact Info -->
				
				</div>	
			
			</div>
			<!-- end: Row -->
			
			<hr class="clean">
			
			<!-- start: Row -->
			<div class="row-fluid">		
			
				<!-- start: Map -->
				<div class="span6">
					
					<!-- start: Contact Form -->
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
					<!-- end: Contact Form -->
					

				</div>
				<!-- end: Map -->
				
				<div class="span6">
					
					<!-- starts: Google Maps -->
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
					<!-- end: Google Maps -->
				
				</div>	
			
			</div>
			<!-- end: Row -->

			</div>
			<!-- end: Wrapper -->
		
		</div>
		<!--end: Container -->
		
	</div>
	<!-- end: 7th Page - Contact -->
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






<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
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
<!-- end: Java Script -->

</body>
</html>