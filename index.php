<?php
    include '../logic/controlNews.php';
    
	#$controlnews= new controlNews();
    #$news = $controlnews->searchNews(); 
    #echo $news;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ARHB</title>
    <!-- =============== Bootstrap Core CSS =============== -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <!-- =============== fonts awesome =============== -->
    <link rel="stylesheet" href="assets/font/css/font-awesome.min.css" type="text/css">
    <!-- =============== Plugin CSS =============== -->
    <link rel="stylesheet" href="assets/css/animate.min.css" type="text/css">
    <!-- =============== Custom CSS =============== -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <!-- =============== Owl Carousel Assets =============== -->
    <link href="assets/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="assets/owl-carousel/owl.theme.css" rel="stylesheet">
	
	<link rel="stylesheet" href="assets/css/isotope-docs.css" media="screen">
	<link rel="stylesheet" href="assets/css/baguetteBox.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
</head>

<body>
    <!-- =============== Preloader =============== -->
    <div id="preloader">
        <div id="loading">
		<img width="256" height="32" src="assets/img/loading-cylon-red.svg">	
        </div>
    </div>
    <!-- =============== nav =============== -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="Logo" width="45%" >
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
						<li>
                            <a class="page-scroll" href="#home">Inicio</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#about">Conozcanos</a>
                        </li>
                        <li>
							<a class="page-scroll" href="#contact">Contactenos</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="views/news.php">Noticias</a>
                        </li>
                        <li>
							<li class="nav-item dropdown">
								<a class="page-scroll nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Archivos</a>
								<ul class="dropdown-menu">
								  <li><a class="page-scroll dropdown-item" href="views/files.php">Archivos públicos</a></li>
								  <li class="dropdown-divider"></li>
								  <li><a class="page-scroll dropdown-item" href="views/records.php">Fondos</a></li>
								</ul>
                        	</li>
						</li>
                        <li>
                            <a class="page-scroll" href="views/login.php">Iniciar Sesion</a>
                        </li>
                    </ul>
                </div>
                <!-- =============== navbar-collapse =============== -->

            </div>
        </div>
        <!-- =============== container-fluid =============== -->
    </nav>
    <!-- =============== header =============== -->
    <header id="home" class="header">
		<!-- =============== container =============== -->
        <div class="container">
            <div class="header-content row">
				<div id="owl-demo" class="owl-carousel header1">
					<div>
						<div class="col-xs-12 col-sm-6 col-md-6 header-text">
							<h2 class="wow bounceIn animated" data-wow-delay=".40s">Embargarán a conductores morosos</h2>
							<h3 class="wow bounceIn animated" data-wow-delay=".50s">20 febrero, 2022 </h3>
							<p class="wow bounceIn animated" data-wow-delay=".60s">A raíz del incumplimiento en el pago de las multas de tránsito que han presentado algunos conductores</p>
							<p>
								<div class="btn btn-primary btn-lg btn-ornge wow bounceIn animated" data-wow-delay="1s"><i class="hbtn"></i> <span>Ver mas</span></i></div>
							</p>
						</div>               
					</div>
				 	<div>
						<div class="col-xs-12 col-sm-6 col-md-6 header-text">
							<h2 class="wow bounceIn animated" data-wow-delay=".40s">Embargarán a conductores morosos</h2>
							<h3 class="wow bounceIn animated" data-wow-delay=".50s">20 febrero, 2022 </h3>
							<p class="wow bounceIn animated" data-wow-delay=".60s">A raíz del incumplimiento en el pago de las multas de tránsito que han presentado algunos conductores</p>
							<p>
								<div class="btn btn-primary btn-lg btn-ornge wow bounceIn animated" data-wow-delay="1s"><i class="hbtn"></i> <span>Ver mas</span></i></div>
							</p>
						</div>               
					</div>
				</div>				 
			</div>          
        </div>
		<!-- =============== container end =============== -->
    </header>
    <!-- =============== About =============== -->
    <section id="about" class="">
		<!-- =============== container =============== -->
        <div class="container">            
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 wow fadeInDown animated" data-wow-delay=".5s">
                   <h2>Mision</h2>
				   <p>La conservación del patrimonio documental, la preocupación por rescatar todos aquellos documentos
					   que se encuentren en peligro de extinción y el servicio a los ciudadanos para que se aproveche la 
					   información a favor de la investigación, igualmente la divulgación de acervo documental a través de 
					   instrumentos de descripción, guías, inventarios, catálogos, exposiciones e índices que faciliten el acceso 
					   a la información.  
				   </p>

				</div>
                <div class="col-xs-12 col-sm-12 col-md-6 wow fadeInRight animated" data-wow-delay=".3s">
                    <img src="assets/img/LogoAHRB.jpg"  width="150%"/> 
					             
                </div> 
				        
            </div>
        </div>  
		<br>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6 wow fadeInDown animated" data-wow-delay=".3s">
					<h2>Vision</h2>
					<p>Rescate, conservacion, divulgación del patrimonio documental, presentación de un servicio eficiente y eficaz, en beneficio 
						de la investigación, la ciencia y la cultura. </p>
				   </div>
				<div class="col-xs-12 col-sm-12 col-md-6 wow fadeInRight animated" data-wow-delay=".3s">
					<img src="assets/img/trabajoAHRB.jpg" width="150%"/>
					<br>                
				</div>
			</div>
		</div>
		<br>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6 wow fadeInDown animated" data-wow-delay=".3s">
					<h2>Reseña Historica</h2>
					<p>Desde el año de 1882, el estado de Boyacá organizó el Archivo Historico de la Provincia de Tunja, 
						el cual fue encomendado al peleógrafo tunjano Don EMETERIO MORENO, quien inició la clasificación y 
						conformación de los índices.</p>
					<p>Es importante destacar que fue el Presidente de los Estados Unidos de Colombia, nacido en Boyacá, el 
						General SANTOS ACOSTA, quien inició en el país el movimiento archivístico nacional con la fundación 
						del Archivo Nacional de Colombia, creado el 17 de enero de 1868.</p>

						<p>
							<a href="Reseña.html">
								<div class="btn btn-primary btn-lg btn-ornge wow bounceIn animated" data-wow-delay="1s"><i class="hbtn"></i> <span >Ver mas</span></i></div>
							</a>
						</p>
				   </div>
				<div class="col-xs-12 col-sm-12 col-md-6 wow fadeInRight animated" data-wow-delay=".3s">
					<img src="assets/img/interiorAHRB.jpg" width="120%"/>
					<br>                
				</div>
			</div>
			
		</div>

		<!-- =============== container end =============== -->		
    </section>

	<section id="biography" class="">
		<!-- =============== container =============== -->
		<div class="container">            
			<div class="row">
				<div class="title">
				<h2>Quizas te pueda interesar</h2>
				<p>Biografias de los directores del archivo regional de Boyaca</p>
				</div>
				<div class="col-sm-4 wow fadeInDown animated" data-wow-delay=".1s">
				   <div class="timg"><img class="timgPh" src="assets/img/Biography/Bio_jorge.png"/></div>
					<div class="t-box">
				   	<h3>Dr. Jorge Palacios Preciado</h3>
				   	<p>
					<a href="biography_Jorge.html">
						<div class="btn btn-primary btn-lg btn-ornge wow bounceIn animated" data-wow-delay="0s"><i class="hbtn"></i> <span >Ver Biografia</span></i></div>
					</a>
					</p>
				   </div>
				  </div>
				  <div class="col-sm-4 wow fadeInUp animated" data-wow-delay=".2s">
					<div class="timg"><img class="timgPh" src="assets/img/Biography/Bio_rosula.jpg"/></div>
				   <div class="t-box">
				   <h3>Miryam Báez Osorio</h3>
				   <p>
					<a href="biography_Myriam.html">
						<div class="btn btn-primary btn-lg btn-ornge wow bounceIn animated" data-wow-delay="0s"><i class="hbtn"></i> <span >Ver Biografia</span></i></div>
					</a>
					</p>
				   </div>				   
				  </div>
				  <div class="col-sm-4 wow fadeInDown animated" data-wow-delay=".3s">
					<div class="timg"><img  class="timgPh" src="assets/img/Biography/Bio_rosula.jpg"/></div>
				   <div class="t-box">
				   <h3>María Rósula Vargas De Castañeda</h3>
				   <p>
					<a href="biography_Rosula.html">
						<div class="btn btn-primary btn-lg btn-ornge wow bounceIn animated" data-wow-delay="0s"><i class="hbtn"></i> <span >Ver Biografia</span></i></div>
					</a>
					</p>
				   </div>
				  </div>                 
				</div>
			</div>
		</div>   
		<!-- =============== container end =============== -->		
	</section>	


	<section id="contact">
		<!-- =============== container =============== -->
			<div class="container">
					<div class="row">
					<div class="title">
					<h2>Contactanos</h2>
					<p>¿Cómo podemos ayudarte?</p>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4  wow bounceIn animated" style="background-color: #27AE60; border-radius: 10px;" data-wow-delay=".1s">
						<div class="ajax-hidden">
							<h2>Archivo Historico regional del Boyacá</h2>
							<br>
							<div class="col-xs-6 col-sm-12 col-md-1 col-sm-offset-3 wow fadeInUp animated">
								<a class="wow fadeInUp animated" href=""><i class="fa fa-facebook"></i></a>	
							</div>
							<div class="col-xs-6 col-sm-12 col-md-8 wow fadeInUp animated">
								<label for="c_name" >Archivo Historico de Boyacá</label>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-1 col-sm-offset-3 wow fadeInUp animated">
								<a data-wow-delay=".2s" class="wow fadeInUp animated" href="index.html#"><i class="fa fa-envelope"></i></a>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-8 wow fadeInUp animated">
								<label for="c_name" >archivo.historico@gmail.com</label>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-1 col-sm-offset-3 wow fadeInUp animated">
								<a data-wow-delay=".1s" class="wow fadeInUp animated" href="https://wa.me/573101234567"><i class="fa fa-whatsapp"></i></a>	
							</div>
							<div class="col-xs-6 col-sm-6 col-md-8 wow fadeInUp animated">
								<label for="c_name" >+57 3101234567</label>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-1 col-sm-offset-3 wow fadeInUp animated">
								<a data-wow-delay=".1s" class="wow fadeInUp animated" href=""><i class="fa fa-phone"></i></a>	
							</div>
							<div class="col-xs-6 col-sm-6 col-md-8 wow fadeInUp animated">
								<label for="c_name" >3101234567</label>
							</div>
						</div>
						
	
				</div>
				<div class="col-xs-12 col-sm-8 col-md-8 wow bounceIn animated" data-wow-delay=".1s">
						<form action="#" method="post">
							<div class="ajax-hidden">
								<div class="col-xs-6 col-sm-6 col-md-6 form-group wow fadeInUp animated">
									<label for="c_name" class="sr-only">Nombre</label>
									<input type="text" placeholder="Nombre" name="name" class="form-control" id="name" required="">
								</div>
		
								<div data-wow-delay=".1s" class="col-xs-6 col-sm-6 col-md-6 form-group wow fadeInUp animated">
									<label for="c_email" class="sr-only">Correo electronico</label>
									<input type="email" placeholder="Correo electronico" name="email" class="form-control" id="email" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" placeholder="e.g. info@envato.com" required="">
								</div>
		
								<div data-wow-delay=".2s" class="col-xs-6 col-sm-12 col-md-12 form-group wow fadeInUp animated">
									<textarea placeholder="Mensaje" rows="7" name="description" id="description" class="form-control" required=""></textarea>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6 form-group wow fadeInUp animated">
									<label for="c_cellphone" class="sr-only">telefono</label>
									<input type="text" placeholder="Telefono" name="number" class="form-control" id="number" required="">
								</div>
								<button data-wow-delay=".3s" class="btn btn-sm btn-block wow fadeInUp animated" type="submit">Enviar mensaje</button>
							</div>
							<div class="ajax-response"></div>
						</form>
					</div> 
				</div>              
			
			</div><!-- =============== container end =============== -->
		</section>
		<section id="map" class="">
			<div class="row">
				
				<div class="col-xs-12 col-sm-3 col-md-3 col-sm-offset-1 wow bounceIn animated" style="text-align: center;background-color: #27AE60; border-radius: 10px;" data-wow-delay=".1s">
					<h2>Visitanos</h2>
					<h3>Para nosotros es un placer ayudarte, puedes visistar nuestras instalaciones</h1>
					<h3>Tunja, Boyacá, Colombia</h1>
					<h3>Calle 20 No. 9 - 90 Casa de la Torre</h1>
				</div>
				<div class="col-xs-12 col-sm-8 col-md-8 wow bounceIn animated" data-wow-delay=".1s">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.229214695234!2d-73.36166732254785!3d5.53297976519331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6a7c2d2185b0f1%3A0xde3a81a2fddeac4c!2sCl.%2020%20%239-90%2C%20Tunja%2C%20Boyac%C3%A1!5e0!3m2!1ses!2sco!4v1645411201217!5m2!1ses!2sco" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>
		</section>
		<section id="team" class="">
			<!-- =============== container =============== -->
			<div class="container">            
				<div class="row">
					<div class="title">
					<h2>Equipo de desarrollo</h2>
					<p>Aqui podras encontrar una manera de contactar a los miembros del equipo</p>
					</div>
					<div class="col-sm-2 col-sm-offset-1 wow fadeInDown animated" data-wow-delay=".1s">
					   <div class="timg"><img class="timgAuthor" src="assets/img/team/team-cristina.jpg"/></div>
						<div class="t-box">
					   <h3>Yulieth Cristina Hu&eacute;rfano P&eacute;rez</h3>
					   <span>Scrum Master</span>
					   <ul class="social-links">
							<li><a class="wow fadeInUp animated" href="https://www.instagram.com/cristina_huerfano/"><i class="fa fa-instagram"></i></a></li>
							<li><a data-wow-delay=".1s" class="wow fadeInUp animated" href="https://wa.me/573209335957"><i class="fa fa-whatsapp"></i></a></li>
							<li><a data-wow-delay=".2s" class="wow fadeInUp animated" href="index.html#"><i class="fa fa-envelope"></i></a></li>
						</ul>
					   </div>
					  </div>
					  <div class="col-sm-2 wow fadeInUp animated" data-wow-delay=".2s">
						<div class="timg"><img class="timgAuthor" src="assets/img/team/team-vale.jpeg"/></div>
					   <div class="t-box">
					   <h3>Erika Valentina Tinjaca Cely</h3>
					   <span>Desarrolladora FrontEnd</span>
					   <ul class="social-links">
						<li><a class="wow fadeInUp animated" href="https://www.instagram.com/valtinjaca/"><i class="fa fa-instagram"></i></a></li>
						<li><a data-wow-delay=".1s" class="wow fadeInUp animated" href="https://wa.me/573132444663"><i class="fa fa-whatsapp"></i></a></li>
						<li><a data-wow-delay=".2s" class="wow fadeInUp animated" href="index.html#"><i class="fa fa-envelope"></i></a></li>
						</ul>
					   </div>				   
					  </div>
					  <div class="col-sm-2 wow fadeInDown animated" data-wow-delay=".3s">
						<div class="timg"><img class="timgAuthor" src="assets/img/team/team-carlos.jpg"/></div>
					   <div class="t-box">
					   <h3>Carlos Alberto Salamanca Sanchez</h3>
					   <span>Desarrollador Backend</span>
					   <ul class="social-links">
						<li><a class="wow fadeInUp animated" href="https://www.instagram.com/carlos_s1007/"><i class="fa fa-instagram"></i></a></li>
							<li><a data-wow-delay=".1s" class="wow fadeInUp animated" href="https://wa.me/573219581504"><i class="fa fa-whatsapp"></i></a></li>
							<li><a data-wow-delay=".2s" class="wow fadeInUp animated" href="index.html#"><i class="fa fa-envelope"></i></a></li>
						</ul>
					   </div>
					  </div> 
					  <div class="col-sm-2 wow fadeInUp animated" data-wow-delay=".4s">
						<div class="timg"><img class="timgAuthor" src="assets/img/team/team-john.jpg"/></div>
						<div class="t-box">
					   <h3>Jhon Henry Granados Salamanca</h3>
					   <span>Tester</span>
					   <ul class="social-links">
						<li><a class="wow fadeInUp animated" href="https://www.instagram.com/jhonhenry.granadossalamanca/"><i class="fa fa-instagram"></i></a></li>
							<li><a data-wow-delay=".1s" class="wow fadeInUp animated" href="https://wa.me/573168467802"><i class="fa fa-whatsapp"></i></a></li>
							<li><a data-wow-delay=".2s" class="wow fadeInUp animated" href="index.html#"><i class="fa fa-envelope"></i></a></li>
						</ul>
						   </div>
						  </div>
						  <div class="col-sm-2 wow fadeInUp animated" data-wow-delay=".2s">
						<div class="timg"><img class="timgAuthor" src="assets/img/team/team-jhon.jpeg"/></div>
						   <div class="t-box">
						  <h3>Jhon Sebastian Aparicio Mesa</h3>
						   <span>Administrador de bases de datos</span>
						   <ul class="social-links">
							<li><a class="wow fadeInUp animated" href="https://www.instagram.com/_jhon_aparicio/"><i class="fa fa-instagram"></i></a></li>
							<li><a data-wow-delay=".1s" class="wow fadeInUp animated" href="https://wa.me/573162381501"><i class="fa fa-whatsapp"></i></a></li>
							<li><a data-wow-delay=".2s" class="wow fadeInUp animated" href="index.html#"><i class="fa fa-envelope"></i></a></li>
						</ul>
						   </div>				   
						  </div>                 
					</div>
				</div>
			</div>   
			<!-- =============== container end =============== -->		
		</section>	
		<!-- Footer -->
		<footer id="footer">
		<!-- =============== container =============== -->
		<div class="container">
					<div class="row">
					<div class="col-12">
	
						<ul class="social-links">
							<li><a class="wow fadeInUp animated" href="index.html#" style="visibility: visible; animation-name: fadeInUp;" title="facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a data-wow-delay=".1s" class="wow fadeInUp animated" href="https://www.boyaca.gov.co/" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;" title="Gorbernaci&oacute;n de Boyac&aacute;"><img src="assets/img/footer/gobernacion.png"></i></a></li>
							<li><a data-wow-delay=".2s" class="wow fadeInUp animated" href="https://academia-boyacense-de-historia.webnode.es/" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;" title="Academia de historia de Boyac&aacute;"><img src="assets/img/footer/academia.png"></i></a></li>
							<li><a data-wow-delay=".4s" class="wow fadeInUp animated" href="https://www.uptc.edu.co/sitio/portal/" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;" title="UPTC"><img src="assets/img/footer/uptc.png"></i></a></li>
							<li><a data-wow-delay=".5s" class="wow fadeInUp animated" href="https://www.banrep.gov.co/" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;" title="banco de la rep&uacute;blica"><img src="assets/img/footer/banrep.png"></i></a></li>
						</ul>
	
						<p class="copyright">
							&copy; 2016 Be. Created By <a href="http://templatestock.co">Template Stock</a>
						</p>
	
					</div>
			
				</div>
		</div><!-- =============== container end =============== -->
		</footer> 
	<!-- =============== jQuery =============== -->
    <script src="assets/js/jquery.js"></script>
	 <script src="assets/js/isotope-docs.min.js"></script>
    <!-- =============== Bootstrap Core JavaScript =============== -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- =============== Plugin JavaScript =============== -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.fittext.js"></script>
    <script src="assets/js/wow.min.js"></script> 
	<!-- =============== owl carousel =============== -->
    <script src="assets/owl-carousel/owl.carousel.js"></script>  
	<!-- Isotope does NOT require jQuery. But it does make things easier -->

<script src="assets/js/baguetteBox.js" async></script>
<script src="assets/js/plugins.js" async></script>
 
    <!-- =============== Custom Theme JavaScript =============== -->
    <script src="assets/js/creative.js">	</script> 
<script src="assets/js/jquery.nicescroll.min.js"></script>

<script>
  $(document).ready(function() {
  
	var nice = $("html").niceScroll();  // The document page (body)
	
	$("#div1").html($("#div1").html()+' '+nice.version);
    
    $("#boxscroll").niceScroll({cursorborder:"",cursorcolor:"#00F",boxzoom:true}); // First scrollable DIV

    $("#boxscroll2").niceScroll("#contentscroll2",{cursorcolor:"#F00",cursoropacitymax:0.7,boxzoom:true,touchbehavior:true});  // Second scrollable DIV
    $("#boxframe").niceScroll("#boxscroll3",{cursorcolor:"#0F0",cursoropacitymax:0.7,boxzoom:true,touchbehavior:true});  // This is an IFrame (iPad compatible)
	
    $("#boxscroll4").niceScroll("#boxscroll4 .wrapper",{boxzoom:true});  // hw acceleration enabled when using wrapper
    
  });
</script>
<script>
window.onload = function() {
    if(typeof oldIE === 'undefined' && Object.keys)
        hljs.initHighlighting();

    baguetteBox.run('.baguetteBoxOne');
    baguetteBox.run('.baguetteBoxTwo');
    baguetteBox.run('.baguetteBoxThree', {
        animation: 'fadeIn'
    });
    baguetteBox.run('.baguetteBoxFour', {
        buttons: false
    });
    baguetteBox.run('.baguetteBoxFive', {
        captions: function(element) {
            return element.getElementsByTagName('img')[0].alt;
        }
    });
};
</script>
</body>
</html>

