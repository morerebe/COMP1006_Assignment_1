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
        <input class="form-group col-md-8" name="item" id="item" maxlength="100" required />
    </fieldset>
        <fieldset>
            <label for="categories">Categories:</label>
            <select class="form-group col-md-6" name="categories" id="categories">
                <option value="other">Other</option>
                <option value="produce">Produce</option>
                <option value="bread-bakery">Bread & Bakery</option>
                <option value="dairy-eggs">Dairy & Eggs</option>
                <option value="spice">Spices</option>
                <option value="condiments">Condiments</option>
                <option value="snacks">Snacks</option>
                <option value="canned-food">Canned Food</option>
                <option value="frozen-food">Frozen Food</option>
                <option value="beverages">Beverages</option>
                <option value="household">Household</option>
                <option value="pets">Pets</option>
            </select>
        </fieldset>
    </div>
    <div class="form-row">
    <fieldset>
        <label for="quantity">Quantity: *</label>
        <input class="form-group col-md-8" name="quantity" type="number" id="quantity" min="1"/>
    </fieldset>
    <fieldset>
        <label for="price">Price: *</label>
        <input class="form-group col-md-8" name="price" data-type="currency" placeholder="3.00" id="price" required/>
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
