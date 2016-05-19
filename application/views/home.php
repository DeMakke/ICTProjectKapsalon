<!--************************** HOMEPAGINA in Admingedeelte *****************************-->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welkom <?= $this->session->userdata('username') ?></title>
    
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>/assets/css/sb-admin.css" rel="stylesheet">

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
                    <li class="active">
                        <a href="home"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="Personeel"><i class="fa fa-fw fa-desktop"></i> Personeel</a>
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
                            <h3><img src="https://upload.wikimedia.org/wikipedia/commons/b/b0/Light_green_check.svg" width="30" height="30"/> Proficiat! U bent succesvol aangemeld</h3>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

               

            </div>
            <!-- /.container-fluid -->
            <center><p><h4>Welkom op het dashboard, hier kan je de instellingen aanpassen/bekijken van het systeem</h4><br/>
                Ga naar de tab personeel om je personeel toe te voegen/verwijderen/bekijken<br/>
                Ga naar de tab klanten om door je klantenbestand te bladeren en eventueel overbodige (oude) klanten te verwijderen<br/>
                Ga naar de tab afspraak om je afspraken te bekijken en te beheren<br/><br/>
                Dit is het admingedeelte, hier kunnen de ingelogde klanten dus nooit opgeraken...<br/>
                Voor hun is er een aparte zone voorzien met enkel de benodigde functies<br/></p></center><br/>
            <center><h4>Aantal geregistreerde Klanten / Gemaakte afspraken</h4></center>
            <center><div id="grafiek" style="height: 250px; width: 60%;"></div><hr/></center>
            <center><img src="<?php echo base_url(); ?>/assets/img/admin.png" width="150"height="150"/></center> 
            <script>
                new Morris.Area({
                // ID of the element in which to draw the chart.
                 element: 'grafiek',
                // Chart data records -- each entry in this array corresponds to a point on
                // the chart.
                data: [
                     { year: '2012', Aantal: 20, Afspraken: 3 },
                     { year: '2013', Aantal: 12, Afspraken: 14 },
                     { year: '2014', Aantal: 22, Afspraken: 26 },
                     { year: '2015', Aantal: 26, Afspraken: 30 },
                     <?php echo '{ year: "'.date("Y").'", Aantal: '.$query.', Afspraken: '.$query1.'}'  ?>
                ],
                // The name of the data record attribute that contains x-values.
                xkey: 'year',
                // A list of names of data record attributes that contain y-values.
                ykeys: ['Aantal','Afspraken'],
                // Labels for the ykeys -- will be displayed when you hover over the
                // chart.
                labels: ['Aantal','Afspraken']
                });
            </script>

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
    <!--<script src="<?php echo base_url(); ?>/assets/js/plugins/morris/morris.min.js"></script>-->
    <!--<script src="<?php echo base_url(); ?>/assets/js/plugins/morris/morris-data.js"></script>-->

    

</body>

</html>
