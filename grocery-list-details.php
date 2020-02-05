<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Grocery List</title>
</head>
<body>
<?php

// connect to the database

$db = new PDO("mysql:host=172.31.22.43;dbname=Rebecca100157685", "Rebecca100157685","TOqN7o1T_n");

// set up
$sql = "SELECT * FROM groceries";
$cmd = $db->prepare($sql);
$cmd->execute();
$musicians = $cmd->fetchAll();

// start table

echo '<table border="1"><thead><th>Item</th><th>Categories</th><th>Quantity</th><th>Price</th><th>Notes</th></thead>';

// loop through data and display results in the table and on the site

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