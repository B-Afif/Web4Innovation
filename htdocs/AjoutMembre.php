<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

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
                        <a href="indexTunes.html">Projets</a>
                    </li>
                    <li>
                        <a href="AjoutMembre.php">Ajouter un membre</a>
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
                <h1 class="page-header">
                   Ajouter un membre
                </h1>
                <ol class="breadcrumb">
                    <li><a href="indexTunes.html">Home</a>
                    </li>
                    <li class="active">Ajouter un membre</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        
        

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="container" style="center">
        <div class="row">
            <div class="col-md-8">
                <h3>Veuillez remplir ce formulaire</h3>
                <form role="form" action="ajouterJE.php" method="post">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Login</label>
                            <input type="text" class="form-control" name="login" required data-validation-required-message="Saisissez votre login SVP.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Mot de passe</label>
                            <input type="password" class="form-control" name="password" required data-validation-required-message="Saisissez votre mot de passe SVP.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email</label>
                             <input type="email" class="form-control" name="email" required data-validation-required-message="Saisissez votre email SVP.">
                             
                        </div>
                    </div>
                    <div class="control-group form-group">
                       <div class="controls">
                            <label>Ecole</label>
                            <input type="text" class="form-control" name="ecole" required data-validation-required-message="Saisissez votre ecole SVP.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                       <div class="controls">
                            <label>Role</label></br>
                            <h4><input type="radio" name="Role" value = "JETunisienne" aria-label="..."> Association Tunisienne</h4>
                            <h4><input type="radio" name="Role" value = "JESuisse" aria-label="..."> Association Suisse</h4>
                            <div class="control-group form-group">
                                <h4><input type="radio" name="Role" value="Etudiant" aria-label="..."> Etudiant</h4>
                                <div class="controls">
                                  <label>Nom</label>
                                  <input type="text" class="form-control" name="nom" >
                                  <p class="help-block"></p>
                               </div>
                               <div class="controls">
                                  <label>Prenom</label>
                                  <input type="text" class="form-control" name="prenom" >
                                  <p class="help-block"></p>
                               </div>
                               <div class="controls">
                            <label>Cv</label>
                              <input type="file" class="filestyle" >
                        </div>
                    </div>
                    </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" action="ajouterJE.php" class="btn">Envoyer le Message</button>
                </form>
            </div>

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

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <script type="text/javascript" src="js/bootstrap-filestyle.min.js"> </script>
     


</body>

</html>
