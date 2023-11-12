<?php

session_start();

$inpt_username = $_POST["username"];
$inpt_password = $_POST["password"];


try{
    $file = file_get_contents(dirname(__FILE__) . "\\..\\data\\accounts.json");
}catch(Exception $e){
    echo "<h1>Couldnt open Json file</h1>";
}

$acc_file = json_decode($file, true);

$user_found = false;

for($i = 0; $i < count($acc_file["accounts"]); $i++){
    $user = $acc_file["accounts"][$i]["username"];
    $pass = $acc_file["accounts"][$i]["password"];
    if ($user == $inpt_username){
        if ($pass == $inpt_password){
            $_SESSION["user"] = $user;
            header("Location:../pages/menu.php");
            $user_found = true;
            break;
        }else{
            echo "<h1>Wrong Password</h1>";
        }
    }
}

if(!$user_found){
    echo "<h1>User Not Found</h1>";
    header("Location:../index.html");
}
?>


