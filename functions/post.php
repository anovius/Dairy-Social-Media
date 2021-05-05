<?php
    session_start();
    $username=$_SESSION ['username'];
    include 'connect.php';
    $dairy = $_POST['dairy'];
    $dairy=mysqli_real_escape_string($con,$dairy);
    $privacy = $_POST['privacy'];
    $privacy=mysqli_real_escape_string($con,$privacy);
    $que = "INSERT INTO `dairy` (`username`,`dairy`,`privacy`) VALUES ('$username','$dairy','$privacy')";
    $run = mysqli_query($con,$que);
    echo "<script>alert('Posted');window.location.href='../profile.php'</script>";
?>