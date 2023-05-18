<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
    exit();
}
?>

<!DOCTYPE html>
<html>

    <head>
        <title>Login</title>
    </head>

    <body style="display:flex; align-items:center; flex-direction:column;">
        <h2>Login</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p>
                <?php echo $_GET['error']; ?>
            </p>
        <?php } ?>
        <form action="process.php" method="post">
            <table>
                <tr>
                    <td>
                        <label>Username:</label>
                    </td>
                    <td>
                        <input type="text" name="username" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Password:</label>
                    </td>
                    <td>
                        <input type="password" name="password" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="login" value="Login">
                    </td>
                    <td>
                        For Signup <a style="text-decoration:none;" href="./signup.php">Click Here!</a>
                    </td>
                </tr>
            </table>

        </form>
    </body>

</html>