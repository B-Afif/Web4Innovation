<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php $conn = mysqli_connect('localhost', 'root', 'root', 'Web4Innovation');
            mysqli_query($conn,"SET NAMES 'utf8'");
    ?>
    <title>Web4Innovation</title>

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
            <div class="col-lg-11">
                <h1 class="page-header">
                    Listes de candidatures
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Candidatures a confirmer</li>
                </ol>
            </div>
           
            
        </div>
        <!-- /.row -->
        <?php
        $messagesParPage=5; //Nous allons afficher 5 messages par page.
         
        //Une connexion SQL doit être ouverte avant cette ligne...
        $retour_total=mysqli_query($conn,'SELECT COUNT(*) AS total FROM Candidature GROUP BY valide'); //Nous récupérons le contenu de la requête dans $retour_total
        $donnees_total=mysqli_fetch_assoc($retour_total); //On range retour sous la forme d'un tableau.
        $total=$donnees_total['total']; //On récupère le total pour le placer dans la variable $total.
         
        //Nous allons maintenant compter le nombre de pages.
        $nombreDePages=ceil($total/$messagesParPage);
         
        if(isset($_GET['page'])) // Si la variable $_GET['page'] existe...
        {
             $pageActuelle=intval($_GET['page']);
         
             if($pageActuelle>$nombreDePages) // Si la valeur de $pageActuelle (le numéro de la page) est plus grande que $nombreDePages...
             {
                  $pageActuelle=$nombreDePages;
             }
        }
        else // Sinon
        {
             $pageActuelle=1; // La page actuelle est la n°1    
        }
         
        $premiereEntree=($pageActuelle-1)*$messagesParPage;

        $sql = 'SELECT p.titre,p.idProjet,c.idCandidature FROM Projet p,Etudiant e, Postulation po, Candidature c WHERE ((c.idCandidature=po.idCandidature)AND(e.idEtudiant=po.idEtudiant)AND(c.idProjet=p.idProjet)AND(c.valide=0)) GROUP BY c.idCandidature ORDER BY c.dateCandidature LIMIT '.$premiereEntree.', '.$messagesParPage.'';

        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)) {
        ?>
        <!-- Project One -->
        <div class="row" align="left">
            <div class="col-md-7">
                <a href="Projet.php?idProjet=<?php echo $row['idProjet']; ?>">
                    <img id="epfl" class="img-responsive img-hover" src="epfl.png" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <a href="Projet.php?idProjet=<?php echo $row['idProjet']; ?>"><h3><?php echo $row["titre"]; ?></h3></a>
                 <h4>Listes des etudiants</h4>
                  <p>  
                  <ul class="list">

<?php
                $r = $row["idCandidature"];
                $sql2 = "SELECT c1.idCandidature,e1.idEtudiant,e1.nom,e1.prenom FROM Etudiant e1, Postulation po1, Candidature c1 WHERE ((c1.idCandidature=po1.idCandidature)AND(e1.idEtudiant=po1.idEtudiant)AND(c1.idCandidature='{$r}')) ";
                $result2 = mysqli_query($conn, $sql2);
                while($row2 = mysqli_fetch_assoc($result2)) {



?>

               
               
                <a href="#"><li><?php echo $row2["nom"]; echo " "; echo $row2["prenom"]; ?></li></a>
 <?php
 }
 ?>                             

                  </ul>
                </p>
                <a  href="valider.php?id=<?php echo $row['idCandidature'] ?>"><p class="btn btn-primary" >Valider</i></p></a>
                <a  href="refuser.php?id=<?php echo $row['idCandidature'] ?>"><p class="btn btn-primary">Refuser</i></p></a>
            </div>
        </div>
        <br>
        <hr>
        <!-- /.row -->

<?php
}
?>

<hr>

<!-- Pagination -->
<div class="row text-center">
<div class="col-lg-12">
<ul class="pagination">

<?php

for($i=1; $i<=$nombreDePages; $i++) //On fait notre boucle
{
     //On va faire notre condition
     if($i==$pageActuelle) //Si il s'agit de la page actuelle...
     {  
        ?>
        <li class="active">
        <a href="#"><?php echo ''.$i.''; ?></a>
        </li>
<?php
          
     }  
     else //Sinon...
     {
          ?>
        <li>
        <?php echo ' <a href="candidature.php?page='.$i.'">'.$i.'</a> '; ?>
        </li>
<?php
     }
}
echo '</p>';
?>

</ul>
</div>
</div>
<!-- /.row -->

<hr>

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