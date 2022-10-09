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
        <h1 id="heroTitle-s" class="title">Inspiration for your Meals</h1>
        <p id="heroTitle-intro">Don't know what to cook today? See the following randam recipes for meal ideas!</p>
        <div id="main-banner-s">
            <p style="color: white; float: right; top: 170px; position: relative;">(Banse, 2017)</p>
        </div>


    </section>

    <section id="inspiration" class="container">

        <div id="mealInspiration">
            <div id="receipe1"></div>
            <div id="receipe2"></div>
            <div id="receipe3"></div>
            <div id="receipe4"></div>

        </div>

    </section>
    <footer>
        <div id="footerContent" class="container">
            <p>
                All recipe data is retrieved from <a href="https://www.themealdb.com/" target="_blank" style="color: aquamarine;">TheMealDB</a>.
            </p>
            <ul>
                <li style="font-size: 0.7em;">Banse, L. (2017). cooked dish on gray bowl photo. Unsplah. Avaliable at:
                    https://unsplash.com/photos/-YHSwy6uqvk (Accessed: 4 May 2022).</li>
                <li style="font-size: 0.7em;">TheMealDB (2016). TheMealDB API. Avaliable at:
                    https://www.themealdb.com/api.php (Accessed: 10 May 2022).</li>

            </ul>

        </div>
    </footer>
    <script src="recommendation.js"></script>

</body>

</html>