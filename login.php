<!DOCTYPE html>
<html lang="es" class="no-js">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="css/animate.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap CSS -->
    <link href="css/style_1.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" href="images\favicon.png" type="image/png" sizes="32x32">

</head>

<!-- Logo y menú -->

<body>
    <div class="container-fluid fh5co_header_bg">
        <div class="container">
            <div class="row">
                <div class="col-12 fh5co_mediya_center"><a href="#" class="color_fff fh5co_mediya_setting"><i
                            class="fa fa-clock-o"></i>
                        <script>
                            var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
                            var diasSemana = new Array(" Domingo", " Lunes", " Martes", " Miércoles", " Jueves", " Viernes", " Sábado");
                            var f = new Date();
                            document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                        </script>
                    </a>

                </div>

            </div>
        </div>
    </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3 fh5co_padding_menu">
                    <br><br>
                    <img src="images/Logobuenasnuevas 150px.png" alt="img" sizes="100%"; width="600px"/>
                </div>
                <div class="col-12 col-md-9 align-self-center fh5co_mediya_right">
                    <div class="text-center d-inline-block">
                    </div>
                    <div class="text-center d-inline-block">
                        <a href="formulario.html" class="fh5co_display_table">
                            <div class="fh5co_verticle_middle"><img src="images\Suscribirseanimado2.gif" width="250px"
                                    back alt="suscribete">
                                    
                        </a>
                    </div>
                    <div class="text-center d-inline-block">
                        <a href="login.php" class="fh5co_display_table">
                            <div class="fh5co_verticle_middle"><i class="fa fa-user-circle"></i></div>   
                        </a>
                    </div>
                    <div class="text-center d-inline-block">
                        <a href="https://www.instagram.com/" target="_blank" class="fh5co_display_table">
                            <div class="fh5co_verticle_middle"><i class="fa fa-instagram"></i></div>
                        </a>
                    </div>
                    <div class="text-center d-inline-block">
                        <a href="https://mail.google.com/" target="_blank" class="fh5co_display_table">
                            <div class="fh5co_verticle_middle"><i class="fa fa-envelope"></i></div>
                        </a>
                    </div>

                    <div class="text-center d-inline-block">
                        <a href="https://twitter.com/" target="_blank" class="fh5co_display_table">
                            <div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div>
                        </a>
                    </div>
                    <div class="text-center d-inline-block">
                        <a href="https://www.facebook.com/ipet416/" target="_blank" class="fh5co_display_table">
                            <div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div>
                        </a>

                        </li>
                    </div>


                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
        <div class="container padding_786">
            <nav class="navbar navbar-toggleable-md navbar-light ">
                <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse"
                    data-target="navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                
                
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="single.html">Editorial <span
                                        class="sr-only">(current)</span></a>
                            </li>

                           
                            <li class="nav-item ">
                                <a class="nav-link" href="ContactosEscuela.html">Contacto <span
                                        class="sr-only">(current)</span></a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link" href="integrantes.html">Sobre Nosotros <span
                                        class="sr-only">(current)</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
        </div>
    </div>
    
    <section>

        <div id="Contenedor">
            <div class="Icon">
                <!--Icono de usuario-->
                <span class="glyphicon glyphicon-user"></span>
            </div>
            <div class="ContentForm">

                <form action="bienvenidaLogin.php" method="post" name="FormEntrar">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon1"><i
                                class="glyphicon glyphicon-envelope"></i></span>
                        <input type="email" class="form-control" name="correo" placeholder="Correo" id="Correo"
                            aria-describedby="sizing-addon1" required>
                    </div>
                    <br>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="**"
                            aria-describedby="sizing-addon1" required>
                    </div>
                    <br>
                    <button class="btn btn-lg btn-primary btn-block btn-signin" id="IngresoLog"
                        type="submit">Entrar</button>
                    <div class="opcioncontra"><a href="formulario.html">Si no esta Registrado Presione aqui!!</a></div>
    
                </form>


            



                
    
                <!-- vinculando a libreria Jquery-->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                <!-- Libreria java scritp de bootstrap -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
                    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
                    crossorigin="anonymous"></script>

                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
                    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
                <!-- Temas-->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
                    integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
                <!-- se vincula al hoja de estilo para definir el aspecto del formulario de login-->
                <link rel="stylesheet" type="text/css" href="/css/login.css">
                
    
            </div> 
    </section>
    <footer>
        <div class="container-fluid fh5co_footer_bg pb-3">
            <div class="container animate-box">
                <div class="row">
                    <div class="col-12 spdp_right py-5"><img src="images/logoperiodicoblanco.png" alt="img"
                            class="footer_logo" /></div>
                    <div class="clearfix"></div>
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="footer_main_title py-3"> El porqué de este periódico</div>
                        <div class="footer_sub_about pb-3">
                            <h6>El periódico escolar dinamiza el proceso educativo.</H6>
                            <p>Pone en práctica actividades que catalizan lúdicamente la enseñanza, despierta el interés por
                                aprender, al estimular la lectura y la escritura.
                            </p>
                        </div>
                        
                    </div>
                    <div class="col-12 col-md-3 col-lg-2">
                        <div class="footer_main_title py-3"> Temas</div>
                        <ul class="footer_menu">
                            <li><a href="single.html" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Editoriales</a>
                            </li>
                            <li><a href="trabajoinformal.html" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; 
                                Textos Escolares y Periodísticos</a>
                            </li>
                            <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Relatos de Cuarentena</a>
                            </li>
                            <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Reseñas de Cuarentena</a>
                            </li>
                            <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Historias de
                                    Cuarentena</a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-12 col-md-5 col-lg-3 position_footer_relative">
                        <div class="footer_main_title py-3"> Más Vistas</div>
                        <div class="footer_makes_sub_font"> AGOSTO 2021</div>
                        <a href="Egresados2020.html" class="footer_post pb-4"> EGRESADOS 2020</a>
                        <div class="footer_makes_sub_font"> OCTUBRE 2020</div>
                        <a href="Sembrandoencasa.html" class="footer_post pb-4"> SEMBRANDO EN CASA</a>
                        <div class="footer_makes_sub_font"> OCTUBRE 2020</div>
                        <a href="Trabajoinformal.html" class="footer_post pb-4"> EL TRABAJO FORMAL E INFORMAL</a>
                        <div class="footer_position_absolute"><img src="images/footer_sub_tipik.png" alt="img"
                                class="width_footer_sub_img" /></div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4 ">
                        <div class="footer_main_title py-3"> Últimas Publicaciones</div>
                        <a href="Nosencontramosentubarrio.html" class="footer_img_post_6"><img src="images/Nosencontramosentubarrio.png" alt="img" /></a>
                        <a href="Egresados2020.html" class="footer_img_post_6"><img src="images/egresado2020 2.png" alt="img" /></a>
                        <a href="globalizacion.html" class="footer_img_post_6"><img src="images/globalizacioncompleta.png" alt="img" /></a>
                        <a href="Trabajoinformal.html" class="footer_img_post_6"><img src="images/trabajoinformal.png" alt="img" /></a>
                        <a href="Alertacoronavirus.html" class="footer_img_post_6"><img src="images/alertacoronavirus 1.jpg" alt="img" /></a>
                        <a href="Sembrandoencasa.html" class="footer_img_post_6"><img src="images/sembrandoencasa1.png" alt="img" /></a>
                        <a href="single.html" class="footer_img_post_6"><img src="images/logo escuela.png" alt="img" /></a>
                        <a href="Homenaje.html" class="footer_img_post_6"><img src="images/homenaje 2.png" alt="img" /></a>
                        <a href="Preceptor.html" class="footer_img_post_6"><img src="images/preceptor3.png" alt="img" /></a>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="container-fluid fh5co_footer_right_reserved">
            <div class="container">
                <div class="row  ">

                    <div class="col-12 col-md-6 spdp_right py-4">
                        <a href="index.html" class="footer_last_part_menu">Inicio</a>
                        <a href="single.html" class="footer_last_part_menu">Editorial</a>
                        <a href="login.php" class="footer_last_part_menu">Login</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
        </div>
    </footer>

    </div>
    </div>
    </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Main -->
    <script src="js/main.js"></script>

</body>

</html>