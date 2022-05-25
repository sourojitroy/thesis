<?php

$usernamesignup =$_POST['usernamesignup'];
$emailsignup =$_POST['emailsignup'];
$passwordsignup =md5($_POST['passwordsignup']);
$passwordsignup_confirm =md5($_POST['passwordsignup_confirm']);

//database connection
$conn = new mysqli('localhost','root','','store_db');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("INSERT INTO registration (usernamesignup, emailsignup, passwordsignup, passwordsignup_confirm)
    VALUES ('$usernamesignup', '$emailsignup', '$passwordsignup', '$passwordsignup_confirm')");
    //$stmt->bind_param("ssss",$usernamesignup, $emailsignup, $passwordsignup, $passwordsignup_confirm);
    $stmt->execute();
    echo "registration successfully....";
    $stmt->close();
    $conn->close();
}
//"insert into registration(usernamesignup, emailsignup, passwordsignup, passwordsignup_confirm)"
?>