<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Save Musicians</title>
</head>
<body>
<?php
// first save the user inputs into <fieldset>
$item = $_POST['item'];
//category drop down
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$notes = $_POST['notes'];


// connect to the database

$db = new PDO("mysql:host=172.31.22.43;dbname=Rebecca100157685", "Rebecca100157685","TOqN7o1T_n");

// prepare insert
$sql = "INSERT INTO groceries (item, category, quantity, price, notes) VALUES (:item, //category// ,:quantity, :price, :notes)";

$cmd = $db->prepare($sql);


$cmd->bindParam(":item", $item, PDO::PARAM_STR, 50);
//category input here
$cmd->bindParam(":quantity", $quantity, PDO::PARAM_STR, 50);
$cmd->bindParam(":price", $price, PDO::PARAM_STR);
$cmd->bindParam(":notes", $notes, PDO::PARAM_STR, 100);



// save to the database
$cmd->execute();

// disconnect after executed & saves
$db = null;

echo "List Item Saved!";

?>
