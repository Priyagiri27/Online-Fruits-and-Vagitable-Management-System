<?php include("includes/db_connect.php"); ?>
<?php include("includes/header.php"); ?>

<h2>Feedback Form</h2>
<form method="post">
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <select name="rating">
        <option value="5">Excellent</option>
        <option value="4">Good</option>
        <option value="3">Average</option>
        <option value="2">Poor</option>
    </select>
    <textarea name="comments" placeholder="Comments"></textarea>
    <button name="submit">Submit</button>
</form>

<?php
if (isset($_POST['submit'])) {
    mysqli_query($conn,
        "INSERT INTO feedback(name,email,rating,comments)
        VALUES('$_POST[name]','$_POST[email]','$_POST[rating]','$_POST[comments]')");
    echo "Thank you for your feedback!";
}
?>

<?php include("includes/footer.php"); ?>
