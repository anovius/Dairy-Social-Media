<?php
    session_start();
    if(isset($_SESSION ['username'])){
        $username = $_SESSION ['username'];
        echo "<script>alert('Already Login');window.location.href='home.php'</script>";
      }
?>
<html>
    <head>
        <title>SignUp</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300|Roboto:100" rel="stylesheet">
    </head>
    <style>
        body{
            background: url('img/bg.png') no-repeat center center fixed;
            background-size: cover;            
        }
        h1{
            font-family: 'Lobster', cursive;
            font-size: 30px;
            text-align: left !important;
        }
    </style>
    <body>
        <br><br><br><br><br>
        <center>
            <form action="functions/signup.php" method="post">
            <div class="form">
                <h1>| DailyDairy</h1><hr>
                Full Name
                <input type="text" name="fullname" required />
                <br><br>
                Email Address
                <input type="text" name="email" required/>
                <br><br>
                Username
                <input type="text" name="username" required/>
                <br><br>Password
                <input type="password" name="password" required /> <br><br>
                <input type="submit" value="SignUp" class="btn btn-info" style="padding-left:20px;padding-right:20px;"><br><br>
                <p><a href="login.php" class="text-info small">Already have an account ? Login</a></p>
            </div>
            </form>
        </center>
        <div class="navbar">
            <h1 class="pull-left">| Create Account</h1>
            <div class="icon pull-right">
                <a class="btn btn-default" href="login.php" role="button" style="border-radius: 0px;"> Login </a>
            </div>
        </div>
    </body>
</html>