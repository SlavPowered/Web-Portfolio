<?php

    session_start();
    if(!isset($_SESSION["user"])){
        header("Location:../index.html");
    }
    
    $name = $_SESSION["name"];
    
    $dir = dirname(__FILE__);
    
    try{
        $file = file_get_contents("$dir/../data/images.json");
    }catch(Exception $e){
        echo "<h1>Couldnt open Json file</h1>";
    }

    $images = json_decode($file,true);
    function render_image($img_name) {
        echo "<div class='img-container'>
            <a href='./../gallery/$img_name'>
                <img src='./../gallery/$img_name' class='image'>
            </a>
        </div>";
    }
    
?>
<html>
    <head>
        <title>Gallery</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../style/gallery.css">
    </head>
    <header style="display: flex; justify-content: space-between; align-items: center;">
        <div class="dropdown">
            <button class="dropbtn"><h1><img src="../assets/dropdown-menu-custom.svg" style="width: 0.9em; height: 0.9em;"> Gallery</h1></button>
            <div class="dropdown-content">
                <a href="./menu.php">Menu</a>
                <a href="./cv.php">CV</a>
                <a href="./contact.php">Contact Us</a>
            </div>
        </div>
        <div id="welcome" style="margin-left: auto;">
            <p style="display: inline;">Welcome, <?php echo $name;?></p>
            <a href="../backend/logout.php" style="display: inline-block;">Logout</a>
        </div>
    </header>

    <body>
        <div class="gallery">
            <?php 
                if(isset($images["images"])){
                   for($i = 0; $i < count($images["images"]); $i++){
                        render_image($images["images"][$i]);
                    }
                }else{
                    echo "<h2>Images Not found in $dir</h2>";
                }
            ?>
        </div>
    </body>
</html>


