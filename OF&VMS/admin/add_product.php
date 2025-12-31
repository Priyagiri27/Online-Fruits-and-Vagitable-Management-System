<?php include("../includes/db_connect.php"); ?>

<form method="post">
    <input name="name" placeholder="Product Name">
    <input name="category" placeholder="Category">
    <input name="price" placeholder="Price">
    <input name="stock" placeholder="Stock">
    <input name="image" placeholder="Image Name">
    <button name="add">Add Product</button>
</form>

<?php
if (isset($_POST['add'])) {
    mysqli_query($conn,
        "INSERT INTO products(name,category,price,stock,image)
        VALUES('$_POST[name]','$_POST[category]','$_POST[price]','$_POST[stock]','$_POST[image]')");
    echo "Product Added!";
}
?>