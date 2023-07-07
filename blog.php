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
    <title>Taste the World | Recipes of World Cuisines</title>
</head>

<body>
    <?php include('header.php') ?>

    <section id="intro">
        <h1 id="heroTitle-s" class="title">Cooking Tips</h1>
        <div id="main-banner-s">
            <p style="color: white; float: right; top: 170px; position: relative;">(Banse, 2017)</p>
        </div>


    </section>

    <section id="blog">
        <?php
        require 'connection.php';
        $sql = "SELECT title, content FROM blog";
        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()) {

            echo "<div class='post'><h2 class='blog-title'>" . $row["title"] . "</h2><p class='blog-content'>" . $row["content"] . "</p></div>";
        }
        $conn->close();
        ?>

        <!-- 
        <div class="post">
            <h2 class="blog-title">Never use damp oven mitts.</h2>
            <p class="blog-content">Unless you'd like a fresh layer of skin, that is.</p>
        </div>

        <div class="post">
            <h2 class="blog-title">Never use damp oven mitts.</h2>
            <p class="blog-content">Unless you'd like a fresh layer of skin, that is.</p>
        </div> -->
    </section>


    <footer>
        <div id="footerContent" class="container">
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>