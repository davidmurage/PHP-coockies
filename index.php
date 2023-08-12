<?php
// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Get the input value from the form
    $username = $_POST['username'];

    // Set a cookie named "username" with the input value
    setcookie("username", $username, time() + (86400 * 30), "/"); // Cookie expires in 30 days 
}

// Check if the cookie is set
if (isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];
} else {
    $username = "Guest"; // Default value if the cookie is not set
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie Example</title>
</head>
<body>
    <h1>Welcome, <?php echo $username; ?>!</h1>

    <form method="post" action="">
        <label for="username">Enter your name:</label>
        <input type="text" id="username" name="username">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
