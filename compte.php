<?php
if ($_POST["login"] === "admin" && $_POST["password"] === "hello") {
    echo "Bonjour Admin, ceci est votre tableau de bord";
    require("participants.php");    
} else {
    header("Location:/");
}
