<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>UT NEWS</title>
       
        <!--controla la composición en los navegadores móviles-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Compatibilidad con ExplorerEdge-->
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--Icono en la pestaña-->
        <link rel="icon" type="image/png" href="imagenes/logout.png">
        <!--Fuentes de google-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <!--CSS animacion de texto-->
        <link rel="stylesheet" href="CSS/animate.css"> 
        <!--CSS Fontawesome-->
        <link rel="stylesheet" href="CSS/fontawesome/css/all.css">
        <!--CSS Bootstrap -->
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <!--CSS Bootsnav(nabvars)-->
        <link rel="stylesheet" href="CSS/bootsnav.css">
        <!--CSS de la pagina-->
        <link rel="stylesheet" href="CSS/style.css">
    </head>
 
    <body>
        <header id="home" data-target=".navbar-collapse">
            <div class="culmn">   
                <!--Inicio navbar negra-->
                <nav class="navbar navbar-default bootsnav navbar-fixed">
                    <div class="navbar-top negra fix">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="imagenes/logo.png" width="120" height="40">
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                       
                                        <div class="navbar-socail  text-right sm-text-center float-right">
                                            <ul class="list-inline  navbar-right">
                                                <li><a href="https://www.facebook.com/UTNAY/"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="tel:3112119800"><i class="fa fa-phone"></i> (311)-211-9800</a></li>
                                                <li><a href="mailto:info@utnay.edu.mx"><i class="far fa-envelope"> </i> info@utnay.edu.mx</a></li>
                                                <li>
                                                    <?php 
                                                    if(!isset($_SESSION["usuario"])){?>
                                                        <a href="Login/login.php"><i class="fa fas fa-user"></i> Iniciar sesión</a>
                                                    <?php
                                                    }else{?>
                                                        <?php 
                                                        if($_SESSION["usuario"]["privilegio"] == 2){?>
                                                            <a href="Login/cerrar-sesion.php"><i class="fa fas fa-user"></i>
                                                                <span class="label label-default">
                                                                    <?php 
                                                                    echo $_SESSION["usuario"]["usuario"]; ?>
                                                                </span>
                                                            </a>
                                                        <?php
                                                        }else{?>
                                                            <a href="Dashboard/dashboard.php"><i class="fa fas fa-user"></i>
                                                                <span class="label label-default">
                                                                    <?php 
                                                                    echo $_SESSION["usuario"]["usuario"]; ?>
                                                                </span>
                                                            </a>
                                                        <?php
                                                        }?>
                                                    <?php
                                                    }?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <div class="container">
                        <!--Inicio navbar blanca-->
                        <div class="col-md-6">
                            <div class="navbar-header navbar-expand-lg fixed-top">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <a class="aling-center" href="index.php">
                                    <img src="imagenes/logout.png" class="logo" alt="" height="80" width="110">
                                </a>
                            </div>
                        </div>

                        <!-- Menu navbar-->
                        <div class="col-md-6">
                            <div class="collapse navbar-collapse" id="navbar-menu">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="#home">Inicio</a></li>
                                    <li><a href="#quienes-somos">¿Quienes somos?</a></li>
                                    <li><a href="#noticias">Noticias</a></li>
                                    <li><a href="#contact">Contacto</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- Fin de navbar blanca -->
                </nav><!-- Fin de navbar negra -->
                

                    
            </div>
        </header>
        <br><br><br><br><br>
        <section class="bg-black">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                       <div class="overlay"></div>
                        <img src="imagenes/img1.png" alt="" style="height: 550px;"> 
                        <div class="carousel-caption text-center">
                            <h1 class="text-white">Noticias al momento</h1>
                            <h3 class="text-white">Universidad Tecnológica de Nayarit</h3>
                        </div>
                    </div>

                    <div class="item">
                       <div class="overlay"></div>
                        <img src="imagenes/img1.png" alt="" style="height: 550px;">
                        <div class="carousel-caption">
                            <h3 class="text-white">Chicago</h3>
                            <p>Thank you, Chicago!</p>
                        </div>
                    </div>

                    <div class="item">
                       <div class="overlay"></div>
                        <img src="imagenes/img1.png" alt="" style="height: 550px;">
                        <div class="carousel-caption">
                            <h3 class="text-white">New York</h3>
                            <p>We love the Big Apple!</p>
                        </div>
                    </div>
                </div>
                
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section> 
        <!-- Fin de sección Slider -->
        
        <!-- Sección quienes somos-->
        <section id="quienes-somos" class="roomy-40">
           <div class="roomy-40" style="background-color: rgb(20,20,20)">
               <div class="container">
                   <div class="row">
                       <div class="col-md-12">
                           <h2 class="text-white">¿Quienes Somos?</h2>
                       </div>
                   </div>
               </div>
           </div>
           
            <div class="container">
                <div class="row">
                    <div class="fix roomy-60">
                       <div class="col-md-4">
                            <div class="items sm-m-top-30">
                                <div class="item_text text-center">
                                    <h2 class="page-subheading" style="border-bottom: 5px solid black;">Misión</h2>
                                    <div class="cardcolor card-text">
                                        <p class="text-justify">Formar profesionistas competitivos mediante programas de educación superior científicos tecnológicos, sutentados en un modelo integral y humanista, con un enfoque basado en competencias profesionales y con un sentido de innovación para el desarrollo sustentable del entorno.</p>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="items sm-m-top-30">
                                <div class="item_text text-center">
                                    <h2 class="page-subheading" style="border-bottom: 5px solid black;">Visión</h2> 
                                    <div class="cardcolor card-text">
                                        <p class="text-justify">La Universidad Tecnológica de Nayarit es una institución líder en servicios educativos tecnológicos, con programas pertinentes e innovadores reconocidos por su buena calidad, una planta docente calificada, cuerpos académicos consolidados,egresados competitivos y una vinculación estratégica global para contribuir al desarrollo estatal nacional.</p>    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="items sm-m-top-30">
                                <div class="item_text text-center">
                                    <h2 class="page-subheading" style="border-bottom: 5px solid black;">ISO 9001:2008</h2> 
                                    <div class="cardcolor card-text">
                                        <p class="text-justify">En agosto del año 2003, la Universidad Tecnológica de Nayarit decide implantar un Sistema de Gestión de Calidad basado en la Norma ISO-9001:2000 como una herramienta indispensable para lograr la satisfacción de los clientes y competir exitosamente en nuestro entorno.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fin de sección quienes somos-->

        <!-- Sección ultimas noticias-->
        <section id="noticias" class="bg-dark">
            <?php include('Modelo/mostrarNoticias.php');?>
            
        </section>
        <!-- Sección ultimas noticias -->

        <!-- Sección asegurate -->
        <section id="action" class="action bg-primary roomy-40">
            <div class="container">
                <div class="row">
                    <div class="maine_action">
                        <div class="col-md-12">
                            <div class="action_item text-center">
                                <h2 class="text-white text-uppercase">Asegurate como llegar a nosotros!</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fin de sección asegurate -->
            
        <!-- Footer -->
        <footer id="contact" class="footer action-lage bg-black p-top-80">
            <div class="container">
                <div class="row">
                    <div class="widget_area">
                        <div class="col-md-6">
                            <div class="widget_item widget_about">
                                <h5 class="text-white">Contactanos</h5>
                                <p class="m-top-20">Asegurate de contactarnos para recibir mas infomacion sobre las carreras y su plan de estudio y ¡Conoce nuestras instalaciones!</p>
                                <div class="widget_ab_item m-top-30">
                                    <div class="item_icon"><i class="fa fa-location-arrow"></i></div>
                                    <div class="widget_ab_item_text">
                                        <h6 class="text-white">Ubicacion : </h6>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3714.096939401382!2d-104.89876408541454!3d21.42543437949454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x84273123eaaaf2b9%3A0x16adf6ada41de099!2sUniversidad+Tecnol%C3%B3gica+de+Nayarit!5e0!3m2!1ses-419!2smx!4v1560619071979!5m2!1ses-419!2smx" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="widget_ab_item m-top-30">
                                    <div class="item_icon"><i class="fa fa-phone"></i></div>
                                    <div class="widget_ab_item_text">
                                        <h6 class="text-white">Telefono :</h6>
                                        <p>+52 (311)-211-9800</p>
                                    </div>
                                </div>
                                <div class="widget_ab_item m-top-30">
                                    <div class="item_icon"><i class="fa fa-envelope-o"></i></div>
                                    <div class="widget_ab_item_text">
                                        <h6 class="text-white">Correo Electronico :</h6>
                                        <p>info@utnay.edu.mx</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                               
                        <div class="col-md-6">
                            <div class="widget_item widget_newsletter sm-m-top-50">
                                <h5 class="text-white">Suscribete a Nosotros!</h5>
                                <form class="form-inline m-top-30">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Ingresa tu Correo Electronico">
                                        <button type="submit" class="btn text-center"><i class="fa fa-arrow-right"></i></button>
                                    </div>
                                </form>
                                        
                                <div class="widget_brand m-top-40">
                                    <a href="" class="text-uppercase">
                                    <img src="imagenes/logout.png" alt="">
                                    </a>
                                    <p>En la Universidad Tecnológica de Nayarit contamos con un modelo educativo altamente reconocido por la calidad de sus programas académicos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
            <div class="main_footer fix bg-mega text-center p-top-40 p-bottom-30 m-top-80">
                <div class="col-md-12">
                    <p class="wow fadeInRight" data-wow-duration="1s">
                    <a target="_blank" href="#">Universidad Tecnologica de Nayarit 2019.</a> 
                    Todos los Derechos Reservados
                    </p>
                </div>    
            </div>
        </footer>

        <!-- JS -->
        <script src="JS/bootstrap.min.js"></script>
        <script src="JS/bootsnav.js"></script>
        <script src="JS/jquery-1.11.2.min.js"></script>
        <script src="JS/main.js"></script>
        <script src="JS/wow.min.js"></script>
    </body>
</html>
