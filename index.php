<?php
ob_start();
session_start();
?>

<?php 
if(!isset($_SESSION['username'])) {
       header("Location: login.php");
    }
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Math Game</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="style.css" type="text/css">
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
   
   <?php
    $rand1 = rand(0,50);
    $rand2 = rand(0,50);
    $randomSign = rand(0,1);
    $sign;
    $correctAnswer;
    
    
    
    
    if(!isset($_POST["correctScore"])) {
        $correctScore = 0;
    }
    else {
        $correctScore = (int)$_POST['correctScore'];
    }
    if(!isset($_POST['totalScore'])) {
        $totalScore = 0;
    } else {       
        $totalScore = (int) $_POST['totalScore'];
    }
    if($randomSign == 0) {
      $sign = "+";
        $correctAnswer = $rand1 + $rand2;
    }
    else {
        $sign = "-";
        $correctAnswer = $rand1 - $rand2;
    }
    
    
    if(isset($_POST['userAnswer'])) {
        $input = $_POST[userAnswer];
    } 
if(isset($_POST['submit']) && (empty($_POST['userAnswer']) || !is_numeric($_POST['userAnswer']))) {
         
            $message = "Please enter a number.";
        }
    else {
        if(isset($_POST['total'])){
         if ($input === $_POST['total']) {
           $message =  "correct";
        $correctScore++;
        $totalScore++;
        }
        
        else {
        $message = "INCORRECT, " . $_POST['first_number'] . $_POST['operation'] . $_POST['second_number'] . " is " . $_POST['total'];
        $totalScore++;
         }
    } 
    }
 
    
    ?>
    <div class="container">
        <div class="jumbotron"><h1>Math Game</h1></div>
        
    <div class="row">        
        <div class="col-sm-4"><a href="logout.php" class="btn btn-default btn-sm">Logout</a></div>
    </div>
    
    <div class="row" id="row1">
       <form action="index.php" method="post" role="form" class="form-horizontal">
        <label class="col-sm-2 col-sm-offset-3"><?php echo $rand1; ?></label>
        <label class="col-sm-2"><?php echo $sign;  ?></label>
        <label class="col-sm-2"><?php echo $rand2; ?></label>
        <div class="col-sm-3 col-sm-offset-4">
            <input type="text" class="form-control" id="answer" name="userAnswer" placeholder="Enter answer" size="6">
        </div>
           <input type="hidden" name="first_number" value="<?php echo $rand1 ?>"/>
    <input type="hidden" name="operation" value= "<?php  echo $sign ?>" />
    <input type="hidden" name="second_number" value="<?php echo $rand2 ?>" />
    <input type="hidden" name="total" value= "<?php echo $correctAnswer ?>" />
    <input type="hidden" name="correctScore" value= "<?php echo $correctScore  ?>" />
    <input type="hidden" name="totalScore" value= "<?php echo $totalScore ?>" />
           <div class="row" id="row2">
            <div class ="col-sm-12 col-sm-offset-4"><button type="submit" name="submit" class="btn btn-primary">Submit</button></div>
    </div>
            </form>

            </div>
    <div class="row">
      <div class="col-sm-4 col-sm-offset-4">
       <p><?php echo $message; ?></p>
        <p>Score: <?php echo $correctScore . "/" . $totalScore  ?></p>
    </div>
        </div>
         
    </div>
</body>
</html>