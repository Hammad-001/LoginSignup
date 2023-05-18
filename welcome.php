<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>

    <head>
        <title>Welcome</title>
    </head>

    <body style="display:flex; align-items:center; flex-direction:column;">
        <h2 style="text-transform: capitalize;">
        </h2>Welcome
        <?php echo $_SESSION['username']; ?>
        </h2>
        <p>You are now logged in.</p>
        <a href="logout.php">Logout</a>
    </body>

</html>