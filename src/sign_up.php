<?php
session_start();
include_once ('app/database/database.php');
include_once('app/register_handler.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Post - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- link voor register -->
    <link href="js/register.js" rel="stylesheet"

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
            <a class="navbar-brand" href="index.php">forum</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="login.php">login</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>


<?= $signup_message ?>
<?= $no_match_msg ?>



<form class="form-horizontal" method="POST">
    <fieldset>

        <!-- Form Name -->
                <div id="legend">
                <legend class=""> Register Here</legend>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-12 control-label" for="username">Username</label>
                    <div class="col-md-12">
                        <input type="text" id="username" name="username" placeholder="Insert your First Name" class="form-control input-md" required="" type="text">
                        <span class="help-block">voer uw username in </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12 control-label" for="email">E-mail</label>
                    <div class="col-md-12">
                        <input type="text" id="email" name="email" placeholder="Email" class="form-control input-md">
                        <span class="help-block">voer hier uw email adres in </span>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-12 control-label" for="password">Password</label>
                    <div class="col-md-12">
                        <input type ="password" id="password" name="password" placeholder="Password" class="form-control input-md">
                        <span class="help-block">voer hier uw wachtwoord in  </span>
                    </div>
                </div>

        <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-12 control-label" for="password_confirm">Password (Confirm)</label>
                    <div class="col-md-12">
                        <input type="password" id="password_confirm" name="password_confirm" placeholder="Confirm your Password" class="form-control input-md">
                        <span class="help-block">voer hier uw wachtwoord nogmaals in </span>
                    </div>
                </div>

                <!-- Button -->
                <div class="control-group">
                    <!-- Button -->
                    <div class="controls">
                        <input type="submit" value = "Register" class="form-control btn btn-register" name="login-submit">
                    </div>
                </div>

            </fieldset>
        </form>

    </div>
</div>
<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>

