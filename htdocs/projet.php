<!DOCTYPE html>
<html> 

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Connection à la base des donnée -->
       <?php 
        $conn = mysqli_connect('localhost', 'root', 'root', 'Web4Innovation');
        mysqli_query($conn,"SET NAMES 'utf8'");
        //include 'index2.php';
        $id = $_GET['idProjet'];
    ?>
    
    <!-- Selection du titre de la page--> 
    <title>
        <?php 
        $sql = "SELECT * FROM `Projet` WHERE `idProjet`='{$id}'";
        $title = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($title);
        $JE= $row['idJESuisse'];;
        $reqJE="SELECT * FROM JESuisse WHERE idJESuisse = $JE" ;
        $resJE = mysqli_query($conn,$reqJE);
        $rowJE = mysqli_fetch_assoc($resJE);
        echo $rowJE['ecole'].' - '.$row['titre'];
        $t = $row['titre'];
        ?> 
    </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

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

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="logo"><img src="logo3.png"></a>
                <a class="navbar-brand" >Web4innovation</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index2.php">Projets</a>
                    </li>
                    <li>
                        <a href="candidature.php">Candidatures à confirmer</a>
                    </li>
					<li>
                        <a href="about.html">Qui sommes nous?</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                    <li>
                        <a href="logout.php">Log Out</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>



    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo $row['titre']; ?>
                <small>
                    <?php
                        echo $rowJE['ecole'];
                    ?>
                </small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active"><?php echo $t; ?></li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-4 img-portfolio">
                <a href="projet.html">
                    <img class="img-responsive img-hover" src="epfl.png" alt="">


                </a>
                
            </div>

            <div class="col-md-4">
                <h3 class="text-primary">Description du projet</h3>
                <p><?php echo $row['commentaire'] ?></p>
                <h3 class="text-primary">Détails du projet</h3>
                <ul>
                    <li>Titre: <?php echo $row['titre'] ?></li>
                    <li>Budget: <?php echo $row['budget'] ?></li>
                    <li>Date d'ajout: <?php echo date("d-m-Y",strtotime($row['dateAjout'])) ?></li>
                    <li>Statut: <?php 
                        switch ($row['status']) {
                            case 'prod':
                                echo 'En cours de production';
                                break;
                            case 'dev':
                                echo 'En cours de développement';
                                break;
                            case 'test':
                                echo 'En cours de testing';
                                break;
                            default:
                                echo 'Non affecté';
                                break;
                        }

                    /*if
                        (($row['status'] == 'prod') or ($row['status'] == 'test') or ($row['status'] == 'dev')){ echo $row['status'];} 
                                    else echo 'Non affecté';
                        */?></li>
                    <li>Progrès du projet</li>
                </ul>

                <div class="progress" color="black">
                 <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="<?php  
                            if ($row['status'] == 'prod'){
                                echo 'width: 100%';
                            }
                            elseif ($row['status'] == 'test'){
                                echo 'width: 60%';
                            }
                            elseif ($row['status'] == 'dev'){
                                echo 'width: 30%';
                            }
                            else{
                                echo 'width: 0% ">';
                            }
                 ?>">
                 <?php if ($row['status'] == 'prod'){
                                echo 'En cours de production';
                            }
                            elseif ($row['status'] == 'test'){
                                echo 'En cours de Testing';
                            }
                            elseif ($row['status'] == 'dev'){
                                echo 'En Développement';
                            }
                 ?>
                </div>
                </div>
            </div>

        </div>
        <!-- /.row -->

        
        

        
        <!-- Footer -->
<footer align="right">
<div class="row">
<div class="col-lg-12">
<p>Copyright &copy; Web4Innovation</p>
<ul class="list-inline" style="text-align:center">
                <li><a href="http://web4innovation.ch/" onclick="_gaq.push(['_trackEvent', 'exit', 'footer', 'Twitter']);"><i class="fa fa-twitter"></i> Twitter</a> </li>
                <li>
                   <a href="http://web4innovation.ch/" onclick="_gaq.push(['_trackEvent', 'exit', 'footer', 'Google+']);"><i class="fa fa-google-plus"></i> Google+</a>
                </li>
                <li>
                   <a href="https://www.facebook.com/web4Innovation?fref=ts" onclick="_gaq.push(['_trackEvent', 'exit', 'footer', 'Google+']);"><i class="fa fa-facebook"></i> Facebook</a>
                </li>
              

            </ul>
</div>
</div>
</footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
