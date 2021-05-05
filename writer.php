<?php
    session_start();
    if(isset($_SESSION ['username'])){
      $username = $_SESSION ['username'];
    }
    else{
      echo "You are not logged in. Click <a href='login.php'>here</a> to login in.<br/> ";
      exit();
    }
?>
<?php
    include 'functions/connect.php';
    $query = "SELECT * FROM `users` WHERE username='$username'";
    $run = mysqli_query($con,$query);
	while($row=mysqli_fetch_row($run)){
		$fullname=$row[1];
	}
?>
<html>
    <head>
        <title>Make Diary</title>
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
        <br><br><br><br><br><br>
        <center>
        <div class="col-md-4"></div>
            <div class="col-md-3" style="text-align:left;">
            <form action="functions/post.php" method="post">
            <div class="form-group">
                <h2 class="pull-left">Write:</h2>
                <div class="pull-right">
                Privacy 
                <select name="privacy">
                    <option value="1">Public</option>
                    <option value="2">Frinds</option>
                    <option value="3">Only Me</option>
                 </select>
                 </div>
                <textarea class="form-control" rows="8" name="dairy"></textarea><br>
                <input type="submit" value="Post" class="btn btn-info"><br><br>
            </div>
        </form>
        <br><br>
            </div>
            <div class="col-md-4"></div>
        </center>
        <div class="navbar">
            <h1 class="pull-left">|Make Diary </h1>
        </div>
        <div class="menu">
            <center>
                <i class="fa fa-home"></i>
                <i class="fa fa-search"></i>
                <i class="fa fa-plus-square"></i>
                <i class="fa fa-globe"></i>
                <i class="fa fa-user"></i>
            </center>
        </div>
    </body>
</html>