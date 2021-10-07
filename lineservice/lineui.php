


<script>
    //setInterval('window.location.reload();',1000);
function not(item){

    
    //alert('帳號或密碼錯誤');
    window.location.href="test.php?value="+item;
}
        </script>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>管理員登錄</title>

</head>
<body>

<form name="form1" class="form-signin" method="POST" action="inlinecheck.php">
                
                    <h2>請選擇分店:
                <input type="radio" checked="checked" name="f_branch_id" value= "1" />台北市中正區
                <input type="radio"  name="f_branch_id" value="2" />台北市板橋區
                <input type="radio" checked="checked" name="f_branch_id" value= "3" />台北市松山區
                <input type="radio"  name="f_branch_id" value="4" />台北市大同區
                <input type="radio"  name="f_branch_id" value="5" />新竹市東區大學路
                
                <br><br>

                <button type="submit" class="btn"  name="submit" style='font-size:16px'><span style="font-family:Microsoft JhengHei;">確定 </span></button>
                
			</form>
</body>
</html>