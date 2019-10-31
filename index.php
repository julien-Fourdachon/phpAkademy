<?php
session_start();
if(isset($_SESSION['count']))
{
    $_SESSION['count']++;
}
else
{
    $_SESSION['count'] = 1;
}
require("config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title><?= TITLE ?></title>
</head>
<body>
    <div class="container">

    <div class="container">
        <?php require "navbar.php" ?>
        <?= "Vous avez visité cette page " .  $_SESSION['count'] . " fois"; ?>
    </div>
       
        
    </div>
</body>
</html>