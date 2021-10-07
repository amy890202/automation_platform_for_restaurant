

<script>
    /*
function no(item){
   // location.href="lineup_service.php?value=" +item;
    alert(item);
    $.ajax({
    url: "_line_service_action.php",
    method: "POST",
    data: {
        "item": item
    },
    error:function(){
        alert("失敗");
    },
    success:function(){
        alert("成功");
    } 
});

}*/
</script>
   
   <?php
   $seq = $_GET['value'];
   //echo $seq;


    header("Content-type:text/html;charset=utf-8");
require_once dirname(__FILE__)."/DB_create.php";
//require_once dirname(__FILE__)."/line_service_action.php";
if (isset($_COOKIE["branch"]))//沒有cookie資料
  { 
    $branch=$_COOKIE["branch"];
  }
  else{
    $branch = 1;
  }

$conn = db_check();
//$conn = mysqli_connect($db_host, $db_user, $db_pass);
//mysqli_select_db($conn,$db_name );

$sql = "SELECT  squence,cellphone FROM inline  WHERE  squence = $seq AND f_branch_id = '$branch'";
$result = mysqli_query($conn, $sql)
    or die ('Error in query');
    
        
    
    if (mysqli_num_rows($result))
    {
        $row = mysqli_fetch_row($result);
        // Update the user record
        //$query = "UPDATE susers SET guid = '$row[1]' WHERE userid = $row[0]";
        $query = "DELETE FROM inline WHERE squence = $seq AND f_branch_id = '$branch'" ;
        $upd_query = "UPDATE inline SET squence = squence-1 WHERE  f_branch_id = '$branch' AND (squence > $seq)";
       //$query = "UPDATE lineup SET  sequence = 0 WHERE sequence = $seq";
        mysqli_query($conn,$query)
            or die('Error in query');
        mysqli_query($conn,$upd_query)
            or die('Error in query');
      // header("Location: http://localhost/HW3_0713401_%E7%8E%8B%E6%98%A0%E7%B5%9C/view/index.php");
       // echo "成功";
       header("Location: /DB_finnal/call.php?value=".$row[1]);
       
      ?>
      
       
       <?php
    }
    else
    { 
        //header("Location: /HW3_0713401_王映絜/view/edit.php?error=密碼輸入錯誤");
           //break;
           ?>
           <script>
               alert('failed');
           </script>
           <?php
    }
    $conn->close();
?>