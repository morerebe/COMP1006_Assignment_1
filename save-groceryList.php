<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Save Grocery List</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php


$item = $_POST["item"];
$categories = $_POST["categories"];
$quantity = $_POST["quantity"];
$price = $_POST["price"];
$notes = $_POST["notes"];

$valid = true; // variable validate to save to DB


if (empty($item)) {
    echo 'Item is required <br/>';
    $valid = false;
}

if(!empty($quantity)) {
    if (!is_numeric($quantity)) {
        echo 'Quantity must be a number 0 or higher <br />';
        $valid = false;
    }
    elseif ($quantity < 0) {
        echo 'Quantity must be a number 0 or higher <br />';
        $valid = false;
    }
    else
        $quantity = null;

}

if (empty($price)) {
   $price = null;
}

if ($valid == true) {

    $servername = "172.31.22.43";
    $username = "Rebecca100157685";
    $password = "TOqN7o1T_n";

    $db = new PDO("mysql:host=$servername;dbname=Rebecca100157685", $username, $password); // connect to the DB
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // set up insert
    $sql = "INSERT INTO groceryList (item, categories, quantity, price, notes) VALUES (:item, :categories, :quantity, :price, :notes)";

    $cmd = $db->prepare($sql);

    $cmd->bindParam(":item", $item, PDO::PARAM_STR, 50);
    $cmd->bindParam(":categories", $categories, PDO::PARAM_STR, 600000);
    $cmd->bindParam(":quantity", $quantity, PDO::PARAM_INT);
    $cmd->bindParam(":price", $price, PDO::PARAM_STR,  10);
    $cmd->bindParam(":notes", $notes, PDO::PARAM_STR, 100);
    // bind the variables ^^

    $cmd->execute();

    echo "Grocery List Saved!";

    echo '<p>View your shopping list <a href="groceryList.php">here</a></p>';

    $db = null;
}

?>
</body>
</html>
