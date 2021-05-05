<style>
a{
	border:none;
}
</style>
Search Results :<br>
<?php 
	include 'connect.php';
        $search = $_POST['search'];
        $search=mysqli_real_escape_string($con,$search);
		$que = "SELECT * FROM `users` where fullname LIKE '%".$search."%'";
		$run = mysqli_query($con,$que);
		if (mysqli_num_rows($run) >0) {
			while ($row=mysqli_fetch_row($run)) {
				$fullname = $row[1];
                $result = $row[3];
            ?>
			<br><p style="color:gray;font-size:14px;">
			<a href="functions/result.php?result=<?php echo $result?>">
			<?php
			echo $fullname,"<br>";
            echo '@',$result;
			}
		}
		else {
			echo "Oopps...No Record Found..";
		}
?>
</p>