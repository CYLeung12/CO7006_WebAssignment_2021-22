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
        </div>
    </header>
    <section class="container">
        <h1>Backend Login</h1>
        <?php require_once 'msg.php'; ?>
        <form id="admin-login" action="login.php" method="POST">
            <div>
                <label for="username">Username: </label>
                <input type="text" name="username" id="username">
            </div>
            <div>
                <label for="password">Password: </label>
                <input type="password" name="password" id="password">

            </div>


            <div><button type="submit" name="login-btn" id="login-btn">Log in</button></div>
        </form>
    </section>
</body>

</html>