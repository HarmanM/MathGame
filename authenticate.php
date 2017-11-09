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
    if ($email == "a@a.a" && $password == "aaa") {
        
        $_SESSION['username']=1;
        

        header("Location: index.php");
        exit();
    }
    
else if($email == "b@b.b" & $password == "bbb") {
       
       $_SESSION['username']=1;

         header("Location: index.php");
         exit();
    }
        
        else {
        $message = 'Invalid login credentials.';
        header('Location:login.php?message='.$message);
        }
 ?>
</body>
</html>

    
    



