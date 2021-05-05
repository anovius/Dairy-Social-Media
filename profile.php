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
        <title>Profile</title>
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
        <br><br><br><br>
        <center>
        <h2>Your Profile</h2>
        <hr>
        <?php
        $que = "SELECT * FROM `dairy` WHERE username='$username'";
        $run2 = mysqli_query($con,$que);
        while($row=mysqli_fetch_row($run2)){
            $dairy=$row[2];
            $privacy=$row[3];
        ?>
        <div class="col-md-4" style="text-align:left;">
            <b><?php echo $fullname;?><br></b>
            <u><?php echo '@',$username;?><br></u>
            <?php echo $dairy;?>
        </div><br><br>
        <hr><br>
        <?php }?>
        </center>
        <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Search</h4>
      </div>
      <div class="modal-body">
        <form method="post">
            <input type="text" class="form-group" id="search" placeholder=" Enter name ..." style="width:200px;height:30px;border:none;" required>
        </form>
        <div align="left" id="result"></div>
        </div>
      </div>
    </div>

  </div>
</div>
<div class="navbar">
            <h1 class="pull-left">|<?php echo $fullname;?> </h1>
            <div class="icon pull-right">
                <a class="btn btn-default" href="#" role="button" style="border-radius: 0px;"> Settings </a>
            </div>
        </div>
        <div class="menu" style="background-color:white;">
            <center>
                <i class="fa fa-home"></i>
                <i class="fa fa-search" data-toggle="modal" data-target="#myModal"></i>
               <a href="writer.php"><i class="fa fa-plus-square"></i></a>
                <i class="fa fa-globe"></i>
                <a href="profile.php"><i class="fa fa-user"></i></a>
            </center>
        </div>
    </body>
    <script type="text/javascript">
  $(document).ready(function () {
    $('#search').keyup(function(){
      var text = $('#search').val();
      if(text == ''){
        $('#result').html('');
      }
      else{
        $.ajax({
          url : "functions/search.php",
          method : "post",
          data : {search : text},
          dataType : "text",
          success:function(data)
          {
            $('#result').html(data);  
          }
        });
      }
    });
  })
</script>
</html>