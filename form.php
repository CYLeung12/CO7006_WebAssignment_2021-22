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

    <section id="submitSection" class="container">
        <h1 class="title">Submit Your Recipe</h1>
        <form action="insert.php" method="POST" id="form">
            <div><input type="text" class="generalForm" id="submitMealName" name="submitMealName" placeholder="Meal Name" required></div>

            <div><textarea class="generalForm" id="submitMealInstruct" name="submitMealInstruct" placeholder="How to make the meal?" rows="10" required></textarea></div>
            <div>
                <select class="generalForm" id="submitMealArea" name="submitMealArea" required>
                    <option value="" selected disabled hidden>Original Area</option>
                    <option value="American">American</option>
                    <option value="British">British</option>
                    <option value="Canadian">Canadian</option>
                    <option value="Chinese">Chinese</option>
                    <option value="Croatian">Croatian</option>
                    <option value="Dutch">Dutch</option>
                    <option value="Egyptian">Egyptian</option>
                    <option value="French">French</option>
                    <option value="Greek">Greek</option>
                    <option value="Indian">Indian</option>
                    <option value="Irish">Irish</option>
                    <option value="Italian">Italian</option>
                    <option value="Jamaican">Jamaican</option>
                    <option value="Japanese">Japanese</option>
                    <option value="Kenyan">Kenyan</option>
                    <option value="Malaysian">Malaysian</option>
                    <option value="Mexican">Mexican</option>
                    <option value="Moroccan">Moroccan</option>
                    <option value="Polish">Polish</option>
                    <option value="Portuguese">Portuguese</option>
                    <option value="Russian">Russian</option>
                    <option value="Spanish">Spanish</option>
                    <option value="Thai">Thai</option>
                    <option value="Tunisian">Tunisian</option>
                    <option value="Turkish">Turkish</option>
                    <option value="Vietnamese">Vietnamese</option>
                    <option value="Unknown">Unknown</option>
                </select>
            </div>
            <div><input type="text" class="generalForm" id="submitMealVideo" name="submitMealVideo" placeholder="YouTube Link for Cooking Tutorial Video (Optional)"></div>
            <div><input id="submitButton" class="submitReceipe" type="submit" value="Submit"></div>


        </form>
    </section>


    <footer>
        <div id="footerContent" class="container">
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>