<?php
$submitMealName = $_POST['submitMealName'];
$submitMealInstruct = $_POST['submitMealInstruct'];
$submitMealArea = $_POST['submitMealArea'];
$submitMealVideo = $_POST['submitMealVideo'];


$conn = mysqli_connect('localhost', 'c2114907_admin', 'K3@onq%_;}A.', 'c2114907_meals');
if ($conn->connect_error) {
    echo ("DB connection failed ");
} else {


    $stmt = $conn->prepare("insert into submit(submitMealName, submitMealInstruct, submitMealArea, submitMealVideo) values(?, ?, ?, ?)");
    $stmt->bind_param("ssss", $submitMealName, $submitMealInstruct, $submitMealArea, $submitMealVideo);
    $execval = $stmt->execute();
    echo $execval;
    echo "
    <!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='icon' href='image/icon.png'>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Akshar:wght@400;600&display=swap');
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lobster+Two&display=swap');
    </style>
    <link rel='stylesheet' type='text/css' href='style.css' />
    <title>Taste the World | Recipes of World Cuisines</title>
</head>

<body>
<header>
<div id='top-header' class='container'>
    <a href='index.php'><img id='logo' src='image/logo.png' alt='Taste the World is a website sharing recipes of the world dishes'>
    </a>
    <a href='form.php' class='submitReceipe'>Submit Your Recipe</a>
</div>
<nav>
    <ul class='conrainer'>
        <li><a href='index.php'>Home</a></li>
        <li><a href='inspiration.php'>Inspiration</a></li>
        <li><a href='blog.php'>Cooking Tips</a></li>
        <li><a href='contact.php'>Contact us</a></li>
    </ul>
</nav>
</header>

    <section id='submited' class='container'>
        <div id='thankYou'>
            <h1>Thank you for submitting your recipe!</h1>
            <p>Our editors update recipes frequently. Check back to see if your recipe is published!</p>
        </div>
    </section>


    <footer>
        <div id='footerContent' class='container'>
            <p>
            Website built for CO7006 - Web Systems
            </p>
        </div>
    </footer>

    <script src='script.js'></script>
</body>

</html>
    
    
    ";
    $stmt->close();
    $conn->close();
}
