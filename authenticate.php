<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
 <?php 
    
$email = $_POST['email'];
$password = $_POST['password'];
$userlist = "credentials.config";
    $emailarray = array();
    $passwordarray = array();
    
    if($userInfo = fopen("credentials.config" , "r")) {
        while (!feof($userInfo)) {
            $infoLine = explode(",", fgets($userInfo), 2);
            array_push($emailarray, trim($infoLine[0]));
            array_push($passwordarray, trim($infoLine[1]));
            
        } fclose($userInfo);
    }
    $indexOfEmail = array_search($_POST['email'], $emailarray);
    if (is_numeric($indexOfEmail) && strcmp($_POST['password'], $passwordarray[$indexOfEmail] == 0)) {
        $_SESSION['username']=1;
         header("Location: index.php");
        exit();
    } else {
        $message = 'Invalid login credentials.';
        header('Location:login.php?message='.$message);
        
        
    }
    ?>
  
</body>
</html>

    
    



