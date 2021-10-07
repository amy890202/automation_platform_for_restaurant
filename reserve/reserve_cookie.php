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
    'customer_num'=>$_POST["customer_num"],
    'reserving_date'=>$_POST["reserving_date"],
    'reserving_time'=>$_POST["reserving_time"]
  ];
  /*if( !isset($query['realname'])||!isset( $query['customer_num'])||!isset( $query['cellphone']))
       echo "<script> alert('請輸入完全!');
          parent.location.href='/DB_finnal/member_reg.php'; </script>";*/
  insertData($query['f_branch_id'],$query['customer_num'],$query['reserving_date'],$query['reserving_time'],$conn);
}
 
function insertData($branch_id,$customer_num,$reserving_date,$reserving_time, $conn) 
{
    $time = time()+24*60*60;   
    setcookie('branch_id', $branch_id, $time, "/");  
    setcookie('customer_num', $customer_num, $time, "/");  
    setcookie('reserving_date', $reserving_date, $time, "/");  
    setcookie('reserving_time', $reserving_time, $time, "/");  
    echo "<script> 
          parent.location.href='http://localhost/DB_finnal/reserve/seat_reserve.php'; </script>";
}
?>





