<!--*********************** KALENDER pagina in admingedeelte ***************************-->
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
            <center><h2>Verwijder/bewerk hieronder je personeel!</h2></center><br/>
            <table class="table-fill">
                <thead>
                </thead>
                <tbody class="table-hover">
                   
                      <?php foreach($query as $row): ?>
                        <tr> 
                            
                            <td><?php echo $row->Voornaam;?></td>
                            <td><?php echo $row->Achternaam;?></td>
                            <td><?php echo $row->Straat;?></td>
                            <td><?php echo $row->Nr;?></td>
                            <td><?php echo $row->Plaats;?></td>
                            <td><?php echo $row->Geslacht;?></td> 
                            <td><a href="<?php echo base_url()."/index.php/personeelUpdaten?id=".$row->KapsterID;?>" class="btn btn-info" onclick="return confirm('Are you sure you want to EDIT?')">Edit</a> </td>
                            <td><a href="<?php echo base_url()."/index.php/PersoneelVerwijderen?id=".$row->KapsterID ;?>" class="btn btn-danger" onclick="return confirm('Are you sure to Delete?')">Delete</a></td>

                        </tr>
                     <?php endforeach; ?>
                </tbody>
            </table>
            <br/>
            <p><a href="<?php echo site_url('personeel'); ?>"><img border="0" alt="Toevoegen" src="<?php echo base_url(); ?>/assets/img/go_back.png" width="50" height="50"></a></p>
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