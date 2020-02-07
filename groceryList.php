<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Shopping List</title>
</head>
<body>
<h1>Grocery Shopping List</h1>
<?php

$db = new PDO("mysql:host=172.31.22.43;dbname=Rebecca100157685", "Rebecca100157685","TOqN7o1T_n"); // connect to the DB


$sql = "SELECT * FROM groceryList";
$cmd = $db->prepare($sql);
$cmd->execute();
$musicians = $cmd->fetchAll();
// set up and execute query ^

// start table

echo '<table><thead><th>Item</th><th>Category</th><th>Quantity</th><th>Price</th><th>Notes</th></thead>';

// loop through data and display results

foreach ($musicians as $value) {
    echo '<tr><td>' . $value['item'] . '</td>
            <td>' . $value['categories'] . '</td>
            <td>' . $value['quantity'] . '</td>
            <td>' . $value['price'] . '</td>
            <td>' . $value['notes'] . '</td></tr>';
}

echo '</table>';
?>

</body>
</html>

