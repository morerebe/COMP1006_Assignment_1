<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Grocery Shopping List</title>
</head>
<body>
<h1>Grocery Shopping List</h1>
<form action="save-grocery-list.php" method="post">
    <fieldset>
        <label for="item">Item:</label>
        <input name="item" id="item"/>
    </fieldset>
    <fieldset>
        <label for="category">Categories:</label>
        <select>
            <optgroup label = "Categories:">
            <option value="">Other</option>
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
    <fieldset>
        <label for="quantity">Quantity:</label>
        <input name="quantity" type="number" id="ranking"/>
    </fieldset>
    <fieldset>
        <label for="price">Price:</label>
        <input name="price" data-type="currency" placeholder="$3.99" id="price"/>
    </fieldset>
    <fieldset>
        <label for="notes">Notes:</label>
        <input name="notes" id="notes"/>
    </fieldset>
    </fieldset>
    <br />
    <button>Submit</button>
</form>
</body>
</html>

<?php
