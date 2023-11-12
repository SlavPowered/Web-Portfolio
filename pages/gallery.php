<?php

    session_start();
    if(!isset($_SESSION["user"])){
        header("Location:../index.html");
    }
    $dir = dirname(__FILE__);

    try{
        $file = file_get_contents("$dir/../data/images.json");
    }catch(Exception $e){
        echo "<h1>Couldnt open Json file</h1>";
    }

    $images = json_decode($file,true);
    function render_image($dir, $img_name) {
        echo "<div class='img-container'>
            <a href='./../assets/$img_name'>
                <img src='./../assets/$img_name' class='image'>
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
    <header>
        <div class="dropdown">
            <button class="dropbtn"><h1><img src="../assets/dropdown-menu-custom.svg" style="width: 0.9em;height:0.9em;"> Gallery</h1></button>
      <div class="dropdown-content">
        <a href="./menu.php">Menu</a>
        <a href="./cv.php">CV</a>
        <a href="./contact.php">Contact Us</a>
      </div>
    </div></header>
    <body>
        <div class="gallery">
            <?php 
                if(isset($images["images"])){
                   for($i = 0; $i < count($images["images"]); $i++){
                        render_image($dir, $images["images"][$i]);
                    }
                }else{
                    echo "<h2>Images Not found in $dir</h2>";
                }
            ?>
        </div>
    </body>
</html>


