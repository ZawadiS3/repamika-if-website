<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Repamika-if</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="icon"  href="img/logocrop.png">
    </head>
<body>
        
    <!--================ Start Header Menu Area =================-->
    <header class="header_area" id="top">
         
        <div class="icones">
            <div class="input-icons"> 
                <i class="fa fa-search icon"></i> 
                <input class="input-field" placeholder="Search..." type="text"> 
            </div>
            <div class="socila_media">
                <a href="https://www.facebook.com/ahm.repamikaif/" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://twitter.com/ahms_if" target="_blank"><i class="fa fa-twitter"></i></a>
                <a href="https://www.instagram.com/repamikaif/" target="_blank"><i class="fa fa-instagram"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
        <div class="main_menu">
            <div class="container">

                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container">
                        <h2>Repamika-IF Sarl</h2>
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->

                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                            <ul class="nav navbar-nav menu_nav ml-auto">
                                <li class="nav-item"><a class="nav-link" href="index.php">Acceuil</a></li> 
                                <li class="nav-item"><a class="nav-link" href="about-us.php">A propops</a></li> 
                                <li class="nav-item"><a class="nav-link" href="causes.html">Causes</a>
                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="events.html">Events</a>
                                        <li class="nav-item"><a class="nav-link" href="event-details.html">Event Details</a>
                                        <li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
                                    </ul>
                                </li> 
                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                        <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
                                    </ul>
                                </li> 
                                <li class="nav-item active"><a class="nav-link" href="contact.php">Contacts</a></li>
                            </ul>
                        </div> 
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!--================ End Header Menu Area =================-->
        
    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Contactez-nous</h2>
                    <p>Vous voulez nous atteindre ou apprendre plus de nous, ci-dessous nous disponibisons nos contacts pour se faire.</p>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->
    
    <!--================Contact Area =================-->
    <section class="contact_area section_gap">
        <div class="container">
            <div class="mapouter" style="margin-bottom: 80px;">
                <div class="gmap_canvas">
                    <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=%207%2C%20Lavalee%20Street%2C%20Shirley%20Park&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                        
                    </iframe>
                </div>
        </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <h6>Cape town, South Africa</h6>
                            <p>7, Lavalee Street, Shirley Park, Stikland</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6><a href="#">+27 717 135 967</a></h6>
                            <p>Du Lundi au Samedi, de 8h a 18h</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-envelope"></i>
                            <h6><a href="#">drjtkatirisa@gmail.com</a></h6>
                            <p>Envoyez-nous votre requette a tout moment!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Entrez votre nom">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre e-mail">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Entrez le sujet">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Entrez le message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" value="submit" class="btn primary_btn">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--================Contact Area =================-->
        
    <!--================ Start footer Area  =================-->    
    <footer>
        <div class="footer-area">
            <div class="container">
                <div id="my_F">
                    <p>Voulez-recevoir de nos nouvelles?</p>
                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                <div class="input-group d-flex flex-row">
                                    <input name="EMAIL" placeholder="Entrez votre mail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entrez votre mail '" required="" type="email">
                                    <button class="ml-10 primary_btn btn sub-btn rounded">SUBSCRIBE</button>        
                                </div>                                  
                                <div class="info"></div>
                            </form> 
                        </div>          <div class="row section_gap">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h4 class="footer_title">Notre Mission</h4>
                            <p>
                                Assister les Communautés Démunies en matière de Soins de Santé Primaires luttant pour
l'eradication des violences liées aux genres en défendant les droits de l’homme, et promouvoir
l’excellence académique
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h4 class="footer_title">Notre Vision</h4>
                            <p>
                                Bâtir une comunaute nouvelle et restaurée, basée sur des valeurs morales et transformée par l’amour
du Christ produisant des hommes et des femmes réconciliées avec leur intérieur et leur entourage
                            </p>
                        </div>
                    </div>
                    
                    <div class="offset-lg-1 col-lg-5 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h4 class="footer_title">Contactez-nous</h4>
                            <div class="ml-40">
                                <p class="sm-head">
                                    <span class="fa fa-location-arrow"></span>
                                    Bureau
                                </p>
                                <p> 7, Lavalee Street, Shirley Park, Stikland, Cape town, South Africa</p>
    
                                <p class="sm-head">
                                    <span class="fa fa-phone"></span>
                                    Téléphone
                                </p>
                                <p>
                                    +27 717 135 967
                                </p>
    
                                <p class="sm-head">
                                    <span class="fa fa-envelope"></span>
                                    Email
                                </p>
                                <p>drjtkatirisa@gmail.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row d-flex">
                    <p class="col-lg-12 footer-text text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website a product<i class="fa fa-heart-o" aria-hidden="true"></i> of Repamika-if
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

                    <a href="#top"><i class="fa fa-arrow-up"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->
    
    <!--================Contact Success and Error message Area =================-->
    <div id="success" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-close"></i>
                    </button>
                    <h2>Thank you</h2>
                    <p>Your message is successfully sent...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals error -->
    <div id="error" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-close"></i>
                    </button>
                    <h2>Sorry !</h2>
                    <p> Something went wrong </p>
                </div>
            </div>
        </div>
    </div>
    <!--================End Contact Success and Error message Area =================-->
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <!-- contact js -->
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/contact.js"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>