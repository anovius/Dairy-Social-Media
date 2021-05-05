<?php
    session_start();
    include 'connect.php';
    $username = $_POST['username'];
    $username=mysqli_real_escape_string($con,$username);
    $password = $_POST['password'];
    $password=mysqli_real_escape_string($con,$password);
    $query = "select * from `users` where `username` = '$username' && `password` = '$password'";
    $run = mysqli_query($con,$query);
    $check = mysqli_num_rows($run) ;
    if($check>0){
        $_SESSION ['username']= $username ;
        echo "<script>window.location.href='../home.php'</script>";
    }
    else{
        echo "<script>alert('Inncorrect Usename or Password');window.location.href='../login.php'</script>";
    }
?>