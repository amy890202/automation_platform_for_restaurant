
<!DOCTYPE HTML>
<html>
<head>
<title>會員中心訂位紀錄</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- css -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/dashboard.css" rel="stylesheet">
<link href="css/style.css" rel='stylesheet' type='text/css' />

  
</head>
<body>
<?php
	$servername = "localhost"; //伺服器連線名
	$username = "root"; //資料庫使用者名稱
	$password = ""; //資料庫密碼
	$dbname = "eat_go"; //資料庫名
	$conn = new mysqli($servername, $username, $password, $dbname); //連線資料庫
	if (!$conn) {
		die("連線失敗：" . mysqli_connect_error()); //連線資料庫失敗則殺死程序
	}
	$username=$_COOKIE['username'];
	$level = "SELECT member_id,level FROM member WHERE username = '$username'";
	$level_result = mysqli_query($conn, $level);
	$level_row = mysqli_fetch_assoc($level_result);
?>
<!-- left -->
<div class="col-sm-3 col-md-2 sidebar">
		 <div class="sidebar_top">
			 <h1>會員中心</h1> 
			 <img src="images/avt.png" alt=""/>
		 </div>
		<div class="details">
			<h2>帳號</h2>
			<p><?php echo $_COOKIE['username']?></p> 
			<h2>性別</h2>
			<p><?php echo $_COOKIE['sex']?></p>  	 
			<h2>E-MAIL</h2>
			<p><?php echo $_COOKIE['email']?></p>	
			<h2>會員等級</h2>
			<p><?php echo $level_row['level']?></p>				 
		</div>
		<div class="clearfix"></div>
</div>

<!--right-->
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	 <div class="content">
	 	 <!-- top-bar -->
		 <div class="details_header">
		 	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
			 <ul>
			 	 <li><a href="http://localhost/DB_finnal/main_page/after.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;&nbsp;主頁面</a></li>
				 <li><a href="reserve_record.php"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;&nbsp;訂位紀錄</a></li>
				 <li><a href="index.php"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>歷史用餐紀錄</a></li>
				 <!-- <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>個人帳戶管理</a></li> -->
				 <li><a href="changepassword.php"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>修改密碼</a></li>
				 <li><a href="http://localhost/DB_finnal/logout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>會員登出</a></li>
			 </ul>
		 </div>
		 <div class="contact-grid">
			 <h2 class="clr1">Reset Password</h2>

		<br><br><br>
		<!-- table -->
		<!-- <table style="width: 420px; border-color: white; background-color: grey; height: 35px; margin-left: auto; margin-right: auto;">
			<tbody>
				<tr>
					<td style="width: 75px;">&nbsp;用餐日期</td>
					<td style="width: 75.6667px;">用餐時間&nbsp;</td>
					<td style="width: 103.333px;">用餐分店&nbsp;</td>
					<td style="width: 44px;">人數&nbsp;</td>
					<td style="width: 120px;">電話&nbsp;</td>
				</tr>
			</tbody>
		</table> -->
		
		<form action="http://localhost/DB_finnal/reset_check.php" method="get">	
			輸入舊密碼：<input type="text"  name="password" required="" placeholder="Original password" >	<br>	
			輸入新密碼：<input type="text"  name="new_password1" required=""  placeholder="New password" ><br>
			確認新密碼：<input type="text"  name="new_password2" required="" placeholder="Confirmed password" ><br><br><br>		
			<!-- <textarea cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea> -->
			<div class="send">
				<input name="submit" type="submit" value="更新密碼" >
			</div>
		</form>
	 </div>
</div>
<!---->
<!---mark---->
<ul class="mark">
	<li>
		<div class="banner-top">
			<div class="banner-info_agile_w3ls">
				<h3>饗  食  <span>GO</span></h3>
			</div>
		</div>
	</li>
</ul>
<!---->
</body>
</html>
<style>
.mark
	{
		position:fixed;
		width:500px;
		left:1180px;
		top:230px;
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
		color: black;
		font-weight: 100;
		letter-spacing: 1px;
	}
</style>