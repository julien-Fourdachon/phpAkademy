
<?php

    echo "Voici la liste des participants: <br>";
    $files = scandir('participants/');
    foreach($files as $file) {
        echo file_get_contents("participants/" . $file) . "<br>";
}