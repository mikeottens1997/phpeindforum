<?php
session_start();
include_once('database/database.php');
if (isset($_SESSION['username'])){}
else { echo '<div class="alert alert-danger text-center" role="alert">
  <a href="../login.php" class="alert-link"><h4>u moet ingelogd zijn om een comment te plaatsen klik hier om voor het inloggen</h4></a>';
die();}

if($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: ../index.php');
    exit(0);
}

$topic_id = $_GET['topic_id'];
$content = $_POST['content'];


$statement = $conn->prepare("INSERT INTO replies(content, username, topic_id) VALUES(:content, :username, :topic_id)");
$statement->execute( [
    ':content' => $content,
    ':username' => $_SESSION['username'],
    ':topic_id' => $topic_id,
]);



header('Location: ../topic.php?topic_id=' . $_GET['topic_id']);
