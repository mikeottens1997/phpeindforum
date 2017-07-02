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
                    echo '<li><a> ingelogd als  ' . $_SESSION['username'] . '</li></a>';

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

            <!-- Comments Form -->
            <div class="well"
                 <h4>new onderwerp</h4>
            <form role="form" method="POST" action="app/topic_handler.php">
                <input type="hidden" name="topic_id" value="1">
            <div class="form-group">

                <label class="col-md-12 control-label" for=" nieuw onderwerp">nieuw onderwerp</label>
                <div class="col-md-12">
                    <input type="text" id="subject" name="subject" placeholder="onderwerp" class="form-control input-lg">

                    <div class="form-group">
                        <textarea class="form-control" name="content"  placeholder="vul hier uw tekst in" rows="3"></textarea>
                    </div>
                    <div>
                        <button <a href=" new_topic.php" type="submit" class="btn btn-primary"</a>Submit</button>

                </div>
            </div>

            </form>
            </div>




        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; mike ottens 2017</p>
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
