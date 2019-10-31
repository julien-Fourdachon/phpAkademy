<?php
include("config.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= CALCUL?></title>
</head>
<body>
    <div class="container">
        <form method="post">
            <div class="form-group">
                <label for="operation">Opération</label>
                <input type="text" class="form-control" id="operation" placeholder="Choisissez le type d'opétation" name="operation">
            </div>
            <div class="form-group">
                <label for="number1">First number</label>
                <input type="number" class="form-control" id="number1" placeholder="Enter number 1" name="number1">
            </div>
            <div class="form-group">
                <label for="number2">Second number</label>
                <input type="number" class="form-control" id="number2" placeholder="Enter number 2" name="number2">
            </div>
            <input type="submit" value="Calculer" class="btn btn-primary">
        </form>
    </div>    
</body>
</html>

<?php
if(count($_POST) > 0) {
    if(strlen($_POST["operation"]) != 1) {
        echo "Opérateur invalide";
    } else {

        switch($_POST["operation"]) {
            case("+") : 
                echo $_POST["number1"] + $_POST["number2"];
                break;
            case("+") : 
                echo $_POST["number1"] + $_POST["number2"];
                break;
            case("*") : 
                echo $_POST["number1"] * $_POST["number2"];
                break;
            case("/") : 
                echo $_POST["number1"] / $_POST["number2"];
                break;
            default: echo "Opérateur invalide";
        }
    }
}

?>