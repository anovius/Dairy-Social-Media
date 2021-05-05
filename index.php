<?php
    session_start();
    if(isset($_SESSION ['username'])){
        $username = $_SESSION ['username'];
        echo "<script>window.location.href='home.php'</script>";
      }
?>
<html>
    <head>
        <title>Daily Dairy</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    </head>
    <body>


        
        <div class="navbar">
            <h1 class="pull-left">| DailyDairy</h1>
            <div class="icon pull-right">
                <a class="btn btn-default" href="login.php" role="button" style="border-radius: 0px;"> Login </a>
                <a class="btn btn-default" href="signup.php" role="button" style="border-radius: 0px;"> SignUp </a>
            </div>
        </div>
        <div class="menu">
            <center>
                <a href="#"><i class="fa fa-home"></i></a>
                <a href="login.php"><i class="fa fa-search"></i></a>
                <a href="login.php"><i class="fa fa-plus-square"></i></a>
                <a href="login.php"><i class="fa fa-globe"></i></a>
                <a href="login.php"> <i class="fa fa-user"></i></a>
            </center>
        </div>
    </body>
</html>