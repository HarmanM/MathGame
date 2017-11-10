<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Math Game</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
    <div class="container">
    <div class="jumbotron"><h1>Math Game</h1></div>
    <div class="row">
    <div class="col-sm-10"><h1>Please Login</h1></div>
    
</div>
<form action="authenticate.php" method="post" role="form" class="form-horizontal">
    <div class="form-group">
        <div class="col-sm-4">Email:</div>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="email" name="email" placeholder="Email" size="6" maxlength="40">
        </div>       
    </div>
    <div class="form-group">
        <div class="col-sm-4">Password:</div>
        <div class="col-sm-4">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" size="6" maxlength="20">
        </div>       
    </div>
    <div class="row">
        <div class="col-sm-3">
            <button type="submit" class="btn btn-primary">Login</button>
            <?php   
                echo "<p>".$_GET["message"]."</p>";
    ?>
       
        </div>
    </div>
</form>
<div class="row">
</div>
    </div>
</body>
</html>
 