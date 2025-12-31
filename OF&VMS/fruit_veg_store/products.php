<?php include("includes/db_connect.php"); ?>
<?php include("includes/header.php"); ?>

<h2>All Products</h2>
<div class="products">
<?php
$query = "SELECT * FROM products";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
?>
    <div class="product">
        <img src="images/<?php echo $row['image']; ?>">
        <h3><?php echo $row['name']; ?></h3>
        <p>₹<?php echo $row['price']; ?></p>
        <a href="cart.php?id=<?php echo $row['id']; ?>">Add to Cart</a>
    </div>
<?php } ?>
</div>

<?php include("includes/footer.php"); ?>
