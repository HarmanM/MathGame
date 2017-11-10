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
    
    $success = false;
foreach ($userlist as $user) {
    $user_details = explode(',', $user);
    if ($user_details[0] == $email && $user_details[1] == $password) {
        $success = true;
        break;
    }
}

if ($success) {
    $_SESSION['username']=1;
        

        header("Location: index.php");
        exit();
} else {
    $message = 'Invalid login credentials.';
        header('Location:login.php?message='.$message);
}
    /* foreach(glob("credentials.config") as $inputText) {
        $text = file_get_contents($inputText);
        $login = explode(" ",$text);
        $login1 = explode(",",$login[0]);
        $login2 = explode(",".$login[1]);
        
        
        if ($email == $login1 && $password == $login2) {
        
        $_SESSION['username']=1;
        

        header("Location: index.php");
        exit();
    } else {
            $message = 'Invalid login credentials.';
        header('Location:login.php?message='.$message);
        }
    }
    */
    
    
    
 ?>
</body>
</html>

    
    



