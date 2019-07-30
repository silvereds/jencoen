<?php 
  session_start();
?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Oswan - eCommerce php5 Template</title>
        <meta name="description" content="Live Preview Of Oswan eCommerce php5 Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.png">
		
		<!-- all css here -->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/animate.css">
        <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="../assets/css/chosen.min.css">
        <link rel="stylesheet" href="../assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="../assets/css/themify-icons.css">
        <link rel="stylesheet" href="../assets/css/icofont.css">
        <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/bundle.css">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/responsive.css">
        <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body style="background-image: url(../assets/img/font-site/fond.jpg)">
        <div class="wrapper">
            <header>
                <div class="header-area transparent-bar ptb-55">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-4">
                                <div class="logo-small-device">
                                    <a href="index.php"><img alt="" src="../assets/img/logo/logo.png"></a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-8">
                                <div class="header-contact-menu-wrapper pl-45">
                                    <div class="header-contact">
                                        <p>WANT TO TALK WITH US  +01254 265 987</p>
                                    </div>
                                    <div class="menu-wrapper text-center">
                                        <button class="menu-toggle">
                                            <img class="s-open" alt="" src="../assets/img/icon-img/menu.png">
                                            <img class="s-close" alt="" src="../assets/img/icon-img/menu-close.png">
                                        </button>
                                        <div class="main-menu">
                                            <nav>
                                                <ul>
                                                    <li><a href="../">home</a></li>
                                                    <li class="active"><a href="../about-us">about us </a></li>
                                                    <li><a href="../shop">shop</a></li>
                                                    <!--
                                                    <li><a href="blog.php">BLOG</a></li>
                                                    -->
                                                    <li><a href="../login-register">login</a></li>
                                                        
                                                    </li>
                                                    <li><a href="../contact">contact us</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-cart cart-small-device">
                                    <?php include("..\cart\Cart.php") ?>
                                </div>
                            </div>
                            <div class="mobile-menu-area col-12">
                                <div class="mobile-menu">
                                    <nav id="mobile-menu-active">
                                        <ul class="menu-overflow">
                                            <li><a href="../">HOME</a></li>
                                             
                                            <li><a href="../shop">shop</a></li>
                                            <!--
                                            <li><a href="blog.php">BLOG</a></li>
                                            -->
                                            <li><a href="../login-register">login</a></li>
                                            <li><a href="../contact"> Contact us</a></li>
                                        </ul>
                                    </nav>                          
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-cart-wrapper">
                        <div class="header-cart">
                          <?php include("..\cart\Cart.php") ?>
                        </div>
                    </div>
                </div>
            </header>
            <div class="breadcrumb-area pt-255 pb-170" >
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center">
                        <h2>Contact Us</h2>
                        <ul>
                            <li>
                                <a href="#">home</a>
                            </li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="contact-area pt-130">
                <div class="container">
                    <div class="contact-map">
                        <div id="map"></div>
                    </div>
                </div>
                <div class="all-info ptb-130">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="contact-info-wrapper">
                                    <h4 class="contact-title text-white">INFORMATION</h4>
                                    <div class="communication-info">
                                        <div class="single-communication">
                                            <div class="communication-icon">
                                                <i class="ti-home" aria-hidden="true"></i>
                                            </div>
                                            <div class="communication-text">
                                                <h4>Address:</h4>
                                                <p>Miata 309 S Main St,Stafford, KS 67578</p>
                                            </div>
                                        </div>
                                        <div class="single-communication">
                                            <div class="communication-icon">
                                                <i class="ti-mobile" aria-hidden="true"></i>
                                            </div>
                                            <div class="communication-text">
                                                <h4>Phone:</h4>
                                                <p>0123 456 789 - 15 2368 4597</p>
                                            </div>
                                        </div>
                                        <div class="single-communication">
                                            <div class="communication-icon">
                                                <i class="ti-email" aria-hidden="true"></i>
                                            </div>
                                            <div class="communication-text">
                                                <h4>Email:</h4>
                                                <p><a href="#">Support@BootExperts.com</a></p>
                                            </div>
                                        </div>
                                        <div class="single-communication">
                                            <div class="communication-icon">
                                                <i class="ti-world" aria-hidden="true"></i>
                                            </div>
                                            <div class="communication-text">
                                                <h4>Website:</h4>
                                                <p><a href="#">https://DevItems.com</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-message-wrapper">
                                    <h4 class="contact-title text-white">GET IN TOUCH</h4>
                                    <div class="contact-message">
                                        <form id="contact-form" action="#" method="post">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="contact-form-style mb-20">
                                                        <input name="name" placeholder="Full Name" type="text" >
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="contact-form-style mb-20">
                                                        <input name="email" placeholder="Eail Address" type="email">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="contact-form-style mb-20">
                                                        <input name="subject" placeholder="Subject" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="contact-form-style">
                                                        <textarea name="message" placeholder="Massage"></textarea>
                                                        <button class="submit cr-btn btn-style" type="submit"><span>SEND MASSAGE</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <p class="form-messege" style="color:white"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include_once "../footer.php"?>
            
        </div>
        
        
        
		
		
		
		
		<!-- all js here -->
        <script src="../assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="../assets/js/popper.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/isotope.pkgd.min.js"></script>
        <script src="../assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="../assets/js/jquery.counterup.min.js"></script>
        <script src="../assets/js/waypoints.min.js"></script>
        
        <script src="../assets/js/owl.carousel.min.js"></script>
        <script src="../assets/js/plugins.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMlLa3XrAmtemtf97Z2YpXwPLlimRK7Pk"></script>
		<script>
            function init() {
                var mapOptions = {
                    zoom: 11,
                    scrollwheel: false,
                    center: new google.maps.LatLng(40.709896, -73.995481),
                    styles: 
                    [
                        {
                            "featureType": "all",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "saturation": 36
                                },
                                {
                                    "color": "#878787"
                                },
                                {
                                    "lightness": 40
                                }
                            ]
                        },
                        {
                            "featureType": "all",
                            "elementType": "labels.text.stroke",
                            "stylers": [
                                {
                                    "visibility": "on"
                                },
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 16
                                }
                            ]
                        },
                        {
                            "featureType": "all",
                            "elementType": "labels.icon",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "administrative",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 20
                                }
                            ]
                        },
                        {
                            "featureType": "administrative",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 17
                                },
                                {
                                    "weight": 1.2
                                }
                            ]
                        },
                        {
                            "featureType": "landscape",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 20
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 21
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 17
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#444444"
                                },
                                {
                                    "lightness": 29
                                },
                                {
                                    "weight": 0.2
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 18
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 16
                                }
                            ]
                        },
                        {
                            "featureType": "transit",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 19
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#2d333c"
                                },
                                {
                                    "lightness": 17
                                }
                            ]
                        }
                    ]
                };
                var mapElement = document.getElementById('map');
                var map = new google.maps.Map(mapElement, mapOptions);
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(40.709896, -73.995481),
                    map: map,
                    icon: '../assets/img/icon-img/8.png',
                    animation:google.maps.Animation.BOUNCE,
                    title: 'Snazzy!'
                });
            }
            google.maps.event.addDomListener(window, 'load', init);
		</script>
        <script src="../assets/js/main.js"></script>
        <script src="../js/cart.js"></script>
        <script>
           $("#contact-form").submit(function(e){
                e.preventDefault();
                var form_contact = $(this).serialize()
               
                $.ajax({
                        url : '../user/sendMessage.php',
                        type : 'post',
                        data: form_contact,
                        dataType : 'html',
                        success : function(htmlData,statut){    
                         if(htmlData != "ok"){
                            $("p.form-messege").html(htmlData);
                         }else{
                            $("p.form-messege").html("votre message a été envoyé avec success!!!!");
                            $("#contact-form input[name=name]").val("")
                            $("#contact-form input[name=email]").val("")
                            $("#contact-form input[name=subject]").val("")
                            $("#contact-form textarea").val("")
                            
                         }
                         
                           
                        },
                        error : function(resultat, statut, erreur){
                            $("#load").html('<span>erreur de connection au serveur recommencez...</span>'); 
                        }
                    })
           })
              
        </script>
    </body>
</html>
