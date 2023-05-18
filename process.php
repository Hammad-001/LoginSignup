<?php
session_start();
require_once 'config.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // $row = mysql_fetch_array($retval, 0);
        $_SESSION['username'] = $username;
        // $_SESSION['name'] = $row['name'];
        header("Location: welcome.php");
        exit();
    } else {
        header("Location: index.php?error=Incorrect username or password");
        exit();
    }
}

if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        header("Location: index.php?error=Username already exists");
        exit();
    } else {
        if ($password == $confirm_password) {
            $sql = "INSERT INTO users (name,username, password) VALUES ('$name','$username', '$password')";
            mysqli_query($conn, $sql);

            $_SESSION['username'] = $username;
            header("Location: welcome.php");
            exit();
        } else {
            header("Location: index.php?error=Passwords do not match");
            exit();
        }
    }
}
?>