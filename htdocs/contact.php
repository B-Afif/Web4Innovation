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
                        <a href="#">Log Out</a>
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
					Contact
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index2.php">Home</a>
                    </li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
                <!-- Embedded Google Map -->
<iframe src="https://www.google.fr/maps/embed?pb=!1m18!1m12!1m3!1d9974.034299137744!2d6.568537203022748!3d46.51811296849795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c30fdddeca23f%3A0xbbcc34ab7f93b272!2sSwiss+Federal+Institute+of+Technology+Lausanne!5e0!3m2!1sen!2s!4v1438290350096" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Détails</h3>
                <p>
                    Route Cantonale<br>1015 Lausanne, Suisse<br>
                </p>
 
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="https://www.facebook.com/web4Innovation?fref=ts"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/web4Innovation"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>

                </ul>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                <h3>Envoyer Nous Un Message</h3>
                <form action="valider.php" method="GET">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Nom Complet:</label>
                            <input type="text" class="form-control" id="name" name="name" required data-validation-required-message="Saisissez votre nom SVP.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Numero de Téléphone:</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required data-validation-required-message="Saisissez votre numéro de téléphone SVP.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email:</label>
                            <input type="email" class="form-control" id="email" name ="email" required data-validation-required-message="Saisissez votre adresse email SVP.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" name="message" required data-validation-required-message="Saisissez votre message SVP." maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Envoyer le Message</button>
                </form>
            </div>

        </div>




        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Web4Innovation</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    
</body>

</html>
