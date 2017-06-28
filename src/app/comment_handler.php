<?php

include_once('database/database.php');

if($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: ../index.php');
    exit(0);
}

$topic_id = $_POST['topic_id'];
$content = $_POST['content'];
$user_id = 1;

$statement = $conn->prepare("INSERT INTO replies(content, user_id, topic_id) VALUES(:content, :user_id, :topic_id)");
$statement->execute( [
    ':content' => $content,
    ':user_id' => $user_id,
    ':topic_id' => $topic_id
] );


header('Location: ../index.php');
