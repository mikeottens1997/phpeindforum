<?php
include_once('database.php');



// The function
function getThemes() {
    // Data opvragen
    global $conn;
    $sql = "SELECT * FROM themes ORDER BY id ASC";
    $getThemes = $conn->prepare($sql);
    $getThemes->execute();
    // Data omzetten naar info
    if ($getThemes->rowCount() < 1) {
        echo  'error';
    }
    else {
        $rijen = $getThemes->fetchAll();
        foreach ($rijen as $rij) {
            $description = $rij['description'];
            $subject = $rij['subject'];

            echo "<div class=\"list-group\">";
            echo '<a href="\phpeindforum/src/topic.php?topic_id='. $rij['id']. '" class="list-group-item">';
            echo "<h4 class=\"list-group-item-heading\">$subject</h4>";
            echo "<p class=\"list-group-item-text\">$description</p>";
            echo "</a>";
            echo "</div>";


        }
    }
}




