<!--************************** PROFIELPAGINA REGISTREER in Usergedeelte *****************************-->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welkom <?php $data = $this->session->userdata('usersessie'); echo $data['username'] ?></title>

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
                <a class="navbar-brand" href="homeUser">User Pagina</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php $data = $this->session->userdata('usersessie'); echo $data['username'] ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profiel</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?= site_url('homeUser/logout') ?>"><i class="fa fa-fw fa-power-off"></i> Uitloggen</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="homeUser"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="afspraakUser"><i class="fa fa-fw fa-edit"></i> Afspraak</a>
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
                            Profiel
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Uw Profiel
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

               

            </div>
            <!-- /.container-fluid -->
            <!--<p>&nbsp;&nbsp;&nbsp;&nbsp;<img src="http://www.kanakkan.com/images/14588894232049024503dummy_profpic.jpg" width="150"height="150" alt="Dummy"/></p>
            <br/>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;Gegevens: <?php $data = $this->session->userdata('usersessie'); echo $data['username']; ?></p>
            <p><?php if($this->session->flashdata('flashSuccess')):?>
                <p class='flashMsg flashSuccess'> <?=$this->session->flashdata('flashSuccess')?> </p>
                    <?php endif?></p>-->
        
		<center>
			<div id="addprofiledata">
                            <h2>Vervolledig je profiel!</h2>
                            <!--<h1><img src="https://cdn0.iconfinder.com/data/icons/academics-linear-black/2048/Register-512.png" width="80"height="80"/>Gelieve te registreren</h1>-->
				<form method="post">
					<table align="center" width="40%" border="0" class="profiledata">
						<tr>
                                                    <td><input class="form-control" name="surname" placeholder="Voornaam" type="text" value="<?php echo set_value('surname'); ?>" required="required" /><?php echo form_error('surname'); ?></td><br/>
                                                     
						</tr>
						<tr>
							<td><input class="form-control" name="name" placeholder="Achternaam" type="text" value="<?php echo set_value('name'); ?>" required="required"/><?php echo form_error('name'); ?></td><br/>
                                                        
						</tr>
                                                <tr>
							<td><input class="form-control" name="email" placeholder="Email" type="email" value="<?php echo set_value('email'); ?>" required="required"/><?php echo form_error('email'); ?></td><br/>
                                                        
						</tr>
						<tr>
                                                    <td><input class="form-control" name="phone" placeholder="Telefoon" type="tel" value="<?php echo set_value('phone'); ?>" required="required" /><?php echo form_error('phone'); ?></td><br/>
                                                      
                                                </tr>
                                                <tr>
                                                    <td><form action="<?php echo set_value('gender'); ?>">
                                                        <input type="radio" name="gender" value="Man"> Man
                                                        <input type="radio" name="gender" value="Vrouw"> Vrouw
                                                        <?php echo form_error('gender'); ?></form></td><br/>
                                                   
                                                </tr>   
						<tr>
                                                    <td id="lastrowprofiel"><button type="submit" name="btn-signup" id="button">Voeg Toe</button></td>
						</tr>
					</table>
				</form>
			</div>
		</center>
            
            
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