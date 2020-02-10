<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Shopping List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>Your Grocery Shopping List</h1>
<p>Have fun shopping!</p>
<?php

$db = new PDO("mysql:host=172.31.22.43;dbname=Rebecca100157685", "Rebecca100157685","TOqN7o1T_n"); // connect to the DB


$sql = "SELECT * FROM groceryList";
$cmd = $db->prepare($sql);
$cmd->execute();
$musicians = $cmd->fetchAll();
// set up and execute query ^

// start table

echo '<table class="table table-striped"><thead class="thead-dark"><th>Item</th><th>Category</th><th>Quantity</th><th>Price</th><th>Notes</th></thead>';

// loop through data and display results

foreach ($groceryList as $value) {
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

