<html>
<?php
    
  
  if (isset($_COOKIE["branch"]))//沒有cookie資料
  { 
    $branch=$_COOKIE["branch"];
  }
  else{
    $branch = 1;
  }

 $sequence =0;
 $realname = '';
 $person  = 0;
 $phone = '';
 $choosekey=0;
 
 header("Content-type:text/html;charset=utf-8");
 #include("test.php");
 require_once dirname(__FILE__)."/DB_create.php";
 //require_once dirname(__FILE__)."/line_service_action.php";
 
 $conn = db_check();
$sql = "SELECT  squence,realname,customer_num,cellphone FROM inline WHERE f_branch_id = '$branch' ORDER BY squence ASC"; 
$result = mysqli_query($conn, $sql)
      or die ('Error in query');

      echo '<table style="background-color: #9d9d9d; width: 750px; height: 38px; position:fixed; left:270px;top:190px;">';
      echo '<tbody>';
      echo '<tr>';
       echo '<td style="width: 85px;">&nbsp;&nbsp;&nbsp;順序</td>';
       echo '<td style="width: 95.4px;">姓名&nbsp;</td>';
       echo '<td style="width: 110px;">用餐人數&nbsp;</td>';
       echo '<td style="width: 20px;">&nbsp;</td>';
       
     echo '</tr>';
      echo '</tbody>';
     echo '</table>';
     echo '<div class=line>';
  for( $i=0 ;$i<mysqli_num_rows($result) ;$i++)
{
    $row = mysqli_fetch_row($result);
    mysqli_query($conn,$sql )
      or die('Error in query');
    $sequence=$row[0];
    $realname=$row[1];
   $person= $row[2];
   $phone =$row[3];
  $space='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
  echo '&nbsp;&nbsp;&nbsp;'.$row[0] .$space .$row[1]. $space.$row[2].$space;
  echo "<input type='button' value='通知' onclick='no($row[0])'>";
  echo '<br>';
}
echo '</div>';

/*
if ($result->num_rows > 0) { 
// 輸出每行數據 
 while($row = $result->fetch_assoc()) { 
        echo $row[0]; 
 } 
}else{ 
echo "0 個結果"; 
}  
$conn->close();
*/

//for( $i=0 ;$i<mysqli_num_rows($result) ;$i++) 
//(mysqli_num_rows($result)!=0)

       


?>
</html>
<style>
 .line
 {
  position:relative;
  top:228px;
  left:270px;
  font-size:18px;
  line-height:40px;
 }
 </style>
