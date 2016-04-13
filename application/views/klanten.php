<!--************************** KLANTENPAGINA na inloggen *****************************-->
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
  <center><table>
    <tr>
      <td><img src="http://foxhound-ent.com/wp-content/uploads/2015/06/dummy_profpic.jpg" width="100" height="100"/><br/>Kapper 1</td>
      <td><img src="http://foxhound-ent.com/wp-content/uploads/2015/06/dummy_profpic.jpg" width="100" height="100"/><br/>Kapper 2</td>
      <td><img src="http://foxhound-ent.com/wp-content/uploads/2015/06/dummy_profpic.jpg" width="100" height="100"/><br/>Kapper 3</td>
      <td><img src="http://foxhound-ent.com/wp-content/uploads/2015/06/dummy_profpic.jpg" width="100" height="100"/><br/>Kapper 4</td>
      <td><button onclick="buttonToevoegen()">Toevoegen</button>
          <hr/>
          <button onclick="buttonVerwijderen()">Verwijderen</button>
          <hr/>
          <button onclick="buttonWijzigen()">Wijzigen</button></td>
    </tr>
  </table></center>
  <script type='text/javascript'>
  function buttonToevoegen() {
    alert("Toevoegen!");
  }
  function buttonVerwijderen(){
    alert("Verwijderen!");
  }
  function buttonWijzigen(){
    alert("Wijzigen!");
  }
  </script>
  </body>
</html>
