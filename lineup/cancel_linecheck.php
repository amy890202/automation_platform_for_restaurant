<?php
header("Content-type:text/html;charset=utf-8");
$servername = "localhost"; //伺服器連線名
$username = "root"; //資料庫使用者名稱
$password = ""; //資料庫密碼
$dbname = "eat_go"; //資料庫名
$conn = new mysqli($servername, $username, $password, $dbname); //連線資料庫
if (!$conn) {
	die("連線失敗：" . mysqli_connect_error()); //連線資料庫失敗則殺死程序
}

if (isset($_POST['submit']))
{
  
    $f_member_id=$_COOKIE['member_id'];
  //$sql = "SELECT f_member_id FROM inline WHERE f_member_id = '$f_member_id'";
 

  	$sql = "DELETE FROM inline WHERE  f_member_id=$f_member_id";
    if (mysqli_query($conn, $sql)) 
    {/*
          var d = new Date();
			    d.setTime(d.getTime() -(24*60*60*1000));
			    var expires = \"expires=\"+d.toUTCString();
          document.cookie =\" squence\" + \"=\" + \"\" + \"; \" + expires+\"; path=/\";*/
          setcookie("squence","",time()-24*60*60);
      echo "<script> alert('您已取消排隊');
          parent.location.href='http://localhost/DB_finnal/main_page/after.php'; </script>";
    } 
    else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }  

  
}
?>




