<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url" content="#" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="#" />
    <meta property="og:description" content="#" />
    <meta property="og:image" content="#" />

    <title>WebsiteNaam |   Home</title>

    <!--<link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff"> -->

    <!-- Stylesheets -->
    <link media="all" type="text/css" rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <link media="all" type="text/css" rel="stylesheet" href="css.css"> <!-- HIER PLAATS JE DE LINK NAAR JE CSS BESTAND --> 
    <style>
        *{

	margin:0;
	padding:0;
}
#login-form{
        padding-top:10px;
	padding-right:60px;
	float:right;
	position:relative;
}
    </style>


    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700italic,700,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script src="#"></script> <!-- HIER PLAATS JE DE LINK NAAR JE JAVASCRIPT BESTAND -->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <?php if(isset($_SESSION)) {
        echo $this->session->flashdata('flash_data');
    } ?>

    <!-- NavigatieBalk -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo site_url('Login'); ?>">Home</a></li>
                <li><a href="<?php echo site_url('Formulier'); ?>">Formulier</a></li>
                <li><a href="<?php echo site_url('Fotos'); ?>">Foto's</a></li> 
                 
            </ul>
                        <div id="login-form">
				<form method="post">
					<table align="center" width="30%" border="0">
						<tr>
							<td><input type="text" name="username" placeholder="Gebruikersnaam" required /></td>
							<td><input type="password" name="password" placeholder="Wachtwoord" required /></td>
							<td><button type="submit" name="btn-login">Inloggen</button></td>
							</tr>
							<tr>
							<td><a href="<?php echo site_url('Registreer'); ?>">Registreren</a></td>
						</tr>
					</table>
				</form>
			</div>
        </div>
    </nav>

    <!-- Container -->
    <div class="container">

        <div class="jumbotron">
            <h1>Bootstrap Webpage</h1>
            <p>Resize this responsive page to see the effect!</p> 
        </div>
        <div class="row">
            <div class="col-sm-4">
                <h3>Kolom 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
            <div class="col-sm-4">
                <h3>Kolom 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
            <div class="col-sm-4">
                <h3>Kolom 3</h3> 
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div id="footer-wrapper">
      <div class="footer container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <ul class="list-inline">
              <li><div class="footer-item">WebsiteNaam</div></li>
              <li><div class="footer-item">Telefoonnummer</div></li>
            </ul>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right">
            <div class="footer-item">Copyright &copy; WebsiteNaam 2016 - All Rights Reserved</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap.min.js"></script>

    <script type="text/javascript">
      // HIER PLAATS JE DE CODE VAN GOOGLE ANALYTICS 
    </script>
  </body>
</html>