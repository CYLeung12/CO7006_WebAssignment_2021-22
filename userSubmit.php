<?php
session_start();

if (isset($_SESSION["login"])  !== TRUE) {
    header("location: admin.php");
    exit;
}
?>

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
            <a href="logout.php" class="submitReceipe">Logout</a>
        </div>
    </header>
    <section class="container">
        <h1>Recipes submitted</h1>

        <table id="submittedData">
            <tr>
                <th>ID</th>
                <th>Meal Name</th>
                <th>Meal Instruction</th>
                <th>Meal Area</th>
                <th>Meal Video</th>
            </tr>

            <?php
            $conn = mysqli_connect('localhost', 'c2114907_admin', 'K3@onq%_;}A.', 'c2114907_meals');
            if ($conn->connect_error) {
                echo ("DB connection failed ");
            }
            $sql = "SELECT id, submitMealName, submitMealInstruct, submitMealArea, submitMealVideo FROM submit";
            $result = $conn->query($sql);

            while ($row = $result->fetch_assoc()) {

                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["submitMealName"] . "</td><td>" . $row["submitMealInstruct"] . "</td><td>" . $row["submitMealArea"] . "</td><td><a target='_blank' href='" . $row["submitMealVideo"] . "'>" . $row["submitMealVideo"] . "</a></td>";
            }
            $conn->close();
            ?>

            <!-- <tr>
                <td>1</td>
                <td>Egg custard tartad</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras felis dui, ultricies sed dignissim ut,
                    tempor a dolor. Cras blandit ultricies purus a vestibulum. Sed justo elit, auctor ac tortor nec,
                    scelerisque vehicula justo. Maecenas et nisl vel enim auctor imperdiet. Proin in ante ex. </th>
                <td>British</td>
                <td>youtube.com</td>
            </tr> -->


        </table>






    </section>
</body>

</html>