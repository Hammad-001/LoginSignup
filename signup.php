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
        <title>Signup</title>
    </head>

    <body style="display:flex; align-items:center; flex-direction:column;">
        <h2>Signup</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p>
                <?php echo $_GET['error']; ?>
            </p>
        <?php } ?>
        <form action="process.php" method="post">
            <table>
                <tr>
                    <td>
                        <label>Name:</label>
                    </td>
                    <td>
                        <input type="text" name="name" required>
                    </td>
                </tr>
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
                        <label>Confirm Password:</label>
                    </td>
                    <td>
                        <input type="password" name="confirm_password" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="signup" value="Signup">
                    </td>
                    <td>
                        For Login <a style="text-decoration:none;" href="./index.php">Click Here!</a>
                    </td>
                </tr>
            </table>
        </form>
    </body>

</html>