<!--*********************** PERSONEELTOEVOEGEN pagina in admingedeelte ***************************-->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welkom <?= $this->session->userdata('username') ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>/assets/css/tabelCSS.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url(); ?>/assets/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home">Admin Pagina</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?= $this->session->userdata('username') ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="profiel"><i class="fa fa-fw fa-user"></i> Profiel</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?= site_url('home/logout') ?>"><i class="fa fa-fw fa-power-off"></i> Uitloggen</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="home"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="active">
                        <a href="Personeel"><i class="fa fa-fw fa-bar-chart-o"></i> Personeel</a>
                    </li>
                    <li>
                        <a href="Klanten"><i class="fa fa-fw fa-table"></i> Klanten</a>
                    </li>
        
                    <li>
                        <a href="afspraak"><i class="fa fa-fw fa-edit"></i> Afspraak</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Personeel
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Personeel
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

               

            </div>
            <!-- /.container-fluid -->
           
            <?php foreach ($users as $user): {}?>
                            <center><h2>Update hieronder je personeel!</h2></center>
                            <form method="post">
					<table align="center" id="personeeltoevoegen">
						<tr>
							<td><input class="form-control" name="surname" placeholder="Voornaam" type="text" value="<?php echo set_value('surname',@$user['Voornaam']); ?>" /><?php echo form_error('surname'); ?></td><br/>
                                                        
						</tr>
                                                <tr>
							<td><input class="form-control" name="name" placeholder="Achternaam" type="text" value="<?php echo set_value('name',@$user['Achternaam']); ?>" /><?php echo form_error('name'); ?></td><br/>
                                                        
						</tr>
                                                <tr>
							<td><input class="form-control" name="street" placeholder="Straat" type="text" value="<?php echo set_value('street',@$user['Straat']); ?>" /><?php echo form_error('street'); ?></td><br/>
                                                        
						</tr>
                                                <tr>
                                                    <td><input class="form-control" name="nr" placeholder="Nr" type="number" value="<?php echo set_value('nr',@$user['Nr']); ?>" /><?php echo form_error('nr'); ?></td><br/>
                                                        
						</tr>
                                                <tr>
							<td><input class="form-control" name="city" placeholder="Plaats" type="text" value="<?php echo set_value('city',@$user['Plaats']); ?>" /><?php echo form_error('city'); ?></td><br/>
                                                        
						</tr>
                                                <tr>
							<td><input class="form-control" name="zipcode" placeholder="Postcode" type="Number" value="<?php echo set_value('zipcode',@$user['Postcode']); ?>" /><?php echo form_error('zipcode'); ?></td><br/>
                                                        
						</tr>
                                                <tr>
                                                    <td><input class="form-control" name="phone" placeholder="Telefoon" type="tel" value="<?php echo set_value('phone',@$user['Telefoonnr']); ?>" /><?php echo form_error('phone'); ?></td><br/>
                                                        
						</tr>
                                                <tr>
							<td><input class="form-control" name="cellphone" placeholder="Gsm" type="tel" value="<?php echo set_value('cellphone',@$user['Gsmnr']); ?>" /><?php echo form_error('cellphone'); ?></td><br/>
                                                        
						</tr>
						<tr>
							<td><input class="form-control" name="email" placeholder="Email" type="text" value="<?php echo set_value('email',@$user['Email']); ?>" /><?php echo form_error('email'); ?></td><br/>
                                                        
						</tr>
						<tr>
                                                    <td><input class="form-control" name="dob" placeholder="Geboortedatum" type="date" value="<?php echo set_value('dob',@$user['Geboortedatum']); ?>"/><?php echo form_error('dob'); ?></td><br/>
                                                        
                                                </tr>
                                                <tr>
                                                    <td><form action="<?php echo set_value('gender'); ?>">
                                                        <input type="radio" name="gender" value="Man"> Man
                                                        <input type="radio" name="gender" value="Vrouw"> Vrouw
                                                        <?php echo form_error('gender'); ?></form></td><br/>
                                                    
                                                </tr>   
						<tr>
							<td class="lastrow"><button type="submit" name="btn-signup" class="button">Updaten</button></td>
						</tr>
					</table>
				</form>
			<?php endforeach; ?>
                        
    
                <p><a href="<?php echo site_url('personeel'); ?>"><img border="0" alt="Toevoegen" src="https://cdn2.iconfinder.com/data/icons/windows-8-metro-style/512/left_round.png" width="50" height="50"></a></p>

                        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>/assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url(); ?>/assets/js/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/plugins/morris/morris.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/plugins/morris/morris-data.js"></script>

</body>

</html>