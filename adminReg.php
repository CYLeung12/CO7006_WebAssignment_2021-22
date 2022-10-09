<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="image/icon.png">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Akshar:wght@400;600&display=swap');
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lobster+Two&display=swap');
    </style>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Admin</title>
</head>

<body>
    <header>
        <div id="top-header" class="container">
            <a href="index.php"><img id="logo" src="image/logo.png" alt="Taste the World is a website sharing recipes of the world dishes">
            </a>
            <a href="admin.php" class="button">Backend Login</a>

        </div>
    </header>
    <section class="container">
        <h1>Backend User Creation</h1>
        <?php require_once 'msg.php'; ?>
        <form id="admin-reg" action="signup.php" method="POST">
            <div>
                <label for="username">Username: </label>
                <input type="text" name="username" id="username">
            </div>
            <div>
                <label for="password">Password: </label>
                <input type="password" name="password" id="password">

            </div>
            <div>
                <label for="password">Enter the Password again: </label>
                <input type="password" name="passwordRepeat" id="passwordRepeat">

            </div>
            <div><button type="submit" name="signup-btn" id="signup-btn">Sign up</button></div>
        </form>
    </section>
</body>

</html>