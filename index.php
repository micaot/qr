<?php
$data = json_decode( file_get_contents('https://qrcartamenu.com/wp-json/gravityview/v1/views/1221/entries/'.$_GET['menu'] .'.json'), true );
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?php echo $data["42"]; ?></title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
       
        <script>
        // ****************************************************************//
 // * Función: showMapa() *//
 // * Descripción: Abre el mapa nativo del dispositivo móvil *//
 // * Autor: Eduardo Revilla Vaquero *//
 // ****************************************************************//

 showMap=function(q)
 {
 var device = navigator.userAgent;
 var url = 'http://maps.google.com?daddr='+q;
 if (device.match(/Iphone/i) || device.match(/iPhone|iPad|iPod/i))
 {
 // iOs
 url='http://maps.apple.com/maps?saddr=Current%20Location&daddr='+q;
 }
 else if(device.match(/Android/i))
 {
 // Android
 url='geo:0,0?q='+q;
 }
 else if(device.match(/Windows Phone/i))
 {
 // windows phone
 url='maps:'+q;
 }

 window.location.href = url;
 }
        </script>
        
        
    </head>
    
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <?php if($data["24"] == false) { } else {
                        echo "<li class='nav-item'><a class='nav-link js-scroll-trigger' href='#platos'>Platos Individuales</a></li>"; } ?>
                        <?php if($data["35"] == false) { } else {
                        echo "<li class='nav-item'><a class='nav-link js-scroll-trigger' href='#tapas'>Tapas</a></li>"; } ?>
                        <?php if($data["36"] == false) { } else {
                        echo "<li class='nav-item'><a class='nav-link js-scroll-trigger' href='#bebidas'>Bebidas</a></li>"; } ?>
                        <?php if($data["37"] == false) { } else {
                        echo "<li class='nav-item'><a class='nav-link js-scroll-trigger' href='#postres'>Postres</a></li>"; } ?>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Alérgenos</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Contacto</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        
         <style>
        header.masthead {
                        
              padding-top: 10.5rem;
              padding-bottom: 6rem;
              text-align: center;
              color: #fff;
              background-image: url("<?php $img = $data["46"]; print_r ($img["0"]); ?>");
              background-repeat: no-repeat;
              background-attachment: scroll;
              background-position: center center;
              background-size: cover;
            position: relative;  
            
              
             }
             
             .masthead:before {
                 content: "";
                 background-color: rgba(0,0,0,0.6);
                 top: 0;
                 bottom: 0;
                 left: 0;
                 right: 0;
                 position: absolute;
                 
                 
                 
             }
             .masthead div {
                position: relative;
             }
          
        </style>
        
        <!-- Masthead-->
        <header class="masthead">
            
            <div class="container">
                <div class="masthead-subheading">Carta Digital. Su seguridad nuestro foco!</div>
                <div class="masthead-heading text-uppercase"><?php echo $data["42"]; ?></div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#platos">Ver la Carta</a>
                
        <!-- Clients-->
        
            <div class="container  text-center">
                <div class="row pt-5">
                   
                       
                     <div class="col-lg-2 col-sm-2 mb-2">
                        <span class="fa-stack fa-2x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-hands-wash fa-stack-1x fa-inverse"></i>
                        </span>
                     </div>
                     <div class="col-lg-2 col-sm-2 mb-2">
                        <span class="fa-stack fa-2x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-hand-holding-water fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="col-lg-2 col-sm-2 mb-2">
                        <span class="fa-stack fa-2x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-head-side-mask fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                     <div class="col-lg-2 col-sm-2 mb-2">
                        <span class="fa-stack fa-2x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-people-arrows fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                      <div class="col-lg-2 col-sm-2 mb-2">
                        <span class="fa-stack fa-2x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-handshake-slash fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                     <div class="col-lg-2 col-sm-2 mb-2">
                        <span class="fa-stack fa-2x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-virus-slash fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                </div>
            </div>
                
                
                 
            </div>
        </header>
           
        
        <!-- Platos Individuales-->
                <?php   
                    if($data["24"] == false) 
                        {
                        } 
                    else 
                        {
                        echo "<section class='page-section bg-light' id='platos'>
                        <div class='container'>
                        <div class='text-center'>
                            <h2 class='section-heading text-uppercase'>Platos Individuales</h2>
                            <h3 class='section-subheading text-muted'>Nuestra selección de platos elaborados.</h3>
                        </div>
                        <div class='row'>
                        <div class='col-lg-12'>
                        <div class='team-member'>
                        <img class='mx-auto rounded-circle' src='assets/img/team/platos.jpg' alt='' />";
                        
                         $array  = $data["24"];
                         $longitud = count($array);
                            for($i=0; $i<$longitud; $i++)
                            {
                            
                            echo "<div class='col-lg-6 mx-auto text-left section-heading text-uppercase'>".$array[$i]["Nombre"];
                            echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                            echo $array[$i]["Precio"];
                            echo "</div>";
                            }
                        echo " </div></div></div>
                            <div class='row'>
                            <div class='col-lg-8 mx-auto text-center'><p class='large text-muted'>No dudes en consultar a nuestros camareros en caso de intolerancia a algún alimento.</p></div></div></div>
                            </section>
                            ";
                                    }
                             ?> 
                       
                    <!-- Tapas-->
                <?php   
                    if($data["35"] == false) 
                        {
                        } 
                    else 
                        {
                        echo "<section class='page-section bg-light' id='tapas'>
                        <div class='container'>
                        <div class='text-center'>
                            <h2 class='section-heading text-uppercase'>Tapas</h2>
                            <h3 class='section-subheading text-muted'>Nuestra Selección de Tapas.</h3>
                        </div>
                        <div class='row'>
                        <div class='col-lg-12'>
                        <div class='team-member'>
                        <img class='mx-auto rounded-circle' src='assets/img/team/tapas.jpg' alt='' />";
                        
                         $arraytapa  = $data["35"];
                        $longitudtapa = count($arraytapa);
                        for($i=0; $i<$longitudtapa; $i++)
                            {
                            
                            echo "<div class='col-lg-6 mx-auto text-left section-heading text-uppercase'>".$arraytapa[$i]["Nombre"];
                            echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                            echo $arraytapa[$i]["Precio"];
                            echo "</div>";
                            }
                        echo " </div></div></div>
                            <div class='row'>
                            <div class='col-lg-8 mx-auto text-center'><p class='large text-muted'>No dudes en consultar a nuestros camareros en caso de intolerancia a algún alimento.</p></div></div></div>
                            </section>
                            ";
                                    }
                             ?> 
                       
                   <!-- Bebidas-->
                <?php   
                    if($data["36"] == false) 
                        {
                        } 
                    else 
                        {
                        echo "<section class='page-section bg-light' id='bebidas'>
                        <div class='container'>
                        <div class='text-center'>
                            <h2 class='section-heading text-uppercase'>Bebidas</h2>
                            <h3 class='section-subheading text-muted'>Nuestra Selección de Bebidas.</h3>
                        </div>
                        <div class='row'>
                        <div class='col-lg-12'>
                        <div class='team-member'>
                        <img class='mx-auto rounded-circle' src='assets/img/team/bebidas.jpg' alt='' />";
                        
                         $arraybebida  = $data["36"];
                        $longitudbebida = count($arraybebida);
                        for($i=0; $i<$longitudbebida; $i++)
                            {
                            
                            echo "<div class='col-lg-6 mx-auto text-left section-heading text-uppercase'>".$arraybebida[$i]["Nombre"];
                            echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                            echo $arraybebida[$i]["Precio"];
                            echo "</div>";
                            }
                        echo " </div></div></div>
                            <div class='row'>
                            <div class='col-lg-8 mx-auto text-center'><p class='large text-muted'>No dudes en consultar a nuestros camareros en caso de intolerancia a algún alimento.</p></div></div></div>
                            </section>
                            ";
                                    }
                             ?> 
        
        <!-- Postres-->
                <?php   
                    if($data["37"] == false) 
                        {
                        } 
                    else 
                        {
                        echo "<section class='page-section bg-light' id='postres'>
                        <div class='container'>
                        <div class='text-center'>
                            <h2 class='section-heading text-uppercase'>Postres</h2>
                            <h3 class='section-subheading text-muted'>Nuestra Selección de Postres.</h3>
                        </div>
                        <div class='row'>
                        <div class='col-lg-12'>
                        <div class='team-member'>
                        <img class='mx-auto rounded-circle' src='assets/img/team/postres.png' alt='' />";
                        
                         $arraypostre  = $data["37"];
                        $longitudpostre = count($arraypostre);
                        for($i=0; $i<$longitudpostre; $i++)
                            {
                            
                            echo "<div class='col-lg-6 mx-auto text-left section-heading text-uppercase'>".$arraypostre[$i]["Nombre"];
                            echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                            echo $arraypostre[$i]["Precio"];
                            echo "</div>";
                            }
                        echo " </div></div></div>
                            <div class='row'>
                            <div class='col-lg-8 mx-auto text-center'><p class='large text-muted'>No dudes en consultar a nuestros camareros en caso de intolerancia a algún alimento.</p></div></div></div>
                            </section>
                            ";
                                    }
                             ?> 
                
        
         <!-- Alérgenos-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Alérgenos</h2>
                    <h3 class="section-subheading text-muted">
                        Por las características de instalación, manipulación y elaboración del establecimiento, todos nuestros productos son susceptibles de contener de manera directa o a través de contaminación cruzada, algún tipo de alergeno. CONSULTANOS EN CASO DE DUDA.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="mx-auto d-block img-fluid" src="assets/img/portfolio/gluten.png" alt="" />
                            </a>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="mx-auto d-block img-fluid" src="assets/img/portfolio/crustaceos.png" alt="" />
                            </a>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="mx-auto d-block img-fluid" src="assets/img/portfolio/pescado.png" alt="" />
                            </a>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="mx-auto d-block img-fluid" src="assets/img/portfolio/huevos.png" alt="" />
                            </a>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="mx-auto d-block img-fluid" src="assets/img/portfolio/cacahuetes.png" alt="" />
                            </a>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="mx-auto d-block img-fluid" src="assets/img/portfolio/soja.png" alt="" />
                            </a>
                           
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal7">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="mx-auto d-block img-fluid" src="assets/img/portfolio/lacteos.png" alt="" />
                            </a>
                           
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal8">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="mx-auto d-block img-fluid" src="assets/img/portfolio/frutoscascara.png" alt="" />
                            </a>
                           
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal9">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="mx-auto d-block img-fluid" src="assets/img/portfolio/apio.png" alt="" />
                            </a>
                           
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal10">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="mx-auto d-block img-fluid" src="assets/img/portfolio/mostaza.png" alt="" />
                            </a>
                           
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal11">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="mx-auto d-block img-fluid" src="assets/img/portfolio/granossesamo.png" alt="" />
                            </a>
                           
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal12">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="mx-auto d-block img-fluid" src="assets/img/portfolio/dioxido.png" alt="" />
                            </a>
                           
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal13">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="mx-auto d-block img-fluid" src="assets/img/portfolio/altramuces.png" alt="" />
                            </a>
                           
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal14">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="mx-auto d-block img-fluid" src="assets/img/portfolio/moluscos.png" alt="" />
                            </a>
                           
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        
        
        
      
        
        
        <!-- Contact-->
       <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">CONTÁCTANOS!</h2>
                    <h3 class="section-subheading text-muted">Puedes contactar con nosotros a través de los siguientes medios</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-envelope fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">
                             <button type="button" class="btn btn-dark btn-lg" onclick="location.href='mailto:<?php echo $data["43"]; ?>';">Email</button>
                        </h4>
                       
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-phone fa-stack-1x fa-inverse"></i>
                        </span>
                         <h4 class="my-3">
                              <button type="button" class="btn btn-dark btn-lg" onclick="location.href='tel:<?php echo $data["44"]; ?>';">Teléfono</button>
                            
                         </h4>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-map-marker  fa-stack-1x fa-inverse"></i>
                        </span>
                       <h4 class="my-3">
                           <button type="button" class="btn btn-dark btn-lg" onclick="showMap('<?php echo $data["40"]; ?>')">Localización</button>
                       </h4>
                        
                    </div>
                </div>
            </div>
        </section>
        
        
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    
                    
                    <div class="col-lg-4 text-lg-left">
                        Copyright © <a href="https://qrcartamenu.com" target="_blank">QRCartaMenu.com</a>
                    </div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="https://qrcartamenu.com" target="_blank"><i class="fas fa-qrcode"></i></a>
                    </div>
                     <div class="col-lg-4 text-lg-right">
                        <a class="mr-3" href="#!">Privacy Policy</a>
                        <a href="#!">Terms of Use</a>
                    </div>
                    
                   
                </div>
            </div>
        </footer>
        
        
        <!-- Portfolio Modals-->
        <!-- Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Gluten</h2>
                                    <p class="item-intro text-muted">Cereales que contengan gluten</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/gluten.png" alt="" />
                                    <p>Aquí se incluyen todos los cereales que vamos a ver más todas sus variedades híbridas y productos derivados. Concretamente: Trigo, centeno, cebada, avena, espelta, kamut o sus variedades híbridas y productos derivados.</p>
                                    <p>
                                    En este punto quedan excluidos los jarabes de glucosa a base de trigo, incluida la dextrosa; las maltodextrinas a base de trigo; los jarabes de glucosa a base de cebada; y los cereales que se utilizan para hacer destilados alcohólicos, incluido el alcohol etílico de origen agrícola.
                                    </p>


                                   
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Cerrar Alérgeno
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Crustáceos</h2>
                                    <p class="item-intro text-muted">Crustáceos y productos a base de crustáceos</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/crustaceos.png" alt="" />
                                    <p>Todos los productos que puedan contener mariscos y/o trazas.</p>
                                    
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Cerrar Alérgeno
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Pescado</h2>
                                    <p class="item-intro text-muted">Pescado y productos a base de pescado.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/pescado.png" alt="" />
                                    <p>En este punto se excluye la gelatina de pescado utilizada como soporte de vitaminas o preparados de carotenoides y la gelatina de pescado o ictiocola utilizada como clarificante en la cerveza y el vino.</p>
                                    
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Cerrar Alérgeno
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Huevos</h2>
                                    <p class="item-intro text-muted">Huevos y productos a base de huevo.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/huevos.png" alt="" />
                                    <p>Productos que pueden contener huevo y/o en trazas.</p>
                                    
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                       Cerrar Alérgeno
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Cacahuetes</h2>
                                    <p class="item-intro text-muted">Cacahuetes y productos a base de cacahuetes.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/cacahuetes.png" alt="" />
                                    <p>Todos los productos que contengan cacahuete y/o pueden contener trazas de cacahuetes.</p>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Cerrar Alérgeno
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Soja</h2>
                                    <p class="item-intro text-muted">Soja y productos a base de soja.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/soja.png" alt="" />
                                    <p>Exceptuamos aquellos alimentos que contienen aceite y grasa de semilla de soja totalmente refinados; tocoferoles naturales mezclados (E306), d-alfa tocoferol natural, acetato de d-alfa tocoferol natural y succinato de d-alfa tocoferol natural derivados de la soja; fitosteroles y ésteres de fitosterol derivados de aceites vegetales de soja; o ésteres de fitostanol derivados de fitosteroles de aceite de semilla de soja.</p>
                                    
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Cerrar Alérgeno
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 7-->
        <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Lacteos</h2>
                                    <p class="item-intro text-muted">Leche y sus derivados.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/lacteos.png" alt="" />
                                    <p>También se debe especificar la lactosa, pero no lactosuero utilizado para hacer destilados alcohólicos, incluyendo la etílico de origen agrícola, ni lactitol.</p>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Cerrar Alérgeno
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- Modal 8-->
        <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Frutos de cáscara</h2>
                                    <p class="item-intro text-muted">Frutos de cáscara.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/frutoscascara.png" alt="" />
                                    <p>Todos los frutos de cáscara, incluidos: Almendras, avellanas, nueces, anacardos, pacanas, nueces de Brasil, alfóncigos, nueces macadamia o nueces de Australia y productos derivados.</p>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Cerrar Alérgeno
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- Modal 9-->
        <div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Apio</h2>
                                    <p class="item-intro text-muted">Apio y productos derivados.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/apio.png" alt="" />
                                    <p>Todos los productos que contengan apio y/o pueden contener trazas de apio.</p>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Cerrar Alérgeno
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- Modal 10-->
        <div class="portfolio-modal modal fade" id="portfolioModal10" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Mostaza</h2>
                                    <p class="item-intro text-muted">Mostaza y productos derivados.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/mostaza.png" alt="" />
                                    <p>Todos los productos que contengan mostaza y/o  pueden contener trazas de mostaza.</p>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Cerrar Alérgeno
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- Modal 11-->
        <div class="portfolio-modal modal fade" id="portfolioModal11" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Granos de sesamo</h2>
                                    <p class="item-intro text-muted">Granos de sésamo y productos a base de granos de sésamo.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/granossesamo.png" alt="" />
                                    <p>Todos los productos que contengan sésamo y/o  pueden contener trazas de sésamo.</p>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Cerrar Alérgeno
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- Modal 12-->
        <div class="portfolio-modal modal fade" id="portfolioModal12" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Dióxido de azufre</h2>
                                    <p class="item-intro text-muted">Dióxido de azufre y sulfitos.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/dioxido.png" alt="" />
                                    <p>En concentraciones superiores a 10 mg/kg o 10 mg/litro en términos de SO2 total, para los productos listos para el consumo o reconstituidos conforme a las instrucciones del fabricante.</p>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Cerrar Alérgeno
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- Modal 13-->
        <div class="portfolio-modal modal fade" id="portfolioModal13" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Altramuces</h2>
                                    <p class="item-intro text-muted">Altramuces y productos a base de altramuces.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/altramuces.png" alt="" />
                                    <p>Todos los productos que contengan altramuces y/o pueden contener trazas de altramuz.</p>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Cerrar Alérgeno
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- Modal 14-->
        <div class="portfolio-modal modal fade" id="portfolioModal14" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Moluscos</h2>
                                    <p class="item-intro text-muted">Moluscos y productos a base de moluscos.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/moluscos.png" alt="" />
                                    <p>Todos los productos que contengan mariscos y/o  pueden contener trazas de mariscos.</p>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Cerrar Alérgeno
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
