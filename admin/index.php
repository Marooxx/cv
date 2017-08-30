
<?php require '/connexion/connexion.php' ?>
<?php
    // Sessicon d'identification

session_start();// à mettre sur toutes les pages de l'admin; SESSION et authentification
    if(isset($_SESSION['connexion']) && $_SESSION['connexion']='connecté'){
        $id_utilisateur = $_SESSION['id_utilisateur'];
        $prenom = $_SESSION['prenom'];
        $nom = $_SESSION['nom'];
    }else{// l'utilisateur n'est pas connecté
        header('location:login.php');
    }
// pour se déconnecter
if(isset($_GET['deconnect'])){// on récupère le terme quitter dans l'url
    $_SESSION['connexion'] ='';// on vide les variables de session
    $_SESSION['id_utilisateur'] ='';// on vide les variables de session
    $_SESSION['prenom'] ='';// on vide les variables de session
    $_SESSION['nom'] ='';// on vide les variables de session
    $_SESSION['email'] ='';// on vide les variables de session

    unset($_SESSION['connexion']);
    session_destroy();

    header('location:index.php');
}




?>



<!DOCTYPE html>
<html lang="fr">

<head>
<?php
$sql = $pdocv->query(" SELECT * FROM t_utilisateurs WHERE id_utilisateur = $id_utilisateur ");
$ligne_utilisateur = $sql->fetch();// va chercher information
?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin <?php echo $ligne_utilisateur['prenom'].' '.$ligne_utilisateur['nom'];?></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                <a class="navbar-brand" href="index.php">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">

                                        <h5 class="media-heading"><strong><?php echo $ligne_utilisateur['prenom'].' '.$ligne_utilisateur['nom'];?></strong>

                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?php echo $ligne_utilisateur['prenom'].' '.$ligne_utilisateur['nom'];?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?php echo $ligne_utilisateur['prenom'].' '.$ligne_utilisateur['nom'];?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $ligne_utilisateur['prenom'].' '.$ligne_utilisateur['nom'];?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="index.php?deconnect=oui"><i class="fa fa-fw fa-power-off"></i> LogOut</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                
                     <li>
                        <a href="competence.php"><i class="fa fa-fw fa-edit"></i> Compétences</a>
                    </li>
                     <li>
                        <a href="experience.php"><i class="fa fa-fw fa-edit"></i> Expériences</a>
                    </li>
                    <li>
                        <a href="experience.php"><i class="fa fa-fw fa-edit"></i> Formations</a>
                    </li>
                     <li>
                        <a href="loisir.php"><i class="fa fa-fw fa-bar-chart-o"></i> Loisirs</a>
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
                        <!-- Requête AFFICHAGE -->
                        <?php
                        $sql = $pdocv->query("SELECT * FROM t_titres_cv WHERE utilisateur_id = '1' ");
                        $ligne_accroche = $sql->fetch();// va chercher information
                        ?>
                        <h1 class="page-header">
                            Admin  <small><?php echo $ligne_accroche['accroche'].' '.$ligne_accroche['titre_cv'];?></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Like SB Admin?</strong> Try out <a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link">SB Admin </a> for additional features!
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                      <?php
                        $competence = $pdocv->prepare("SELECT * FROM t_competences WHERE utilisateur_id = '$id_utilisateur' ORDER BY competence ASC ");
                        $competence->execute();// execute la
                        $nbr_competences = $competence->rowCount();
                        ?>

                        <!-- SECTION COMPETENCE -->

                    <div class="col-lg-2 col-md-2">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-3x"></i>
                                    </div>


                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $nbr_competences; ?></div>
                                        <div>COMPETENCES</div>
                                    </div>
                                </div>
                            </div>
                            <!-- LIen page  "COMPETENCE" -->
                            <a href="competence.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--     /. SECTION COMPETENCE               -->

                    <?php
                    $xp = $pdocv->prepare("SELECT * FROM t_experiences WHERE utilisateur_id = '$id_utilisateur' ORDER BY experience ASC ");
                    $xp->execute();// execute la
                    $nbr_experiences = $xp->rowCount();
                    ?>

                    <!--   SECTION EXPERIENCES                 -->
                    <div class="col-lg-2 col-md-2">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-3x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $nbr_experiences; ?></div>
                                        <div>EXPERIENCES</div>
                                    </div>
                                </div>
                            </div>
                             <!-- LIen page  "EXPERIENCE" -->
                            <a href="experience.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--  /. SECTION EXPERIENCES                 -->

                      <?php
                        $formation = $pdocv->prepare("SELECT * FROM t_formations WHERE utilisateur_id = '$id_utilisateur' ORDER BY formation ASC ");
                        $formation->execute();// execute la
                        $nbr_formations = $formation->rowCount();
                        ?>

                        <!-- SECTION FORMATION -->

                    <div class="col-lg-2 col-md-2">
                        <div class="panel panel-purple">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-3x"></i>
                                    </div>


                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $nbr_formations; ?></div>
                                        <div>FORMATIONS</div>
                                    </div>
                                </div>
                            </div>
                            <!-- LIen page  "Formation" -->
                            <a href="formation.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>


                    <?php
                    $realisation = $pdocv->prepare("SELECT * FROM t_realisations WHERE utilisateur_id = '$id_utilisateur' ORDER BY realisation ASC ");
                    $realisation->execute();// execute la
                    $nbr_realisations = $realisation->rowCount();
                    ?>

                        <!-- SECTION REALISATIONS                    -->
                    <div class="col-lg-2 col-md-2">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-3x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $nbr_realisations; ?></div>
                                        <div>REALISATIONS</div>
                                    </div>
                                </div>
                            </div>
                            <a href="realisation.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                     <!--  /.SECTION REALISATIONS                  -->

                    <?php
                    $loisir = $pdocv->prepare("SELECT * FROM t_loisirs WHERE utilisateur_id = '$id_utilisateur' ORDER BY loisir ASC ");
                    $loisir->execute();// execute la
                    $nbr_loisirs = $loisir->rowCount();
                    ?>
                        <!--  SECTION LOISIRS                     -->
                    <div class="col-lg-2 col-md-2">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-3x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $nbr_loisirs;?></div>
                                        <div>LOISIRS</div>
                                    </div>
                                </div>
                            </div>
                            <a href="loisir.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- /.SECTION LOISIRS -->
                </div>
                <!-- /.row -->

              
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
