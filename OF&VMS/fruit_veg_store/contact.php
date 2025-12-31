<?php include("includes/db_connect.php"); ?>
<?php include("includes/header.php"); ?>

<h2>Contact Us</h2>
<form method="post">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <textarea name="message" placeholder="Message"></textarea>
    <button name="submit">Send</button>
</form>

<?php
if (isset($_POST['submit'])) {
    mysqli_query($conn,
        "INSERT INTO contacts(name,email,message)
        VALUES('$_POST[name]','$_POST[email]','$_POST[message]')");
    echo "Message Sent!";
}
?>

<?php include("includes/footer.php"); ?>
