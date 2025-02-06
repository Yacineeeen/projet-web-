<?php
include '../Model/dons.php';
include '../Controller/donsC.php';

include '../Model/participation.php';
include '../Controller/participationC.php';
$donC = new donsC();
$participationC = new participationC();
$donListe= $donC->listDons();

$triAttribut= isset($_GET['triAttribut']) ? $_GET['triAttribut'] : 'id_donation';
$triOrdre= isset($_GET['triOrdre']) ? $_GET['triOrdre'] : 'ASC';

$donListe2= $donC->tri($triAttribut, $triOrdre);
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SADAKA</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <link rel="stylesheet" href="../assets/css/flaticon.css">
    <link rel="stylesheet" href="../assets/css/gijgo.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" href="../assets/css/slicknav.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- <link rel="stylesheet" href="../assets/css/responsive.css"> -->
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
                                    <li><a href="#"> <i class="fa fa-phone"></i> +216 29 202 325</a></li>
                                    <li><a href="#"> <i class="fa fa-envelope"></i>SADAKA@gmail.com<< /a>
                                    </li>
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
                                    <img src="../assets/img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.html">home</a></li>
                                        <li><a href="About.html">About</a></li>
                                        <li><a href="blog.html">blog</a></li>
                                        </li>
                                        <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="addDons.php">Faire un don</a></li>
                                                <li><a href="list_participation.php">Participation aux dons</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                                <div class="Appointment">
                                    <div class="book_btn d-none d-lg-block">
                                        <a data-scroll-nav='1' href="addDons.php">Make a Donation</a>
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

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1 overlay2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="slider_text ">
                            <span>Get Started Today.</span>
                            <h3> Help the children
                                When They Need</h3>
                            <p>With so much to consume and such little time, coming up <br>
                                with relevant title ideas is essential</p>
                            <a href="About.html" class="boxed-btn3">Learn More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->



    <!-- popular_causes_area_start  -->
    <div class="popular_causes_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-55">
                        <h3><span>Popular Causes</span></h3>
                    </div>
                </div>
            </div>
            <br>
            <select id="listeDeroulante" onchange="appliquerTri()">
                <option value="date_debut">Date </option>
                <option value="cause">Cause </option>
                <option value="amount">Somme Relevée </option>
                <!-- Ajoutez d'autres options selon vos besoins -->
            </select>

            <br>
            <br>

            <div class="search-bar creative-search">
                <form action="../Views/index.php" method="get">
                    <input type="text" name="q" placeholder="Rechercher...">
                    <button type="input" class="search-button">Rechercher</button>
                    <style>
                        .search-bar {
                            text-align: right;
                        }

                        .search-bar form {
                            /*display: flex;*/
                            align-items: center;
                        }

                        .search-bar input[type="text"] {
                            padding: 8px;
                            border: 1px solid #ccc;
                            border-radius: 4px;
                        }

                        .search-bar button {
                            background-color: #4CAF50;
                            color: white;
                            border: none;
                            padding: 8px 12px;
                            border-radius: 4px;
                            cursor: pointer;
                        }

                        /* Ajoutez du style supplémentaire pour un design créatif si nécessaire */
                    </style>
                </form>
            </div>
            <div class="row">
                <?php
                $searchTerm = isset($_GET['q']) ? $_GET['q'] : '';
                $donListe = $donC->listDons($searchTerm);

                foreach ($donListe as $dons) {
                     foreach ($donListe2 as $dons) { 
                    $dateDebut = new DateTime($dons['date_fin']);
                    $dateFin = new DateTime();
                    $duree = $dateFin->diff($dateDebut);
                    $participations = $participationC->listparticipationbyid($dons['id_donation']);
                    $max = $dons['amount'];
                    foreach ($participations as $participation) {
                        // Valeur par défaut si aucune offre n'est présente
                
                        if ($participations != null) {
                            // Assurez-vous que la méthode getMaxMise retourne toujours un nombre
                            $maxMise = $participationC->getMaxMise($dons['id_donation']);

                            if ($maxMise !== false) {
                                $max = $maxMise;
                            }
                        } else {
                            // Si aucune offre n'est présente, utilisez la valeur de 'offre_min'
                            $max = $dons['amount'];
                        }

                    }
                    $donC->updateAmount($dons['id_donation'], $max);

                    ?>
                
                    <div class="col-lg-4">
                        <div class="single_cause">
                            <div class="thumb">
                                <img src="../img/help/<?= htmlspecialchars($dons['img']) ?>"
                                    alt="<?= htmlspecialchars($dons['cause']) ?>">

                            </div>
                            <div class="causes_content">
                                <h4>
                                    <?= htmlspecialchars($dons['cause']) ?>
                                </h4>
                                <p>
                                    <?php
                                    $shortDescription = substr(htmlspecialchars($dons['descr']), 0, 182);
                                    echo $shortDescription;
                                    ?>
                                </p>
                                <div class="auction_info">
                                    <div class="time_left">
                                        <i class="ti-timer"></i> Il reste
                                        <?= $duree->format('%d jours, %h heures et %i minutes') ?>
                                    </div>
                                    <div class="current_bid">
                                        Somme Relevée :
                                        <?= htmlspecialchars($max) ?> $
                                    </div>
                                </div>
                                <a class="read_more"
                                    href="cause_details.php?id_donation=<?= urlencode($dons['id_donation']) ?>">Faire un
                                    don</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                <?php } ?>
            </div>

        </div>
        <center>
            <button id="creer" class="mx-auto" onclick="window.location.href='addDons.php'" type="button">Créer le
                Don</button>
        </center>
    </div>

    <!-- popular_causes_area_end  -->


    <!-- footer_start  -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="../assets/img/footer_logo.png" alt="">
                                </a>
                            </div>
                            <p class="address_text">Let's make a difference! <br>
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
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Contacts
                            </h3>
                            <div class="contacts">
                                <p>+216 29 202 325<br>
                                    SADAKA@gmail.com <br>
                                    Ariana,Tunisie
                                </p>
                            </div>
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
                            Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script> All rights reserved | This
                            template is made with <i class="ti-heart" aria-hidden="true"></i>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end  -->

    <!-- link that opens popup -->

    <!-- JS here -->
    <script src="../assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/isotope.pkgd.min.js"></script>
    <script src="../assets/js/ajax-form.js"></script>
    <script src="../assets/js/waypoints.min.js"></script>
    <script src="../assets/js/jquery.counterup.min.js"></script>
    <script src="../assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="../assets/js/scrollIt.js"></script>
    <script src="../assets/js/jquery.scrollUp.min.js"></script>
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/nice-select.min.js"></script>
    <script src="../assets/js/jquery.slicknav.min.js"></script>
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/gijgo.min.js"></script>
    <!--contact js-->
    <script src="../assets/js/contact.js"></script>
    <script src="../assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="../assets/js/jquery.form.js"></script>
    <script src="../assets/js/jquery.validate.min.js"></script>
    <script src="../assets/js/mail-script.js"></script>

    <script src="../assets/js/main.js"></script>
</body>
<script>
    function afficherListeDeroulante() {
        var listeDeroulante = document.getElementById("listeDeroulante");
        listeDeroulante.style.display = (listeDeroulante.style.display === 'none' || listeDeroulante.style.display === '') ? 'inline-block' : 'none';
    }

    function appliquerTri() {
        var triAttribut = document.getElementById("listeDeroulante").value;
        window.location.href = "index.php?triAttribut=" + triAttribut;
    }


</script>

</html>