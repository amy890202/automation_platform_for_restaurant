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
  $query = [
    'f_branch_id'=>$_POST["f_branch_id"],  
  	'realname'=>$_POST["realname"],
    'customer_num'=>$_POST["customer_num"],
    'cellphone' => $_POST["cellphone"],
  ];
  /*if( !isset($query['realname'])||!isset( $query['customer_num'])||!isset( $query['cellphone']))
       echo "<script> alert('請輸入完全!');
          parent.location.href='/DB_finnal/member_reg.php'; </script>";*/
  insertData($query['f_branch_id'],$query['realname'],$query['customer_num'], $query['cellphone'],$conn);
}
 
function insertData($f_branch_id,$realname,$customer_num ,$cellphone, $conn) 
{
    $f_member_id=$_COOKIE['member_id'];
  $sql = "SELECT f_member_id ,squence FROM inline WHERE f_member_id = '$f_member_id'";
  $f_member_id_result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($f_member_id_result) > 0) {
    echo "<script> alert('您已登記排隊!');
          parent.location.href='http://localhost/DB_finnal/lineup/cancel_line.php'; </script>";
  }  
  else{
  	$sql2 = "INSERT INTO inline ( f_member_id,f_branch_id,realname,customer_num ,cellphone)VALUES ( $f_member_id,$f_branch_id,'$realname','$customer_num','$cellphone')";
      
     
      if (mysqli_query($conn, $sql2)) 
    {
      $sql1 =	"SELECT squence FROM inline WHERE f_member_id = '$f_member_id' ";
      $result = mysqli_query($conn, $sql1);
      $row = mysqli_fetch_assoc($result);
      $time = time()+24*60*60;    
      setcookie('squence', $row['squence'], $time, "/");  
      echo "<script> alert('您已成功排隊');
          parent.location.href='http://localhost/DB_finnal/lineup/cancel_line.php'; </script>";
    } 
    else {
      echo "Error: " . $sql2 . "<br>" . $conn->error;
    }  

  }
}
?>





