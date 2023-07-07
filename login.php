<?php
session_start();
if (empty($_POST['username']) || empty($_POST['password'])) {
    $_SESSION['messages'][] = 'Please fill in all fields';
    header("location: admin.php");
    exit();
}

require 'connection.php';

if ($stmt = $conn->prepare('SELECT password FROM admin WHERE username =?')) {
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();


    if ($stmt->num_rows > 0) {
        $stmt->bind_result($password);
        $stmt->fetch();
        if (password_verify($_POST['password'], $password)) {
            session_regenerate_id();
            header("location: userSubmit.php");
            $_SESSION['login'] = TRUE;
            // echo 'welcome!';
        }
    } else {
        $_SESSION['messages'][] = 'Incorrect username or password';
        header("location: admin.php");
        exit();
    }


    $stmt->close();
}
