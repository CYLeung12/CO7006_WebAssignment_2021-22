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
            <h1 id="heroTitle" class="title">Search Recipes by Ingredient</h1>
        <div id="searchBox">
            <input type="text" class="search" placeholder="Enter an ingredient" id="search-input">
            <button type="submit" id="searchButton">Search
            </button>
        </div>
    
        <div id="main-banner">
        </div>
    </section>
    <section id="searchSection" class="container">
        <h2 class="title" id="searchTitle">Search Results:</h2>
        <div id="searchResult">
            <!-- meal item start -->
            <!-- <div class="mealItem">
                <div class="sMealImg">
                    <img src="https://www.themealdb.com/images/media/meals/xusqvw1511638311.jpg"
                        alt="Image of the meal">

                </div>
                <div class="sMealName">
                    <h3>Beef Steak</h3>
                    <h2>American dish</h2>
                    <a href="#" class="sMealButton">Get Instructions</a>
                </div>
            </div> -->
            <!-- meal item end -->

        </div>

        <div class="sMealDetails container">
            <button type="button" id="sCloseDetail">X</button>

            <div class="sMealDetailsContent" id="sMealDetailsContent">
                <!-- <div class="sMealDerailsImg"><img
                        src="https://www.themealdb.com/images/media/meals/xusqvw1511638311.jpg" alt="Image of the meal">
                </div>
                <h3 class="sMealDetailsName">Chicken</h3>
                <p class="sMealDetailsCat">Mexican food</p>
                <p class="sMealDetailsIns">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur ut,
                    culpa,
                    pariatur distinctio iste labore neque ad minus deserunt sed quasi cum harum eius porro aperiam
                    dolore,
                    dolor delectus nihil!</p>

                <a href="#" class="sMealDetailsVideo">Watch the video</a> -->
            </div>

        </div>
  
    </section>


    <footer>
        <div id="footerContent" class="container">

        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>