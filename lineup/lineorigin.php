<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>排隊登記</title>

</head>
<body>
	<EMBED src="image/背景音乐.mp3"autostart="true" loop="true" hidden="true"> 

	     <div class="coverflow">
           	<a href="#"><img width= 780 height=370 src="picture/7.jpg"></a>
    		<a href="#"><img width= 600 height=363 src="picture/8.jpg"></a>
     		<a href="#"><img width= 780 height=370 src="picture/9.jpg"></a>
		 </div>
		 <div class="nav">
			<form name="form1" class="form-signin" method="POST" action="people_inlinecheck.php">
                <ul class="mark">
                    <li>
                        <div class="banner-top">
                            <div class="banner-info_agile_w3ls">
                                <h3>饗  食  <span>GO</span></h3>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class='word'>
                    <h2>請選擇分店:
                <input type="radio" checked="checked" name="f_branch_id" value= "1" />台北市中正區
                <input type="radio"  name="f_branch_id" value="2" />台北市板橋區
                <input type="radio" checked="checked" name="f_branch_id" value= "3" />台北市松山區
                <input type="radio"  name="f_branch_id" value="4" />台北市大同區
                <input type="radio"  name="f_branch_id" value="5" />新竹市東區大學路
                <br><br>
                <span style="font-family:'Roboto', 'Noto Sans TC', sans-serif;">真實姓名:</span>
                    <input name="realname" type="text" id="realname" placeholder="realname">&nbsp;&nbsp;&nbsp;
                    <span style="font-family:'Roboto', 'Noto Sans TC', sans-serif;">用餐人數:</span>
                    <input name="customer_num" type="number" id="customer_num" placeholder="customer_num">&nbsp;&nbsp;&nbsp;
                    <span style="font-family:'Roboto', 'Noto Sans TC', sans-serif;">連絡電話:</span>
                    <input name="cellphone" type="text" id="cellphone" placeholder="cellphone"><br></h2><p><p>
                    <button type="submit" class="btn"  name="submit" style='font-size:16px'><span style="font-family:Microsoft JhengHei;">確定 </span></button>
                </div>	
			</form>
        </div>

</body>
</html>
<style>
    .word
	{
		position:fixed;
		left:300px;
		top:500px;
	}
    .mark
	{
		position:fixed;
		width:500px;
		left:150px;
		top:30px;
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
		font-size: 2em;
		color: black;
		font-weight: 100;
		letter-spacing: 1px;
	}


.header{
	border:1px solid red;
	padding:15px;
}


.coverflow{
	width: 1000px;
    height: 220px;
	margin-left: 23%;
	position: relative;
	//width: 100%;
	min-height: 370px;

  
    }
    .coverflow>a{
        display: block;
	  position: absolute;
        top:0;
        left:0;
        opacity: 0;
    filter: alpha(opacity=0);
    /*當圖片數量增加，影片長度需更改，變為5s*圖片數量*/
    -webkit-animation: silder 15s linear infinite;
                    animation: silder 15s linear infinite;
    }
    .coverflow>a>img{
       // max-width: 100%;
    }

/*動畫關鍵影格*/
    @-webkit-keyframes silder {
        3% {
            opacity: 1;
            filter: alpha(opacity=100);
        }
        27% {
            opacity: 1;
            filter: alpha(opacity=100);
        }
        30% {
            opacity: 0;
            filter: alpha(opacity=0);
        }
    }
    @keyframes silder {
        3% {
            opacity: 1;
            filter: alpha(opacity=100);
        }
        27% {
            opacity: 1;
            filter: alpha(opacity=100);
        }
        30% {
            opacity: 0;
            filter: alpha(opacity=0);
        }
    }

/*每個圖片各延遲5秒*/
    .coverflow>a:nth-child(3) {
        -webkit-animation-delay: 10s;
                animation-delay: 10s;               
    }

    .coverflow>a:nth-child(2) {
        -webkit-animation-delay: 5s;
                animation-delay: 5s;
    }

    .coverflow>a:nth-child(1) {
        -webkit-animation-delay: 0s;
                animation-delay: 0s;    
    }
/*滑入時停止播放*/
    .coverflow:hover>a{
    -webkit-animation-play-state: paused;
            animation-play-state: paused;
}
body{
	background-color: 	#000000;
}
.nav {
 margin-left: 15%;
  margin-top: 20px;
	width: 1000px;
  height: 220px;
  padding :20px;
  position: absolute;
  //text-align: center;
  background-color: #FFFFFF;
  border-radius: 10px;
  border:3px #FFEBCD ;
}

h2{
	color: rgb(0, 0, 0); 
  font-size: 16px;
  line-height: 20px;
  letter-spacing: 1px;
}
.btn{
	 display: inline-block;
  border-radius: 4px;
  background-color:#EFA52C;
  border: none;
  color: #000000;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  text-align: center; 
  padding: 3px 70px;
  margin-left: 37%;
}

.btn span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.btn span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.btn:hover span {
  padding-right: 25px;
}

.btn:hover span:after {
  opacity: 1;
  right: 0;
}
input{
    outline-style: none ;
    border: 1px solid #ccc; 
	border-radius: 3px;
	padding: 8px 9px;
    font-size: 12px;
    font-weight: 500;
}
input:focus{
    border-color: #66afe9;
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6)
}
</style>