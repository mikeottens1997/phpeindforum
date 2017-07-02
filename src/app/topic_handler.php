<?php
session_start();
include_once('database/database.php');
include_once ('topic_handler.php');

if($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: ../index.php');
    exit(0);
}
$subject = $_POST['subject'];
$theme_id = $_POST['theme_id'];
$description = $_POST['description'];
$user_id = $_SESSION['username'];

$statement = $conn->prepare("INSERT INTO topics( subject , description , username , theme_id ) VALUES(:subject , :description , :username , :theme_id)");
$statement->execute( [
    ':subject' => $subject,
    ':description' => $description,
    ':username' => $_SESSION['username'],
    ':theme_id' => $theme_id,

] );


header('Location: ../topic.php');

