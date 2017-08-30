<?php require '/connexion/connexion.php' ?>

<?php
    # Gestion des contenus, mise à jour d'une FORMATION#
    if(isset($_POST['formation'])){ // par le nom du premier input
        $formation = addslashes($_POST['formation']);
        $id_formation = $_POST['id_formation'];
        $pdocv->exec("UPDATE t_formations SET formation = '$formation' WHERE id_formation ='$id_formation'");
        header('location:../admin/formation.php');// le header pour revenir à la liste des compétences de l'utilisateur
        exit();

    }
    
# Je récupère la compétence
$id_formation = $_GET['id_formation'];// par l'id et $_GET
$sql = $pdocv->query("SELECT * FROM t_formations WHERE id_formation = '$id_formation' "); // la requête égale à l'id
$ligne_formation = $sql->fetch();//


?>

<!DOCTYPE html>
<html lang="fr">

<head>
<?php
$sql = $pdocv->query("SELECT * FROM t_utilisateurs WHERE id_utilisateur = '$id_utilisateur' ");
$ligne_utilisateur = $sql->fetch();// va chercher information
?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Admin <?php echo $ligne_utilisateur['prenom'].' '.$ligne_utilisateur['nom'];?></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

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
                <a class="navbar-brand" href="index.php">Admin</a>
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
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                  
                     <li>
                        <a href="competence.php"><i class="fa fa-fw fa-edit"></i> COMPETENCES</a>
                    </li> 
                    <li>
                        <a href="experience.php"><i class="fa fa-fw fa-edit"></i> EXPERIENCES</a>
                    </li> 
                    <li class="active">
                        <a href="loisir.php"><i class="fa fa-fw fa-edit"></i> lOISIRS</a>
                    </li>
                     <li>
                        <a href="formation.php"><i class="fa fa-fw fa-edit"></i> FORMATIONS</a>
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
                        <h1 class="page-header">Modification formation(s)</h1>



                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i>Formations
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">

                    </div>
                </div>
 <div class="row">
    <form class="form-horizontal" method="post" action="modif_formation.php">
    <fieldset>

    <!-- Form modification d'une compétence -->
    <legend style="text-align:center;"> Modification d'une formation</legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="formation"></label>
      <div class="col-md-4">
      <input id="formation" name="formation" type="text"  class="form-control input-md" value="<?php echo $ligne_formation['formation']; ?>">
      <input hidden name="id_formation" value="<?php echo $ligne_formation['id_formation']; ?>">

      </div>
    </div> 
        
        
    <div class="form-group">
      <label class="col-md-4 control-label" for="etablissement_f"></label>
      <div class="col-md-4">
      <input id="formation" name="formation" type="text"  class="form-control input-md" value="<?php echo $ligne_formation['etablissement_f']; ?>">
      <input hidden name="id_formation" value="<?php echo $ligne_formation['id_formation']; ?>">

      </div>
    </div> 
        
        <div class="form-group">
      <label class="col-md-4 control-label" for="dates"></label>
      <div class="col-md-4">
      <input id="formation" name="formation" type="text"  class="form-control input-md" value="<?php echo $ligne_formation['dates_f']; ?>">
      <input hidden name="id_formation" value="<?php echo $ligne_formation['id_formation']; ?>">

      </div>
    </div> 
        
    <div class="form-group">
      <label class="col-md-4 control-label" for="formation"></label>
      <div class="col-md-4">
      <input id="formation" name="formation" type="text"  class="form-control input-md" value="<?php echo $ligne_formation['description_f']; ?>">
      <input hidden name="id_formation" value="<?php echo $ligne_formation['id_formation']; ?>">

      </div>
    </div>

    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="button"></label>
      <div class="col-md-4">
        <input  type="submit" class="btn btn-primary" value="Mettre à jour">
    </div>


    </div>

    </fieldset>
    </form>
    <!-- Fin formulaire  -->
</div>


                <!-- /.row -->



                        </div>
                    </div>

                </div>
                <!-- /.row -->






    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
