<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$passwordRepeat = $_POST['passwordRepeat'];

if (empty($username) || empty($password) || empty($passwordRepeat)) {
    $_SESSION['messages'][] = 'Please fill in all fields';
    header("location: adminReg.php");
    exit;
}

if ($password !== $passwordRepeat) {
    $_SESSION['messages'][] = 'Two passwords do not match';
    header("location: adminReg.php");
    exit;
}

require 'connection.php';

if ($stmt = $conn->prepare('SELECT password FROM admin WHERE username=?')) {
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        $_SESSION['messages'][] = 'user existed';
        header("location: adminReg.php");
        exit;
    } else {
        if ($stmt = $conn->prepare('INSERT INTO admin (username, password) VALUES (?, ?)')) {
            $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $stmt->bind_param('ss', $username, $hashedPassword);
            $stmt->execute();
            $_SESSION['messages'][] = 'User has been created';
            header("location: adminReg.php");
        } else {
            header("location: adminReg.php?e=wrong");
        }
    }
    $stmt->close();
}
