<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Grocery Shopping List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>Grocery Shopping List</h1>
<p>Input the details of grocery items on your shopping list!</p>
<form action="save-groceryList.php" method="POST">
    <div class="form-row">
    <fieldset>
        <label for="item">Item: *</label>
        <input class="form-group col-md-8" name="item" id="item" maxlength="100" />
    </fieldset>
        <fieldset>
            <label for="categories">Categories:</label>
            <select class="form-group col-md-7" name="categories" id="categories">
                <option value="">Please select...</option>

                <?php
            $servername = "172.31.22.43";
            $username = "Rebecca100157685";
            $password = "TOqN7o1T_n";

            $db = new PDO("mysql:host=$servername;dbname=Rebecca100157685", $username, $password); // connect to the DB

            $sql = "SELECT name FROM categories";
            $cmd = $db->prepare($sql);
            $cmd->execute();
            $categories  = $cmd->fetchAll();
                foreach ($categories as $value) {

                    echo '<option value ="'.$value['catergory_id'].'">' .$value['name'].'</option>';
                }
                $db = null;
                    ?>

            </select>
        </fieldset>
    </div>
    <div class="form-row">
    <fieldset>
        <label for="quantity">Quantity:</label>
        <input class="form-group col-md-8" name="quantity" type="number" id="quantity" min="1"/>
    </fieldset>
    <fieldset>
        <label for="price">Price:</label>
        <input class="form-group col-md-8" name="price" data-type="currency" placeholder="3.00" id="price"/>
    </fieldset>
    </div>
    <fieldset>
        <label for="notes">Notes:</label>
        <input class="form-control" name="notes" id="notes"/>
    </fieldset>
    </fieldset>
    <br />
    <button class="btn btn-secondary">Submit</button>
</form>
</body>
</html>
<?php
