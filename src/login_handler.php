<?php
 include_once "../src/app/database/database.php";


if (isset($_POST['login-submit'])) {
global $username;
$username = $_POST['username'];
$password = $_POST['password'];

    $login_query=$conn->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
    $login_query->execute([
        ':username'=>$username,
        ':password'=>hash('sha512', $password),
    ]);
    if ($login_query->rowCount() > 0){
        $row = $login_query->fetch();
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        header("location: http://localhost/phpeindforum/src/index.php");
        exit(0);
    }
    else {

        echo '<div class="alert alert-danger text-center" role="alert">
  <a href="login.php" class="alert-link"><h4>verkeerde username of wachtwoord!</h4></a>
  <br>
  
 <div class="alert alert-danger" role="alert">
  <a href="sign_up.php" class="alert-link">heeft u nog geen account? klik dan hier</a>
</div>
</div>';
    }
}


?>

