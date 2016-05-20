<!--************************** HOMEPAGINA *****************************-->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Reservatie Systeem">
    <meta name="author" content="Niels Bekkers, Kerim Bayramoglu, Jan Youlton, Mark Verleene">

    <title>Kapsalon</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>/assets/css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--    [if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Kapsalon</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Diensten</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Over</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Kapsters</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#login">Inloggen <img src="<?php echo base_url(); ?>/assets/img/login-icon.png" width="20"height="20" /></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welkom bij ons kapsalon!</div>
                <div class="intro-heading">Leuk je te zien!</div>
                <a href="#login" class="page-scroll btn btn-xl" id="login">Ontdek meer</a>
            </div>
        </div>
    </header>
    <br/><br/>

    <!--Login container-->
    
    <div class="container" >
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading" >Inloggen</h2><br/>
                    <div id="login-form">
				<form method="post">
					<table align="center" width="30%" border="0">
						<tr>
                                                    <td><input type="text" name="username" placeholder="Gebruikersnaam" required /></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="password" name="password" placeholder="Wachtwoord" required /><hr/></td>
                                                </tr>
						<tr>
                                                    <td><button type="submit" name="btn-login">Inloggen</button></td>
						</tr>
						<tr>
                                                    <td><a href="<?php echo site_url('Registreer'); ?>">Registreren</a></td>
						</tr>
					</table>
				</form>
			</div>
                </div>
            </div>
        </div>
    
    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Diensten</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Knippen</h4>
                    <p class="text-muted">Door gebruikmaking van onze eigen kniptechniek zorgen wij ervoor, dat jouw haar ook nadat het gewassen is, zijn natuurlijke valling en model behoud. Dit vereist heel veel creativiteit en ervaring.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Drogen</h4>
                    <p class="text-muted">Onze uitgebreide manier van haren drogen geeft je het mooiste resultaat. We kunnen bijvoorbeeld gekruld haar stijl fohnen of de prachtige ‘Victoria Secret slag’ creëren.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Kleuren</h4>
                    <p class="text-muted"> Een persoonlijke haar analyse en een professionele kleuradvies behoort standaard in ons servicepakket. Wij zoeken jouw kleur in ons gevarieerd kleurenpallet.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Over</h2>
                    <h3 class="section-subheading text-muted">Samen met een gedreven team haarstylisten staan we in voor dit toonaangevend en vooruitstrevend salon, waarbij creativiteit, ontwikkeling en vakkennis een belangrijke basis vormen. Service & kwaliteit, daar staan wij voor.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <div class="col-lg-12 text-right">
                            <h4>Openingsuren</h4>
                            <h4 class="subheading"></h4>
                        </div>
                        <div class="col-lg-12 text-right">
                            <p class="text-muted">
                                Maandag: Gesloten </br>
                                Dinsdag: Gesloten </br>
                                Woensdag: 09:00 - 19:00 </br>
                                Donderdag: 09:00 - 19:00 </br>
                                Vrijdag: 09:00 - 19:00 </br>
                                Zaterdag: 09:00 - 19:00 </br>
                                Zondag: 09:00 - 12:00 </br>
                            </p><br/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-circle img-responsive" src="<?php echo base_url(); ?>/assets/img/about/1.jpg" width="200" height="200">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <hr/><center><h4 class="subheading">Onze Locatie</h4></center></br>
                    <div id='location-canvas' style='width:100%;height:450px;'></div>
                        <table class="tablefancy" align="center">
                            <tr>
                                <td>
                                    <script src="http://maps.googleapis.com/maps/api/js"></script>
                                    <script>
                                        function initialize() {
                                            var mapOptions = {
                                               zoom: 13,
                                               scrollwheel: false,
                                               center: new google.maps.LatLng(50.929040, 5.395317),   
                                               mapTypeId: google.maps.MapTypeId.ROADMAP
                                            };

                                            var map = new google.maps.Map(document.getElementById('location-canvas'),
                                              mapOptions);
                                  
                                            var marker = new google.maps.Marker({
                                               map: map, 
                                               draggable: false, 
                                               position: new google.maps.LatLng(50.929040, 5.395317),
                                               animation:google.maps.Animation.BOUNCE
                                            });
                                            var infowindow = new google.maps.InfoWindow({
                                              content:"Ons Kapsalon!"
                                            });
                                            infowindow.open(map,marker);
            
                                        }
                            
                                        google.maps.event.addDomListener(window, 'resize', initialize);
                                        google.maps.event.addDomListener(window, 'load', initialize);
                         
                                    </script>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <br/><h4 class="subheading">Onze Voorgevel</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="<?php echo base_url(); ?>/assets/img/about/2.jpg" />
                                </td>
                            </tr>
                        </table>    
                </div>   
            </div> 
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Ons team</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="<?php echo base_url(); ?>/assets/img/team/1.jpg" class="img-responsive img-circle" alt="">
                        <h4>Evelien</h4>
                        <!--<p class="text-muted">Functie</p>-->
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="<?php echo base_url(); ?>/assets/img/team/2.jpg" class="img-responsive img-circle" alt="">
                        <h4>Jan</h4>
                        
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="<?php echo base_url(); ?>/assets/img/team/3.jpg" class="img-responsive img-circle" alt="">
                        <h4>Leen</h4>
                        
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="<?php echo base_url(); ?>/assets/img/team/4.jpg" class="img-responsive img-circle" alt="">
                        <h4>Marcella</h4>
                        
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="<?php echo base_url(); ?>/assets/img/team/5.jpg" class="img-responsive img-circle" alt="">
                        <h4>Lien</h4>
                        
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="<?php echo base_url(); ?>/assets/img/team/6.jpg" class="img-responsive img-circle" alt="">
                        <h4>Kerima</h4>
                        
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">
                        Kreatief kiest ervoor om met een evenwichtig team te werken, waarin elk lid zijn sterktes en specialisaties heeft.<br />
                        Zo proberen we te zoeken naar de ideale match tussen ons en jou als klant.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Aside -->
<!--    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/envato.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/themeforest.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside>-->
    
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact</h2>
                    <p class="text-primary">Contacteer ons via onderstaand formulier.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Naam *" id="name" required data-validation-required-message="Vul je Naam in.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email *" id="email" required data-validation-required-message="Vul je E-mailadres in.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Gsm *" id="phone" required data-validation-required-message="Vul je telefoonnummer in.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Bericht *" id="message" required data-validation-required-message="Vul je bericht in."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Verstuur</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Kapsalon</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="http://www.twitter.com"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="http://www.facebook.com"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#" data-toggle="modal" data-target="#myModal">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                     <!-- Modal -->
                     <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
    
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h3 class="modal-title">Privacy Policy</h3>
                                    </div>
                                <div class="modal-body">
                                        <p>Your privacy is important to us. To better protect your privacy we provide this notice explaining our online information practices and the choices you can make about the way your information is collected and used. To make this notice easy to find, we make it available on our homepage and at every point where personally identifiable information may be requested. </p>
                                        <p>Please read the following carefully. If you have any questions or concerns, please send us an email at <a href="mailto:info@kapsalon.be">info@kapsalon.be</a>.</p>
                                        <h3>Gathering and Use of Information</h3>
                                        <p>kapsalon will never willfully disclose any personally identifiable information about our online audience to any third party without first receiving the user's permission. We do not collect personally identifiable information from our visitors other than what is supplied to us on a voluntary basis.</p>
                                        <p>Visitors to the kapsalon Web Site may voluntarily supply certain personally identifiable information in connection with (i)contest or sweepstakes registration, (ii) subscription registration for sites or services which require subscription (such as email newsletters), (iii) requests for membership information and (iv) e-commerce transactions. In addition, personally identifiable information is voluntarily provided in connection with certain content submissions, community postings (i.e., forums or bulletin boards), comments and suggestions, or voting.</p>
                                        <p>Some of our sites contain links to other sites whose information practices may be different than ours. Visitors should consult the other sites' privacy notices as we have no control over information that is submitted to, or collected by, these third parties.</p>
                                        <p>kapsalon may use such information only for conducting the activities stated above, for internal marketing and promotional purposes, or, on occasion, when mailing lists are made available to other organizations. (The occasional provision of mailing lists to such organizations is the only case where such information would be provided to third parties).<br><br>For more information regarding kapsalon's policies on the handling and use of kapsalon's membership list, please see kapsalon's Membership List Policy. The extent of such use is always explained at the time a site visitor provides such information.<br><br>If the visitor does not want this information collected and used by us for the disclosed internal purposes, the visitor is given an opportunity to 'opt-out.' Our visitors need to recognize, however, that under certain circumstances, if they select to 'opt-out' they may not be eligible for certain activities for which the personally identifiable information is needed. (For example, if a contest participant elects to 'opt-out' on permitting us to collect and use their personal information, we cannot contact them if they win without using such information.)</p>
                                        <h3>Acceptance of these kapsalon Web Site Privacy Policy Terms and Conditions</h3>
                                        <p>By using this site, you signify your agreement to the terms and conditions of this kapsalon Web Site Privacy Policy. If you do not agree to these terms and conditions, please do not use the site. We reserve the right, at our sole discretion, to change, modify, add, or remove portions of this policy at any time.<br><br>From time to time, kapsalon may update this privacy notice. We will notify you about material changes in the way we treat personally identifiable information by placing a notice on our site. We encourage you to periodically check back and review this policy so that you always will know what information we collect, how we use it, and to whom we disclose it. Your continued use of the kapsalon Web Site following the posting of any changes to these terms shall mean that you have accepted those changes.<br><br>Should you have other questions or concerns about these privacy policies, please email us at <a href="mailto:info@kapsalon.be">info@kapsalon.be</a>.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                                </div>
      
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>/assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/classie.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url(); ?>/assets/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>/assets/js/agency.js"></script>

</body>

</html>
