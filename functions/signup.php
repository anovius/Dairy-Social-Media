<?php
    session_start();
    include 'connect.php';
    $fullname = $_POST['fullname'];
    $fullname=mysqli_real_escape_string($con,$fullname);
    $email = $_POST['email'];
    $email=mysqli_real_escape_string($con,$email);
    $username = $_POST['username'];
    $username=mysqli_real_escape_string($con,$username);
    $password = $_POST['password'];
    $password=mysqli_real_escape_string($con,$password);
    $que = "INSERT INTO `users` (`fullname`,`email`,`username`,`password`) VALUES ('$fullname','$email','$username','$password')";
    $que2 = "SELECT * FROM users where username='$username'";
	$check = mysqli_query($con,$que2);
	if (mysqli_fetch_array($check) !=0) {
				echo "<script>alert('Username Alredy Exist');window.location.href='../signup.php'</script>";
	}
	else{
        $run = mysqli_query($con,$que);
        $_SESSION ['username']= $username ;
		echo "<script>alert('Successfuly Registered');window.location.href='../home.php'</script>";
}
?>