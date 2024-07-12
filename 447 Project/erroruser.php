<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://saltine.wuaze.com/styles/creator_styles.css?v=<? echo time(); ?>">
    <link rel="stylesheet" href="http://saltine.wuaze.com/styles/creator_styles_filtering.css?v=<? echo time(); ?>">
    <link rel="stylesheet" href="http://saltine.wuaze.com/styles/creator_styles_autocomplete.css?v=<? echo time(); ?>">
    <link rel="stylesheet" href="http://saltine.wuaze.com/styles/creator_styles_results.css?v=<? echo time(); ?>">
    <link rel="stylesheet" href="http://saltine.wuaze.com/styles/creator_styles_min_values.css?v=<? echo time(); ?>">
</head>
<body>
    <div class="header_bar">
        <!-- back button -->
        <input class="back_button" type="submit" value="Back" onclick="window.location='./index.html'">
    </div>

    <div class="container">

        <div class="left-section">
            <form action="createplayer.php" method="post">
                <label for="create-name">Name</label><br>
                <input type="text" id="create-name" name="name"><br><br>
                <select id="team-color" name="color"> 
                    <option value="Color" selected>Team Color</option>
                    <option value="Red">Red</option>
                    <option value="Blue">Blue</option>
                    <option value="Green">Green</option>
                    <option value="Yellow">Yellow</option>
                </select> <br><br>
                <input type="submit" value="Create User"><br><br><br><br><br><br>
            </form>
        </div>

        <div class="right-section">
            <form action="log.php" method="post">
                <label for="login-name">Name</label><br>
                <input type="text" id="login-name" name="name"><br><br>
                <input type="submit" value="Log In">
            </form>
        </div>

        

        <?php
            $_SESSION["user"] = $_POST["name"];
        ?>

    </div>    

    <p>Something went wrong. Try creating a new user.</p><br>
</body>
</html>