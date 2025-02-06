<?php
include "../c/eventC.php";
include "../c/sponsorC.php";
$c = new eventC();
$c2 = new sponsorC();
$tab3=$c2 ->listsponsor();
$tab = $c->listevent();
$tab2 = $c->listevent();
$triAttribut = isset($_GET['triAttribut']) ? $_GET['triAttribut'] : 'ide';
$triOrdre = isset($_GET['triOrdre']) ? $_GET['triOrdre'] : 'ASC';

// Récupérer la liste d'événements triée en utilisant la fonction tri
$tab = $c->tri($triAttribut, $triOrdre);
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SADAKA</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->


    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-md-12 col-lg-8">
                            <div class="short_contact_list">
                                <ul>
                                    <li><a href="#"> <i class="fa fa-phone"></i> +216 29 908 014</a></li>
                                    <li><a href="#"> <i class="fa fa-envelope"></i>mohamedyassine.abidi@esprit.tn</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-lg-4">
                            <div class="social_media_links d-none d-lg-block">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-pinterest-p"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.html">home</a></li>
                                        <li><a href="About.html">About</a></li>
                                        <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="single-blog.html">single-blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="elements.html">elements</a></li>
                                                <li><a href="Cause.html">Cause</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                                <div class="Appointment">
                                    <div class="book_btn d-none d-lg-block">
                                        <a data-scroll-nav='1' href="#">Make a Donate</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
    <!-- enfant gaza debut-->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1 overlay2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="slider_text ">
                            <span>Get Started Today.</span>
                            <h3> Help the children
                                In Gaza</h3>
                            <p>With so much to consume and such little time, coming up <br>
                                with relevant title ideas is essential</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <!-- enfant gaza debut-->
    <!-- events a l'extérieur  -->
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-12">
            <div class="donate_now_btn text-center">
                <a href="agenda.php" class="boxed-btn4">AGENDA </a>
            </div>
        </div>

    </div>
    <div class="reson_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-55">
                        <h3><span>Activités en extérieur </span></h3>
                    </div>
                </div>
            </div>
            
            <center>
            <span>
            <img src="img/filtre2.png" alt="filtre" id="filtreImage" onclick="afficherListeDeroulante()">
        
        <!-- Liste déroulante (initiallement cachée) -->
        <select id="listeDeroulante" onchange="appliquerTri()">
            <option value="ide">ID</option>
            <option value="obj">Objectif</option>
            <option value="place">Lieu</option>
            <option value="dh">Date</option>
            <option value="type">type</option>
            <!-- Ajoutez d'autres options selon vos besoins -->
        </select>
    </center>
            </span>
</center>
            <br>
            <br>
        <table border="0">
            <?php
            $count2 = 0; 
        foreach($tab as $event ){
            if ($count2 < 6) {
            ?>
            <?php     if ($event['type'] == 'exterieur'){ ?>
        <div class="row justify-content-center">
        
                <div class="col-lg-4 col-md-6">
               <td>
                    <div class="single_reson">
                        <div class="thum">
                            <div class="thum_1">
                                <img src="img/help/1.png" alt="">
                            </div>
                        </div>
                  
                        <div class="help_content">
                            <h4><?php echo $event['obj']; ?></h6>
                            <h6>Place : <?php echo $event['place']; ?></h6>
                            <h6>Date : <?php echo $event['dh']; ?></h6>
                            <h6>beneficier : <?php echo $event['be']; ?></h6>
                            <h6>nombre de place : <?php echo $event['nbrp']; ?></h6>
                            <h6>sponsor : 
                                <?php  foreach($tab3 as $sponsor){
                                    if(isset($event['ide']) && $sponsor['ide'] == $event['ide'] ){
                                        echo $sponsor['noms'];
                                        echo '  ';
                                    }
                                }
                                ?>

                            </h6>
                            <a href="form1.php" class="read_more">Participer (sponsor)</a>
                        </div>
                        
                     </td>
                    </div>
                    
                </div>
                <?php } ?>
                <?php
                $count2++;}
            }
                 
                 ?>
                 </table>
         
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-12">
            <div class="donate_now_btn text-center">
                <a href="plus1.php" class="boxed-btn4">PLUS </a>
            </div>
        </div>

    </div>
    
    <!-- events a l'extérieur  -->
       <!-- events a l'antérieur  -->
       <div class="reson_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-55">
                        <h3><span>Activités en ligne </span></h3>
                    </div>
                </div>
            </div>
            
        <table border="0">
            <?php
            $count = 0; 
        foreach($tab2 as $event ){
            if ($count < 6) {
            ?>
            <?php     if ($event['type'] == 'anterieur'){ ?>
        <div class="row justify-content-center">
        
                <div class="col-lg-4 col-md-6">
               <td>
                    <div class="single_reson">
                        <div class="thum">
                            <div class="thum_1">
                                <img src="img/help/1.png" alt="">
                            </div>
                        </div>
                  
                        <div class="help_content">
                            <h4><?php echo $event['obj']; ?></h6>
                            <h6>Place : <?php echo $event['place']; ?></h6>
                            <h6>Date : <?php echo $event['dh']; ?></h6>
                            <h6>beneficier : <?php echo $event['be']; ?></h6>
                            <h6>nombre de place : <?php echo $event['nbrp']; ?></h6>
                            <h6>sponsor : 
                                <?php  foreach($tab3 as $sponsor){
                                    if(isset($event['ide']) && $sponsor['ide'] == $event['ide'] ){
                                        echo $sponsor['noms'];
                                        echo '  ';
                                    }
                                }
                                ?>

                            </h6>
                            <a href="form1.php" class="read_more">Participer (sponsor )</a>
                        </div>
                        
                     </td>
                    </div>
                    
                </div>
                <?php } ?>
                <?php
                $count++;}
            }
                 
                 ?>
                 </table>
         
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-12">
            <div class="donate_now_btn text-center">
                <a href="plus2.php" class="boxed-btn4">PLUS </a>
            </div>
        </div>

    </div>
    <br>
    <br>
    <br>
    <br>
    <!-- events a l'antérieur -->
  
    <!-- counter_area_end  -->
    <!--ajouter-->

  <!--<div class="row">
        <div class="col-12">
            <div class="donate_now_btn text-center">
                <a href="form2.html" class="boxed-btn4">Suggérer un event </a>
            </div>
        </div>

    </div>-->

    <!--ajouter-->
    <!-- footer_start  -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                            <p class="address_text">Lorem ipsum dolor sit amet, <br> consectetur adipiscing elit, sed do <br> eiusmod tempor incididunt ut labore.
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-dribbble"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Services
                            </h3>
                            <ul class="links">
                                <li><a href="#">Donate</a></li>
                                <li><a href="#">Sponsor</a></li>
                                <li><a href="#">Fundraise</a></li>
                                <li><a href="#">Volunteer</a></li>
                                <li><a href="#">Partner</a></li>
                                <li><a href="#">Jobs</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Contacts
                            </h3>
                            <div class="contacts">
                                <p>+2(305) 587-3407 <br>
                                    info@loveuscharity.com <br>
                                    Flat 20, Reynolds Neck, North
                                    Helenaville, FV77 8WS
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Top News
                            </h3>
                            <ul class="news_links">
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/news/news_1.png" alt="">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">
                                            <h4>School for African 
                                                Childrens</h4>
                                        </a>
                                        <span>Jun 12, 2019</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/news/news_2.png" alt="">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">
                                            <h4>Gaza</h4>
                                        </a>
                                        <span>Jun 12, 2019</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="row">
                    <div class="bordered_1px "></div>
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end  -->

    <!-- link that opens popup -->

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>
    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
</body>
<script>
    function afficherListeDeroulante() {
        var listeDeroulante = document.getElementById("listeDeroulante");
        listeDeroulante.style.display = (listeDeroulante.style.display === 'none' || listeDeroulante.style.display === '') ? 'inline-block' : 'none';
    }

    function appliquerTri() {
        var triAttribut = document.getElementById("listeDeroulante").value;
        window.location.href = "eventa.php?triAttribut=" + triAttribut;
    }
</script>
</html>