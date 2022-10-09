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
        $conn = mysqli_connect('localhost', 'c2114907_admin', 'K3@onq%_;}A.', 'c2114907_meals');
        if ($conn->connect_error) {
            echo ("DB connection failed ");
        }
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

            <ul>
                <li style="font-size: 0.7em;">Banse, L. (2017). cooked dish on gray bowl photo. Unsplah. Avaliable at:
                    https://unsplash.com/photos/-YHSwy6uqvk (Accessed: 4 May 2022).</li>
                <li style="font-size: 0.7em;">Delish (2020). 15 Cooking Tips That'll Change Every Home Cook's Life. Avaliable at: https://www.delish.com/kitchen-tools/kitchen-secrets/g25585978/best-cooking-tips/ (Accessed: 15 May 2022).</li>
            </ul>
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>