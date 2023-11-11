<?php 
    session_start();
    if (!isset($_SESSION["user"])){
        header("Location:../index.html");
    }else{
        $user = $_SESSION["user"];
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Menu</title>
        <meta charset="utf-8">
    </head>
    <header>
        <h1>Menu</h1>
    </header>
    <body>
        <a href="./gallery.html" class="menu-link">
            <div class="link-container">
                Gallery
            </div>
        </a>
        
        <a href="./cv.html" class="menu-link">
            <div class="link-container">
                <p>CV</p>
            </div>
        </a>
       <a href="./contact.html" class="menu-link">
            <div class="link-container">
                <p>Contact Us</p>
            </div>
        </a> 
       <a href="https://cvandgallery.000webhostapp.com/" class="menu-link" target="_blank">
            <div class="link-container">
                <p>Website</p>
            </div>
        </a> 
        <?php
            echo "<h1>Welcome, ".$user."</h1>";
        ?>
    </body>
</html>

<style>
    @font-face {
        font-family: monocraft_font;
        src: url(../assets/Monocraft.otf);
    }

    html {
        font-family: monocraft_font, sans-serif;
        background-color: #1d2021;
        color: white;
    }
    .link-container{
        
        height: 3em;
        width: 10em;
        justify-content: center;
        transition: transform 0.3s ease, background-color 0.3s ease;
    }
    .menu-link{
        color:white;
        text-decoration: none;
        cursor: pointer;
    }

    .link-container:hover{
        background-color: #6c7477;
        transform:translateX(20%);
    }
</style>