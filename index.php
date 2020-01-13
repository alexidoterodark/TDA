<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Hoteles Casa Andina</title>
	<script src="https://kit.fontawesome.com/dc5be4008e.js" crossorigin="anonymous"></script>
    <link href="https://kit-pro.fontawesome.com/releases/v5.11.2/css/pro.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/line-awesome.min.css">
	<script src="js/all.js"></script>
	<link rel="stylesheet" href="bootstrap-411/css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<link rel="icon" type="image/png" href="files/icon.png">
</head>
<body>
	<header>
		<div class="header-fondo">	
			<video src="files/video.mp4" autoplay muted loop></video>
		</div>
		<nav class="menu flex jcsa aic">
			<div class="menu-1 flex jcc aic">
				<a href="#" class="a"><u>RESERVAR</u></a>
				<a href="#" class="a">• DESTINOS</a>
				<a href="#" class="a">• NUESTROS HOTELES</a>				
				<a href="#" class="a">• PROMOCINES</a>
				<a href="#" class="a">• RESTAURANTES</a>
				<a href="#" class="a">• EVENTOS</a>
			</div>
			<div class="menu-2">
				<a href="#" class="phone"><i class="la la-phone"></i></a>
				<a href="#" class="user"><i class="la la-user"></i></a>				
				<li>Español <i id="ab" class="fal fa-angle-down fa-lg"></i></li>
                <li>PEN <i id="ab" class="fal fa-angle-down fa-lg"></i></li>
                
			</div>
		</nav>
		<div class="chat">
            <p id="chat"><i id="ab" class="fal fa-comment-lines fa-lg"></i><b>Chat</b></p>
        </div>
        <div class="LogoHotel">
            <div class="trapecio"></div>
            <p id="hotelca"><font size="4">CASA ANDINA</font></p>
            <p id="hotelca"><font size="1.5">HOTELES</font></p>
        </div>
		<div class="header-main flex jcc aic">
			<div class="bordes">
				<p>30 hoteles, 18 destinos</p>
				<h1>Descubre el<br>Perú con Casa<br>Andina</h1>
				<span class="borde-top-left"></span>
				<span class="borde-top-right"></span>
				<span class="borde-bottom-left"></span>
				<span class="borde-bottom-right"></span>
			</div>
			<div class="fecha flex jcc aic">
				<div class="controles-fecha flex aic jcc">
					<form action="hoteles.php" method="post" class="flex aic jcsb" name="form">
						<input type="text" list="destinos" spellcheck="off" placeholder="Ingrese su destino" class="destinos" name="destinos">
						<datalist id="destinos">
							<option value="Arequipa" class="destinosOp">
							<option value="Puno" class="destinosOp">
							<option value="Lima" class="destinosOp">
							<option value="Callao" class="destinosOp">
						</datalist>
						<div class="calendario flex aic jcsb">
							<div class="entrada">
								<p>Entrada</p>
								<div class="calendario-fecha flex aic jcsb">
									<p class="num-day e-num-day">02</p>
									<div class="fecha-md">
										<p class="mes e-mes">Abr. </p>
										<p class="anio e-anio">20</p>
										<p class="day e-day">Domingo</p>
									</div>
									<p class="btn-bot">▼</p>
								</div>
							</div>
							<input type="text" name="eNumDay" value="2" class="ocultarInput eNumDay">
							<input type="text" name="eMes" value="3" class="ocultarInput eMes">
							<input type="text" name="eAnio" value="4" class="ocultarInput eAnio">
							<input type="text" name="eDay" value="5" class="ocultarInput eDay">

							<input type="text" name="sNumDay" value="2" class="ocultarInput sNumDay">
							<input type="text" name="sMes" value="3" class="ocultarInput sMes">
							<input type="text" name="sAnio" value="4" class="ocultarInput sAnio">
							<input type="text" name="sDay" value="5" class="ocultarInput sDay">
							<div class="salida">
								<p>Salida</p>
								<div class="calendario-fecha flex aic jcsb">
									<p class="num-day s-num-day">03</p>
									<div class="fecha-md">
										<p class="mes s-mes">Dic. </p>
										<p class="anio s-anio">20</p>
										<p class="nombS">Lunes</p>
									</div>
									<p class="btn-bot">▼</p>
								</div>
							</div>
						</div>
						<input type="text" list="hoteles" placeholder="Ingrese hotel" class="hoteles" name="hoteles">
						<datalist id="hoteles">
							<option value="Hotel Paraiso" class="hotelesOp"></option>
							<option value="Hotel Nacional" class="hotelesOp"></option>
						</datalist>
						<input type="submit" value="BUSCAR" class="buscar">
					</form>
				</div>
			</div>
		</div>
	</header>
	<div class="servicios flex jcc aic">
		<div class="destacado flex aic jsb">
			<i class="la la-bed"></i>
			<div>
				<span>30</span>
				<span><strong>Hoteles</strong></span>
			</div>
		</div>
		<div class="destacado flex aic jsb">
			<i class="la la-compass"></i>
			<div>
				<span>18</span>
				<span><strong>Destinos</strong></span>
			</div>
		</div>
		<div class="destacado flex aic jsb">
			<i class="la la-cutlery"></i>
			<div>
				<span>31</span>
				<span><strong>Restaurantes</strong></span>
			</div>
		</div>
		<div class="destacado flex aic jsb">
			<i class="la la-hand-peace-o"></i>
			<div>
				<span>Hospitalidad</span>
				<span><strong>Peruana</strong></span>
			</div>
		</div>
		<div class="destacado flex aic jsb">
			<i class="la la-map-marker"></i>
			<div>
				<span>Excelente</span>
				<span><strong>Ubicación</strong></span>
			</div>
		</div>
	</div>
	<div class="preguntaxkca">
		<p>———●</p>
	</div>
	<div class="xkcasaA">
		<h1>¿Por qué Casa Andina?</h1>
		<div class="xkcar"></div>
		<p class="rptaxkca">Somos una cadena hotelera peruana fundada en febrero de 2003, enfocada en proporcionar a nuestros huéspedes una experiencia de viaje que supere sus expectativas. Integramos las particularidades de cada destino donde nos encontramos desde arquitectura, decoración, gastronomía, actividades y música, ofreciendo así a nuestros visitantes una experiencia de viaje única.</p>
		<h5><a href="" style="color: #D69C4F;">SABER MAS ——>»</a></h5>
		<div class="d-flex flex-wrap mt-2"><!--bindings={
		  "ng-reflect-ng-if": "https://s3.us-east-1.amazonaws"
			}--><ca-award ng-reflect-path="https://s3.us-east-1.amazonaws"><div class="m-1 g-w-80 text-center"><img alt="" class="g-img-fluid" src="https://s3.us-east-1.amazonaws.com/multimediaqa.casa-andina.com/icons/100X100_WPA.png"></div></ca-award><!--bindings={
			  "ng-reflect-ng-if": "https://s3.us-east-1.amazonaws"
			}--><ca-award ng-reflect-path="https://s3.us-east-1.amazonaws"><div class="m-1 g-w-80 text-center"><img alt="" class="g-img-fluid" src="https://s3.us-east-1.amazonaws.com/multimediaqa.casa-andina.com/icons/100X100_100x100tripadvisor.png"></div></ca-award><!--bindings={
			  "ng-reflect-ng-if": "https://s3.us-east-1.amazonaws"
			}--><ca-award ng-reflect-path="https://s3.us-east-1.amazonaws"><div class="m-1 g-w-80 text-center"><img alt="" class="g-img-fluid" src="https://s3.us-east-1.amazonaws.com/multimediaqa.casa-andina.com/icons/100X100_certificadoexcelentetripadvisor.png"></div></ca-award><!--bindings={}-->
		</div>
	</div>
	<div class="xkca">
		<img src="files/xkca.jpeg">
	</div>
	<div class="trapecioimg">
		<img class="why-ca-geometric-img" src="https://s3.us-east-1.amazonaws.com/multimediaqa.casa-andina.com/system/images/567X260_casa-andina-peru-hoteles-en-arequipa-select-arequipa-2-2000-x-644-trapecio.png" alt="">
	</div>
	<div class="bene"><p>——●</p></div>
	<div class="beneficios">
		<form>
			<fieldset class="grupo">
				<legend class="leyenda"><h2>Beneficios de reservar en línea</h2></legend>
				<div class="listarbene"><i class="la la-cutlery" ></i><p>10% dcto. <br>en nuestros restaurantes</p></div>
				<div class="listarbene"><i class="la la-glass"></i><p>Bebida de cortesía</p></div>
				<div class="listarbene"><i class="la la-calendar-check-o"></i><p>Flexibilidad</p></div>
				<div class="listarbene"><i class="la la-bed" ></i><p>Tarifa Preferente</p></div>
			</fieldset>
		</form>
			<h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" style="color: #D69C4F;">BENEFICIOS EXCLUSIVOS RESERVANDO EN NUESTRA WEB →
				</a>
			</h6>
	</div>
	<div class="carrusells">
		<div class="biñetah1">
			<p>——●</p>
			<h1>Oportunidades para aventurarte</h1>
		</div>
		<div class="cambiari">
			<form>
				<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
				    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
				    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
				    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
				    <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
				    <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
				    <li data-target="#carouselExampleCaptions" data-slide-to="6"></li>
				    <li data-target="#carouselExampleCaptions" data-slide-to="7"></li>
				    <li data-target="#carouselExampleCaptions" data-slide-to="8"></li>
				    <li data-target="#carouselExampleCaptions" data-slide-to="9"></li>
				  </ol>
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img src="files/a6.jpg" class="d-block w-100" alt="...">
				      <div class="carousel-caption d-none d-md-block">
				        <h1>APROVECHA EL DESCUENTO DE $35 PARA TU PRIMERA COMPRA</h1>
				        <h4>El mejor HOTEL del PERU con habitaciones de calidad y con los sevicios completos.</h4>
				      </div>
				    </div>
				    <div class="carousel-item">
				      <img src="files/oferta.jpg" class="d-block w-100" alt="...">
				      <div class="carousel-caption d-none d-md-block">
				        <h1>OFERTAS DE ULTIMO MINUTO</h1>
				        <h4>El mejor HOTEL del PERU con habitaciones de calidad y con los sevicios completos.</h4>
				      </div>
				    </div>
				    <div class="carousel-item">
				      <img src="files/a8.jpg" class="d-block w-100" alt="...">
				      <div class="carousel-caption d-none d-md-block">
				        <h1>COMPRA ANTICIPADA</h1>
				        <h4>El mejor HOTEL del PERU con habitaciones de calidad y con los sevicios completos.</h4>
				      </div>
				    </div>
				    <div class="carousel-item">
				      <img src="files/A10.jpg" class="d-block w-100" alt="...">
				      <div class="carousel-caption d-none d-md-block">
				        <h1>ESTADIA MINIMA 2 NOCHES</h1>
				        <h4>El mejor HOTEL del PERU con habitaciones de calidad y con los sevicios completos.</h4>
				      </div>
				    </div>
				    <div class="carousel-item">
				      <img src="files/a12.jpg" class="d-block w-100" alt="...">
				      <div class="carousel-caption d-none d-md-block">
				        <h1>ESTADIA MINIMA 3 NOCHES</h1>
				        <h4>El mejor HOTEL del PERU con habitaciones de calidad y con los sevicios completos.</h4>
				      </div>
				    </div>
				    <div class="carousel-item">
				      <img src="files/483.jpeg" class="d-block w-100" alt="...">
				      <div class="carousel-caption d-none d-md-block">
				        <h1>CAMAS DE CALIDAD</h1>
				        <h4>El mejor HOTEL del PERU con habitaciones de calidad y con los sevicios completos.</h4>
				      </div>
				    </div>
				    <div class="carousel-item">
				      <img src="files/a11.jpg" class="d-block w-100" alt="...">
				      <div class="carousel-caption d-none d-md-block">
				        <h1>PISCINA</h1>
				        <h4>El mejor HOTEL del PERU con habitaciones de calidad y con los sevicios completos.</h4>
				      </div>
				    </div>
				    <div class="carousel-item">
				      <img src="files/a13.jpg" class="d-block w-100" alt="...">
				      <div class="carousel-caption d-none d-md-block">
				        <h1>COMIDA Y BEBIDA</h1>
				        <h4>El mejor HOTEL del PERU con habitaciones de calidad y con los sevicios completos.</h4>
				      </div>
				    </div>
				    <div class="carousel-item">
				      <img src="files/a5.jpg" class="d-block w-100" alt="...">
				      <div class="carousel-caption d-none d-md-block">
				        <h1>EVENTOS</h1>
				        <h4>El mejor HOTEL del PERU con habitaciones de calidad y con los sevicios completos.</h4>
				      </div>
				    </div>
				    <div class="carousel-item">
				      <img src="files/a1.jpg" class="d-block w-100" alt="...">
				      <div class="carousel-caption d-none d-md-block">
				        <h1>NOSOTROS</h1>
				        <h4>El mejor HOTEL del PERU con habitaciones de calidad y con los sevicios completos.</h4>
				      </div>
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
				<div class="lisdatos">
					<button class="btn btn-success " style="position: relative;float: right; margin: 5px;"><a href="lista.html" target="_blank" style="color: #fff;">RESERVAR</a></button>
				</div>
			</form>
			<h6>
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" style="color: #D69C4F;">MÁS PROMOCIONES →
				</a>
			</h6>
			
		</div>
		<div class="webrs">
			<div class="RS">
				<h6 style="color: #fff;">REDES SOCIALES</h6>
				<div class="btn btn-dark btn-lg">
					<i style="color: #D69C4F;" class="fab fa-facebook"></i>
				</div>
				<div class="btn btn-dark btn-lg">
					<i style="color: #D69C4F;"class="fab fa-twitter"></i>
				</div>
				<div class="btn btn-dark btn-lg">
					<i style="color: #D69C4F;" class="fab fa-instagram"></i>
				</div>
				<div class="btn btn-dark btn-lg">
					<i style="color: #D69C4F;"class="fab fa-flickr"></i>
				</div>
				<div class="btn btn-dark btn-lg">
					<i style="color: #D69C4F;"class="fab fa-youtube"></i>
				</div>
			</div>			
			<div class="suscribirse">
				<h5 >Suscribirse</h5>
				<p>PERSONA</p>
				<input type="radio" name="persona" value="natural">Natural&nbsp;&nbsp;&nbsp;
				<input type="radio" name="persona" value="juridica">Juridica&nbsp;&nbsp;&nbsp;
				<input type="text" name="e-mail" placeholder="Ingrese su correo" class="correo">
				<button type="e-mail" class="btn btn-warning btn-sm"><a href="#" style="color: #fff;">ENVIAR</a></button>
			</div>
		</div>
	</div>
	<div class="mediospago">
		<div class="logocasa">
			<img alt="Logotipo de Casa Andina" class="lgcab" src="files/ca-brand-white.png">
		</div>
		<div class="logopagos">
			<div class="d-flex flex-wrap align-items-center">MEDIOS DE PAGO&nbsp;&nbsp;&nbsp;
				<img alt="" class="m-0-5 ng-star-inserted" src="https://s3.us-east-1.amazonaws.com/multimediaqa.casa-andina.com/icons/32X32_visa32x32.png">&nbsp;&nbsp;&nbsp;
				<img alt="" class="m-0-5 ng-star-inserted" src="https://s3.us-east-1.amazonaws.com/multimediaqa.casa-andina.com/icons/32X32_mastercard32x32.png">&nbsp;&nbsp;&nbsp;
				<img alt="" class="m-0-5 ng-star-inserted" src="https://s3.us-east-1.amazonaws.com/multimediaqa.casa-andina.com/icons/32X32_americanexpress32x32.png">&nbsp;&nbsp;&nbsp;
				<img alt="" class="m-0-5 ng-star-inserted" src="https://s3.us-east-1.amazonaws.com/multimediaqa.casa-andina.com/icons/32X32_dinersclub32x32.png">&nbsp;&nbsp;&nbsp;
			</div>
		</div>
	</div>
	<div class="saber">
		<p>________________________________________________________________________________________________________________________________________________________________________________</p>
		<div class="container">
			<table class="table table-borderless">
			  <thead>
			    <tr>
			      <th scope="col">CASA ANDINA <i id="ab" class="fal fa-angle-down fa-lg"></i></th>
			      <th scope="col">RESERVASIONES <i id="ab" class="fal fa-angle-down fa-lg"></i></th>
			      <th scope="col">ATENCIÓN AL CLIENTE <i id="ab" class="fal fa-angle-down fa-lg"></i></th>
			      <th scope="col">LLÁMANOS GRATIS <i id="ab" class="fal fa-angle-down fa-lg"></i></th>
			      <th scope="col">CONTÁCTANOS</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td style="margin: 0px;padding: 0px;" scope="row">Sobre nosotros</td>
			      <td style="margin: 0px;padding: 0px;">Central de Reservas:</td>
			      <td style="margin: 0px;padding: 0px;">Libro de reclamaciones</td>
			      <td style="margin: 0px;padding: 0px;">Provincias</td>
			      <td style="margin: 0px;padding: 0px;">Agencias de Viaje:</td>
			    </tr>
			    <tr>
			      <td style="margin: 0px;padding: 0px;"scope="row">Blog Viajes Casa Andina</td>
			      <td style="margin: 0px;padding: 0px;">+51 1 3916500</td>
			      <td style="margin: 0px;padding: 0px;">Solicitud de derechos arco</td>
			      <td style="margin: 0px;padding: 0px;">0 800 71899</td>
			      <td style="margin: 0px;padding: 0px;">+51 1 213 97 00 Anexo 3723</td>
			    </tr>
			    <tr>
			      <td style="margin: 0px;padding: 0px;"scope="row">Responsabilidad social</td>
			      <td style="margin: 0px;padding: 0px;">Correo de Reservas:</td>
			      <td style="margin: 0px;padding: 0px;">comprobantes Electrónicos</td>
			      <td style="margin: 0px;padding: 0px;">Canadá</td>
			      <td style="margin: 0px;padding: 0px;">agencias@casa-andina.com</td>
			    </tr>
			    <tr>
			      <td style="margin: 0px;padding: 0px;"scope="row">Contacto</td>
			      <td style="margin: 0px;padding: 0px;">cntrldrsrvas@casa-andina.com</td>
			      <td style="margin: 0px;padding: 0px;">Preguntas frecuentes</td>
			      <td style="margin: 0px;padding: 0px;">Chile</td>
			      <td style="margin: 0px;padding: 0px;">Eventos:</td>
			    </tr>
			    <tr>
			      <td style="margin: 0px;padding: 0px;"scope="row">Perro amigable</td>
			      <td style="margin: 0px;padding: 0px;"></td>
			      <td style="margin: 0px;padding: 0px;"></td>
			      <td style="margin: 0px;padding: 0px;">080 091 4123</td>
			      <td style="margin: 0px;padding: 0px;">+51 1 213 9700 </td>
			    </tr>
			    <tr>
			      <td style="margin: 0px;padding: 0px;"scope="row">Trabaja con nosotros</td>
			      <td style="margin: 0px;padding: 0px;"></td>
			      <td style="margin: 0px;padding: 0px;"></td>
			      <td style="margin: 0px;padding: 0px;">Ecuador</td>
			      <td style="margin: 0px;padding: 0px;">eventos@casa-andina.com</td>
			    </tr>
			    <tr>
			      <td style="margin: 0px;padding: 0px;"scope="row">Viajeros Auténticos</td>
			      <td style="margin: 0px;padding: 0px;"></td>
			      <td style="margin: 0px;padding: 0px;"></td>
			      <td style="margin: 0px;padding: 0px;">1 800 000 924</td>
			      <td style="margin: 0px;padding: 0px;">Empresas: +51 1 2139700</td>
			    </tr>
			  </tbody>
			</table>
		</div>
		<p>________________________________________________________________________________________________________________________________________________________________________________</p>
		
		<div class="container">
			<table class="table table-borderless">
			  <thead>
			    <trd>
			      <td scope="col">Términos y condiciones</td>
			      <td scope="col">◉ Política web de privacidad</td>
			      <td scope="col">◉ Memoria Anual SMV</td>
			      <td scope="col">◉ Hechos de Importancia SMV</td>
			      <td scope="col">◉ Información Financiera SMV</td>
			    </tr>
			  </thead>
			  <tbody>
			  </tbody>
			</table>
		</div>
		<p>________________________________________________________________________________________________________________________________________________________________________________</p>
		<div class="container">
			<p>Todos los derechos reservados - Casa Andina Hoteles</p>
			<h2 class="containero">Copyright © 2020 Percy Condori Yucra Rights Reserved.</h2>
		</div>
	</div>
	<i class="fas fa-wifi"></i>
	<i class="fas fa-phone-rotary"></i>
	<i class="fas fa-tv"></i>
	<i class="fas fa-air-conditioner"></i>
	<i class="fas fa-heat"></i>
	<i class="fad fa-box-alt"></i>
	<i class="fas fa-lamp-desk"></i>
	<i class="fas fa-shower"></i>
	<i class="fas fa-toilet"></i>
	<i class="fal fa-dryer"></i>
	
<script src="js/index.js"></script>
<script src="js/calendarioMostrar.js"></script>
<script src="js/formulario.js"></script>
</body>
</body>
</html>