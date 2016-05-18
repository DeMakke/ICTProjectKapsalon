<!--************************** AFSPRAAKPAGINA in Usergedeelte *****************************-->
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
    <link href="<?php echo base_url(); ?>/assets/css/afspraakCSS.css" rel="stylesheet">

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
                            <a href="profielUser"><i class="fa fa-fw fa-user"></i> Profiel</a>
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
        
                    <li class="active">
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
                            Afspraak
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Afspraak
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

               

            </div>
            <!-- /.container-fluid -->
            <form method="post" action="">
            <table class="tabelafspraak">
                <tr>
                    <td><center><h3>Selecteer een behandeling</h3></center></td>
                    <td><center><h3 id="persSelectTitel" style="display: none;">Selecteer een kapster</h3></center></td>
                    <!--<td><center><h3 id="maandSelectTitel" style="display: none;">Selecteer een maand</h3></center></td>-->
                    <td><center><h3 id="dagSelectTitel" style="display: none;">Selecteer een dag</h3></center></td>
                    <td><center><h3 id="uurSelectTitel" style="display: none;">Selecteer een uur</h3></center></td>
                </tr>
                <tr>
                    <td>
                        <center>
                            <select id="typeSelect" name="typeSelect" onchange="showSelect('persSelect')" required>
                            <?php foreach($behandelingen as $behandeling): ?>
                        
                                <option value= "<?php echo $behandeling->BehandelingID;?>"><?php echo $behandeling->Type;?></option>
                                                  
                            <?php endforeach; ?>
                                </select>
                        </center>
                    </td>
                    <td>
                        <center>
                            <select style="display: none;" name="persSelect" id="persSelect" onchange="showSelect('dagSelect')" required>
                                <option class="placeholder" selected disabled value="">Kies een kapster</option>
                            <?php foreach($personeel as $personel): ?>
                        
                                <option value='<?php echo $personel->KapsterID;?>'><?php echo $personel->Voornaam;?></option>
                                                  
                            <?php endforeach; ?>
                            </select>
                        </center>
                    </td>
                    <td>
                        <center>
                            <select style="display: none;" name="dagSelect" id="dagSelect" onchange="showSelect('uurSelect')" required>
                                <option class="placeholder" selected disabled value="">Kies een dag</option>
                                <?php
                                $weekbegin = strtotime("Tomorrow");
                                
                                $dagen = array(
                                    1=>$weekbegin,
                                    2=>strtotime("+1 day",$weekbegin),
                                    3=>strtotime("+2 day",$weekbegin),
                                    4=>strtotime("+3 day",$weekbegin),
                                    5=>strtotime("+4 day",$weekbegin),
                                    6=>strtotime("+5 day",$weekbegin),
                                    7=>strtotime("+6 day",$weekbegin),
                                );
                                
                                foreach($dagen as $index => $dag):
                                    if ((date("w",$dag)) != 1 && (date("w",$dag)) != 2) { //maandag en dinsdag -> niet open ?> 
                                        <option value="<?php printf($index);?>"><?php echo date("l",$dag);?></option>
                                    <?php
                                    };  
                                endforeach; ?>
                            </select>
                        </center>
                    </td>
                    <td>
                        <center>
                            <select style="display: none;" name="uurSelect" id="uurSelect" required>
                                <option class="placeholder" selected disabled value="">Kies een tijdstip</option>
                            <?php 
                            $dagbegin = strtotime("8:00");
                                
                            $uren = array();
                            $i = 0;
                            while ($dagbegin < strtotime("19:00")){
                                $uren[$i] = $dagbegin;
                                $dagbegin = strtotime("+30 minutes",$dagbegin);
                                $i++;
                            }
                            
                            foreach($uren as $index => $uur):?>
                                <option value="<?php echo date("H:i",$uur);?>"><?php echo date("H:i",$uur);?></option>
                            <?php endforeach; ?>
                            </select>
                        </center>
                    </td>
                    <td><button type="submit" name="btn-afspraak" class="button" value="afpraak">Afspraak maken</button></td>
                </tr>
            </table>
            </form>
            
            <table class="tabelafspraak"><hr/>
                <tr>
                    <td>blabla</td>
                </tr>
                <?php 
                
                $j = 0;
                //while($j < $aantal): ?>
                <tr>
                    <td><center><?php //echo $afspraakTijd; ?></center></td>
                    <td><center><?php //echo $afspraakKlant; ?></center></td>
                    <td><center><?php //echo $afspraakBehandeling; ?></center></td>
                    <td><center><?php //echo $afspraakKapster; ?></center></td>
                </tr>
                <?php 
                $j++;
                //endwhile; ?>
            </table>
        </div>
        
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!--javascript afspraak content-->
    <script src="<?php echo base_url(); ?>/assets/js/afspraak.js"></script>
    
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