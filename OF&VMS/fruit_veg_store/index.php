<?php include("includes/db_connect.php"); ?>
<?php include("includes/header.php"); ?>

<section class="hero">
    <h1>Fresh Fruits & Vegetables Delivered to Your Door</h1>
    <p>Healthy | Fresh | Affordable</p>
</section>

<h2>Featured Products</h2>
<div class="products">
<?php
$query = "SELECT * FROM products LIMIT 6";
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
