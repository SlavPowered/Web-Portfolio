<?php 
    session_start();

    if(!isset($_SESSION["user"])){
        header("Location:../index.html");
    }
    $name = $_SESSION["name"];
?>


<html>

<head>
    <meta charset="utf-8">
    <title>Contact Us</title>
</head>

<body style="display: flex;">
    <div>
        <h2>Phone: 81-951-523</h2>
        <h2>Email: hussein.fadel03@lau.edu</h2>
        <h3>Links:</h3>
        <div id="links">
            <a href="./menu.php">Menu</a>
            <a href="./gallery.php">Gallery</a>
            <a href="./cv.php">CV</a>
        </div>
    </div>
    <div id="logout" style="margin-left: auto;">
        <p>Welcome, <?php echo $name;?></p>
        <a href="../backend/logout.php">Logout</a>
    </div>
</body>


</html>

<style>
    @font-face {
        font-family: monocraft_font;
        src: url(../assets/Monocraft.otf);
    }

    html {
        font-family: monocraft_font;
        background-color: #1d2021;
        color: white;
    }

    #links {
        display: flex;
        border:solid;
        max-width: 14.6em;
    }

    #links a {
        text-decoration: none;
        color: white;
        padding: 1em;
    }

    #links a:hover {
        background-color: #323738 ;
    }
</style>