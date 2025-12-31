<?php
include("includes/db_connect.php");

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    mysqli_query($conn, "INSERT INTO subscribers(email) VALUES('$email')");
    echo "Subscribed Successfully!";
}
?>
