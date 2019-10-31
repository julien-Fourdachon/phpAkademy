<?php

echo "Contenu de \$_POST<br>";

foreach ($_POST as $key => $values) {
    $value = strip_tags($values);
    $newValue = nl2br($value);   
    $_SESSION[$key] = $newValue;
    echo "$key  =  $newValue<br>";
}

if (!file_exists("participants/". $_POST['email'] . ".txt")){
    file_put_contents("participants/" . $_POST['email'] . ".txt",$_POST['email'] . ";" .  $_POST['lastname'] . ";" . $_POST['firstname']);
} else {
    echo "L'email a déja été renseigner, le fichier n'a pas été créer!";
}