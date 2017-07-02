<?php
$signup_message = null;
$no_match_msg = null;

 include 'database/database.php';


if (isset($_POST['login-submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $password2 = $_POST['password_confirm'];

    if ($password == $password2) {

        $new_user = $conn->prepare("INSERT INTO users(username , password , email ) VALUES(:username , :password , :email) ");

        $new_user->execute([
                ':username' => $username,
                ':password' => hash('sha512', $password),
                ':email' => $email,

        ]);
            $signup_message = '<div class="alert alert-success text-center" role="alert"><h3>U bent succesvol geregistreerd!</h3></div>';

    } else{
        $no_match_msg = '<div class="alert alert-danger text-center" role="alert"><h3>Wachtwoorden komen niet overeen</h3></div>';
    }
}
else header:("location: sign_up.php");
?>