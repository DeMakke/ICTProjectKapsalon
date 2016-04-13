<!--************************** AFSPRAAKPAGINA na inloggen *****************************-->
<!DOCTYPE html>
<html>
  <head>
    <meta content="text/html; charset=utf-8" />
    <title>Welkom <?= $this->session->userdata('username') ?></title>
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>/assets/css/style.css">
  </head>
  <body>
    <div id="header">
	     <div id="left">
          <label>Admin Pagina</label>
       </div>
       <div id="right">
    	    <div id="content">
        	   Welkom <?= $this->session->userdata('username') ?>&nbsp;, <a href="<?= site_url('home/logout') ?>">Logout</a>
          </div>
       </div>
    </div>
  <ul>
    <li><a href="home">Home</a></li>
    <li><a href="kalender">Kalender</a></li>
    <li><a href="klanten">Klanten</a></li>
    <li><a href="afspraak">Afspraak maken</a></li>
  </ul>
  <br/>
  <center>
    <h1>Pagina om een afspraak te maken</h1>
    </center>

  </body>
</html>