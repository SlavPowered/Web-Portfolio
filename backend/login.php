<?php

$file = file_get_contents(dirname(__FILE__) . "\\accounts.json");
$acc_file = json_decode($file, true);

for($i = 0; $i < count($acc_file["accounts"]); $i++){
    print($acc_file["accounts"][$i]["username"]);
}

// $username = "1234";
// $password = "1234";

// $inpt_username = $_POST["username"];
// $inpt_password = $_POST["password"];

// if($inpt_username == $username){
//     if($inpt_password == $password){
//         echo "Login Successful";
//     }else{
//         echo "Wrong Password";
//     }
// }else{
//     echo "Wrong username";
// }
?>


