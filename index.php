<?php
    // connection to mysql database 
    include './include/db.php';

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];

    if (isset($_POST['submit'])) {
        $sql = "INSERT INTO users (firstName, lastName, email) VALUES ('$firstName', '$lastName', '$email')";
        mysqli_query($conn, $sql);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Nibiru</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="text" name="firstName" id="firstName" placeholder="First Name">
        <input type="text" name="lastName" id="lastName" placeholder="Last Name">
        <input type="text" name="email" id="email" placeholder="Email">
        <input type="submit" name="submit" value="Send">
    </form>
    <script src="./js/script.js"></script>
</body>
</html>
