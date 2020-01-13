<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CASA ANDINA</title>
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
                <p>Pasalo a lo grande </p>
                <h1>La Semana<br>Santa con Casa<br>Andina</h1>
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
    </div>
    <?php
    require_once "stripe-php/init.php";
    //iniciar sesión
    $idProducto = $_GET['id'];
    $_SESSION["idProducto"]=$idProducto;
    //Recuperar los detalles del producto por cobrar
    require "datoscomprar.php";
    $nombre=$_SESSION["nombreP"];
    $precio=$_SESSION["precioP"];
    $categoria=$_SESSION["categoriaP"];
    $lugar=$_SESSION["lugarP"];
    $descripcion=$_SESSION["descripcionP"];
    $piso=$_SESSION["pisoP"];
    $numero=$_SESSION["numeroP"];
    $imagen=$_SESSION["imagenP"];

    echo '<br><br><div class="container" style="background: #F8F8F8">
            <div style="position: relative;float: left;">
                <img style="width: 560px; height: 380px;" src="files/'.$imagen.'">
            </div>
            <div style="position: relative;float: right;width: 550px; height: 380px;">
                <h1 style="text-align: center;">HOTEL CASA ANDINA DE</h1>
                <h2 style="text-align: center;">'. $lugar.'</h2>
                <h2 style="text-align: center;">'. $nombre.'</h2>
                <p>'. $descripcion.'</p>
                <h3 style="text-align: center;">PRECIO : '. $precio.'</h3>
                <h3 style="text-align: center;"> NUMERO DE HABITACIÓN : '. $numero.'</h3>
                <h3 style="text-align: center;">NIVEL DE PISO : '. $piso.'</h3>
            </div>
            <h4 style="text-align: center;">DATOS DE SUS RESERVA DE HABITACION EN HOTEL CASA ANDINA</h4>
        </div>';
    ?>
    <div class="container" style="background: #fff">
        <div class="carachotel">
        </div>
        <div class="navmenu">
            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">VERANO 2020</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">FLEXIBLE</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">PAGO EN HOTEL</a>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">Tarifa incluye desayuno buffet y WI FI. Promoción válida para reservar y alojarse del 02 Enero al 31 Marzo 2020. No es posible modificar o anular la reserva. Sujeto a disponibilidad.</div>
              <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">Permite cambio de fechas hasta 15 días previos a la fecha del check in. Por favor tenga en cuenta que en caso la tarifa de la nueva fecha es mayor, se deberá para la diferencia.</div>
              <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">Cancelación gratuita hasta 2 días previos al ingreso.</div>
            </div>
            <div>
                <li>PRECIO ESTÁ SUJETO A UN 10% DE CARGO POR SERVICIOS. PERSONAS DOMICILIADAS EN PERÚ ESTARÁN SUJETAS AL PAGO DEL 18% DE IGV</li>
                <li>PAGO EN EL HOTEL</li>
                <li>CANCELACIÓN GRATIS HASTA EL 10/03/2020!</li>
            </div>
            <div class="cena">
                <nav class="nav">
                  <h2 style="position: relative;float: left;color: blue;">Alojamiento y Desayuno Buffet</h2>
                  <?php
                  echo '<h2 style="position: absolute;float: right;color: red;right: 20px;margin: 0px 100px 0px 0px">PRECIO: S/. '. $precio.'</h2>';
                  ?>
                </nav>
            </div>
        </div>
        <div class="barramenu" style="background: #000;">
            <div class="div1" style="position: relative;float:  left;padding: 20px 100px;"><i class="fa fa-bed"></i>HABITACIONES</div>
            <div class="div2" style="position: relative;float: left;padding: 20px 100px;"><i class="fas fa-edit"></i>DATOS</div>
            <div class="div3" style="position: relative;float:  right;padding: 20px 100px;"><i class="far fa-check-circle"></i>CONFIRMACION</div>
        </div>
        <div class="condiydats">
            <div class="condi" style="padding: 3px; background: #222; color: #fff">
                <H3 style="text-align: center;">CONDICIONES DE LA RESERVA</H3><p style="text-align: justify;padding: 3px;">
Habitación Superior Matrimonial (VERANO 2020 - Alojamiento y Desayuno Buffet)
En el proceso de la reserva se aplicará un 10% adicional a la tarifa inicial correspondiente al cargo por servicios. Las personas domiciliadas en el Perú estarán sujetas al pago del 18% del Impuesto General a las Ventas (IGV) al momento de realizar su Check-In en el Hotel, de acuerdo a la legislación peruana.

Impuesto Peruano General a las Ventas 18% (IGV):

1.Peruanos y domiciliados en el país son afectos al cobro de este impuesto
2.Extranjeros que permanezcan menos de 60 días en el país son exonerados. Es indispensable presentar la Tarjeta Andina de Migraciones y el pasaporte original con el sello de ingreso al país al check in para esta exoneración.
3.En caso una habitación sea ocupada por huéspedes afectos y no afectos, se carga el IGV a todo el servicio.
4.El 18% correspondiente al impuesto general a las ventas (IGV) no está incluido en la tarifa y no se adicionará en la confirmación; dicho impuesto deberá ser pagado directamente en el hotel al momento del check-in.

Cargo por Servicio de Alojamiento (Impuesto incluido en la confirmación de reserva)

Se cargará la tarifa neta total más el 10% correspondiente al cargo por servicio de alojamiento al momento de realizarse la reserva. Esta tarifa no permite cancelaciones, ni modificaciones y será cobrada al 100% en caso de no presentación.

Somos Dog Friendly. Las reservas se deben solicitar de preferencia con al menos dos días hábiles de anticipación. Consulte el costo y nuestras “Políticas de Admisión y Cuidado de Mascotas” llamando a la central de reservas +51 1 3916500 o escribiendo un correo con tu código de reserva a reservasonline@casa-andina.com.

El desayuno buffet de niños no está incluido en la tarifa final de su reserva. El cobro de los desayunos buffet por cada niño se realizará de la siguiente manera:
- De 0 a 7 años no se cobrará.
- De 8 a 12 se cobrará tarifa niño: US$ 4.69 dólares americanos en Categoría Select, US$ 3.13 en categoría Standard y US$ 6.25 en categoría Premium.

Niños mayores a 13 años se consideran como adultos y el cobro se realizará de la siguiente manera:
- De 13 años hacía adelante se cobrará tarifa adulto: US$ 9.38 dólares americanos. en Categoría Select, US$ 6.25 en categoría Standard y US$ 12.5 en categoría Premium.
- Los precios no incluyen impuestos (18%) ni servicios (10%).
</p>
            </div>
            <div class="datospers" style="padding: 3px; background: #F8F8F8">
                <h2 style="text-align: center;padding: 3px">DATOS DEL HUÉSPED</h2>
                <label>Nombre (obligatorio)</label>
                <input type="text" name="nomb" required><br>
                <label>Apellidos (obligatorio)</label>
                <input type="text" name="ap" required><br>
                <label>Correo electrónico (obligatorio)</label>
                <input type="e-mail" name="correo" required><br>
                <label>Confirma correo electrónico (obligatorio)</label>
                <input type="email" name="correo" required><br>
                <label>PAIS</label>
                <SELECT>
                    <OPTION>ESTADOS UNIDOS</OPTION>
                    <OPTION>PERU</OPTION>
                    <OPTION>PERU</OPTION>
                    <OPTION>PERU</OPTION>
                </SELECT>
                <label>celular</label>
                <input type="number" name=""><br>
                <label>COMENTARIOS</label><br>
                <textarea name="comentarios" rows="10" cols="40">aqui comentarios</textarea><br>
                <label>HORA DE LLEGADA</label>
                <input type="number" name="">
                <input type="number" name=""><br>
                <label>HORA DE  SALIDA </label>
                <input type="number" name="">
                <input type="number" name=""><br>
                <h3 >DATOS DE PAGO</h3>
                <p>Pago con Tarjeta de crédito Seleccione CONFIRMAR RESERVA para proceder al pago. Si el pago no se llega a completar mantendremos tu reserva como pendiente por confirmar por 24 horas. Luego de ese tiempo, si la reserva no se ha pagado, la misma será cancelada Paga ahora el 100%: (103.18 USD$).
                </p>
                <input type="checkbox" name=""> Quiero recibir información comercial <br>
                <input type="checkbox" name=""> He leído y acepto las condiciones generales y la política de privacidad<br>
                <script>
                        var productosJSON;
                                valor = productosJSON[clave];
                                stripeCad = 
                                '<form action="stripeCargo.php?id='+clave+'" method="POST">'+
                                    '<script src="https://checkout.stripe.com/checkout.js" class="stripe-button"'+
                                    'data-key="pk_test_3LrzBSH56EVOak7xZ7TSaA2M00n9VJsCDX"'+
                                    'data-amount="'+valor["precio"]*100+'"'+
                                    'data-name="'+valor["nombre"]+'"'+
                                    'data-description="Widget"'+
                                    'data-image="https://stripe.com/img/documentation/checkout/marketplace.png"'+
                                    'data-locale="auto"'+
                                    'data-zip-code="true"/>'+
                                '</form>';
                        '<div class="card-body text-right">'+
                            stripeCad +
                        '</div>';
                    </script>
            </div>
        </div>
    </div>
<script src="js/index.js"></script>
<script src="js/calendarioMostrar.js"></script>
<script src="js/formulario.js"></script>
</body>
</html>