

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
//date_default_timezone_set('PRC');
$f_member_id=$_COOKIE['member_id'];
$sql = "SELECT squence FROM inline WHERE f_member_id = '$f_member_id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$time = time()+24*60*60;    
setcookie('squence', $row['squence'], $time, "/");  
$mine=$_COOKIE['squence'];
$sql1 =	"SELECT COUNT(*) FROM inline WHERE $mine > squence ";


$result2 = mysqli_query($conn, $sql1);
$row1=mysqli_fetch_row($result2);
//echo "您尚須等待". $count= $row1[0]."組客人!";

 
//$classId = $row->count;


//echo $classId;

//echo "<br/><br/>";

?>
<body>
	<EMBED src="image/背景音乐.mp3"autostart="true" loop="true" hidden="true"> 

		 <div class="nav">
			
     <ul class="mark">
                    <li>
                        <div class="banner-top">
                            <div class="banner-info_agile_w3ls">
                                <h3>饗  食  <span>GO</span></h3>
                            </div>
                        </div>
                    </li>
                </ul>
			</div>	
			<div class="nav1">
			<span style="font-family:Microsoft JhengHei;"><h1><?php echo $_COOKIE["username"]."您好"; ?></h1><br></span>
      <span style="font-family:Microsoft JhengHei;"><h1><?php echo "您的序號為:".$_COOKIE["squence"]; ?></h1></span>
      <p>
      <img src="picture/queue.png" width="70" height="70" style="float: center" >
      <p>
			<span style="font-family:Microsoft JhengHei;"><h1><?php echo "您尚須等待". $count= $row1[0]."組客人!"; ?></h1></span>
           
			<form name="form1" method="POST" action="/DB_finnal/lineup/cancel_linecheck.php">
      <span style="font-family:Microsoft JhengHei;">	<h2><?php echo "<pre>      <a href='http://localhost/DB_finnal/main_page/after.php'><font color='#FFFFFF'>回到個人頁面 </font></a> ";?></h2></span>
		  <button type="submit" class="btn"  name="submit" style='font-size:16px'>><span style="font-family:Microsoft JhengHei;">取消排隊</span></button>

		</div>
			</form>			
 
</body>
 
			
<style>

  .mark
	{
		position:fixed;
		width:500px;
		left:550px;
		top:-380px;
	}

	.banner-info_agile_w3ls {
		text-align: left;
		padding: 23em 5em 0 4em;
		width: 80%;
	}

	.banner-info_agile_w3ls h3 span {
		background: #ffa41f;
		padding: 0 15px;
		color: #000;
		
	}

	.banner-info_agile_w3ls h3 {
		font-size: 3em;
		color: white;
		font-weight: 100;
		letter-spacing: 1px;
	}


  body{
    background-color:#000000;
  }
  .nav {
    color:rgba(255,255,255,0.01);
    margin-left: 15%;
    width: 1000px;
    height: 100px;
    padding :20px;
    position: absolute;
    text-align: center;
    background-color: rgba(255,255,255,0.25);
    border-radius: 10px;
    border:3px #FFEBCD ;
  }
  .nav1 {
    margin-left: 15%;
    margin-top: 200px;
    width: 1000px;
    height: 220px;
    padding :20px;
    position: absolute;
    text-align: center;
    background-color: rgba(255,255,255,0.25);
    border-radius: 10px;
    border:3px #FFEBCD ;
  }
  h1{
    color:white;
    text-align: center;
    font-size: 16px;
    line-height: 10px;
    letter-spacing: 2px;
    font-weight:300;
    
  }
  h2{
    font-size: 16px;
    line-height: 20px;
    text-align: left;
    letter-spacing: 1px;
    color:black;
  }
  .btn{

    margin-left: 15%;
    background-color: #ffa41f; 
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 1px 1px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    position:relative;
    top:-20px;
  }

  .btn:hover {
      box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
  }
</style>