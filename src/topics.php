<?php
session_start();
include_once ('app/database/database.php');

$statement = $conn->prepare('SELECT * FROM replies');
$statement->execute();
$replies = $statement->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>forum van mike ottens</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

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
                <?php
                if (isset($_SESSION['username'])){
                    echo '<li><a href="app/logout.php">Logout</a></li>';
                } else{
                    echo '
                <li><a href="sign_up.php">sign up</a></li>
                <li><a href="login.php">log in</a></li>
                ';
                }
                ?>


            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div class="container">


    <div class="row">
        <!-- Blog Post Content Column -->
            <div class="col-lg-8">
                <div class="page-header">
                    <h3>topics</h3>
                </div>
                <div class="list-group">
                    <a href="#" class="list-group-item">
                        <h4 class="list-group-item-heading">topic name</h4>
                        <p class="list-group-item-text">Topic description</p>
                    </a>
                    <a href="#" class="list-group-item">
                        <h4 class="list-group-item-heading">topic name</h4>
                        <p class="list-group-item-text">topic description</p>
                    </a>
                    <a href="#" class="list-group-item">
                        <h4 class="list-group-item-heading">topic name</h4>
                        <p class="list-group-item-text">Topic description</p>
                    </a>
                    <a href="#" class="list-group-item">
                        <h4 class="list-group-item-heading">topic name</h4>
                        <p class="list-group-item-text">topic description</p>
                    </a>
                    <a href="#" class="list-group-item">
                        <h4 class="list-group-item-heading">topic name</h4>
                        <p class="list-group-item-text">topic description</p>
                    </a>
                </div>
            </div>

        <div class="col-md-4">
            <div class="page-header">
                <h3>Recent topics</h3>
            </div>
            <div class="list-group">
                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">topic name</h4>
                    <p class="list-group-item-text">topic description</p>
                </a>
                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">topic name</h4>
                    <p class="list-group-item-text">topic description</p>
                </a>
                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">topic name</h4>
                    <p class="list-group-item-text">topic description</p>
                </a>
                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">topic name</h4>
                    <p class="list-group-item-text">topic description</p>
                </a>
                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">topic name</h4>
                    <p class="list-group-item-text">topic description</p>
                </a>
            </div>
        </div>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
