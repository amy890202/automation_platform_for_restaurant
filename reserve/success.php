<?php
header("Content-type:text/html;charset=utf-8");
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}
$dbname = "eat_go";
$conn = new mysqli($servername, $username, $password, $dbname);
if (isset($_COOKIE['seat_x_y']) )
{
    $col=intval($_COOKIE['seat_x_y']/10);
    $row=$_COOKIE['seat_x_y']%10;
    $f_member_id=$_COOKIE['member_id'];
	$ff_branch_id=$_COOKIE['branch_id'];
	$customer_num=$_COOKIE['customer_num'];
	$reserving_date=$_COOKIE['reserving_date'];
	$reserving_time=$_COOKIE['reserving_time'];
    reserve($col,$row,$conn,$f_member_id,$ff_branch_id,$customer_num,$reserving_date,$reserving_time);
} 
function reserve($x,$y,$conn,$f_member_id,$ff_branch_id,$customer_num,$reserving_date,$reserving_time) 
{
    $upda = "UPDATE seat S set is_start='no' WHERE x = '$x'AND y='$y' AND is_start='yes'";    
	if (mysqli_query($conn, $upda)) 
	{
		$selc="SELECT seat_id FROM seat WHERE f_branch_id='$ff_branch_id'AND x = '$x'AND y='$y'";
		$result = mysqli_query($conn, $selc);
		$row = mysqli_fetch_assoc($result);
		$f_seat_id=$row['seat_id'];
		mysqli_query($conn,"INSERT INTO reserving (f_member_id,ff_branch_id,f_seat_id,customer_num,reserving_date,reserving_time)VALUES ('$f_member_id','$ff_branch_id','$f_seat_id','$customer_num','$reserving_date','$reserving_time')");
		echo "<script> alert('訂位成功');
          parent.location.href='/DB_finnal/main_page/after.php'; </script>";
		
	  
	} 
	else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}  
    
  
}