<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
        
        body,html{
            width:100%;
           height:100%;
            background-color:black;
        }
        .word{
        font-size: 28px;
        font-weight:bold;
        font-family:"Microsoft JhengHei",PMingLiU,SimHei;
        color:black;
        text-align:center;
        cursor:context-menu;    
    }
        
.btn{
  display: inline-block;
  border-radius: 8px;
  background-color:black;
  border: none;
  color: #fff;
  text-align: center;
  font-size: 30px;
font-weight:bold;
  padding: 2%;
margin:10% 25%;
    width:50%;
  transition: all 0.5s;
  cursor: pointer;
}

.btn span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.btn span:after 
{
  content: '»';
  position: absolute;
  opacity: 1;
    top:0;
  right: -20px;
  transition: 0.5s;
}

.btn:hover span {
  padding-right: 25px;
     opacity: 1;
}

.btn:hover span:after {
  right: 0;
    opacity:1;
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
      .text
      {
        margin-left: 100px;
        color: red;
      }
      #seat_table
        {
        position:relative;
        float:left;
        left:300px;
        top:150px;
        width:950px;
        height:800px;
        background:#363b3f;
        
      }
      .block
      {
        margin-top: 20px;
        margin-left:30px;
        /*border: 1px solid pink;*/
        width: 75px;
        height:75px;
        background-color:#363b3f;
          
        /*box-sizing: border-box;*/        
        border: 0;       
      } 
      .seat_canuse
      {
        margin-top: 20px;
        margin-left:30px;
        color:green;
        width: 70px;
        height:70px;
        cursor:pointer;
        background-color: white;
        /*box-sizing: border-box;*/        
        border: 0;       
      }
      .seat_cannotuse
      {
        margin-top: 20px;
        margin-left:30px;
        color:red;
        width: 70px;
        height:70px;
        cursor:not-allowed;
        background-color: white;
        /*box-sizing: border-box;*/        
        border: 0;       
      }
      /*弹出框*/
      .tip{
          width:485px; 
          height:260px;
          padding:10px;
          position:absolute;
          top:30%;
          left:35%;
          background:white;
          box-shadow:1px 8px 10px 1px #9b9b9b;
          border-radius:4px;
          behavior:url(js/pie.htc);
          display:block; 
          z-index:1;
        }
      .tip_title{ 
          background-color:#ffa41f;
          height:15%;
            
        }
      .tip_title span { 
          color:#FFF; 
          line-height:30px; 
          padding-left:15px; 
          font-size:12px; 
          float:left;
        }
      .tip_title a { 
          float:right; 
          width:20px; 
          height:20px; 
          color:#FFF;  
          display:block; 
          cursor:pointer;
        }
      .tip_title a:hover{ 
          color:#000; 
          cursor:pointer;
        }
      .tip_info{
          width:308px;
          height:85px; 
          margin:25px auto;
        }
      .tip_info span img{ 
          float:left;
        }
      .tip_info p { 
          font-size:12px; 
          color:#000; 
          font-weight:bold; 
          line-height:26px; 
          padding-top:15px;
        }

        /*div for button*/
        .tip_button{ 
          height:100px;
          width:485px; 
          padding:2% 10%;
            align-items:center;
        }
      .tip_button button{ 
          width:50px; 
          height:30px; 
          margin-left:10px;
          cursor:pointer;
        }
        

        
        /*top menu*/
        .topnav {
          position:absolute;
          top:0;
            left:0;
            right:10px;
          width:auto;
        padding:15px;
          overflow: hidden;
          background-color: black;
        }

        .topnav a {
          float: right;
          color: #f2f2f2;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
          font-size: 30px;
          font:sans-serif;
        }

        .topnav a:hover {
          background-color: orange;
          color: black;
        }
        

        
        /*內容div*/
        .main
        {
           position:absolute;
            background-color:black;
            width:100%;
            height:100%;
            
        }
        
        /*訂位資訊*/
        .info{
            /*position:absolute;*/
            float:left;
            margin-top:150px;
            margin-left:10px;
            width:800px;
            height:1150px;
            background-color:orange;
            text-align:center;
            
        }
        .mark	{
		position:absolute;
		width:300px;
		left:20px;
		top:-40px;
	}
        
    .banner-info_agile_w3ls {
		text-align: left;
		padding: 23px 5px 0 4px;
		width: 80%;
        
	}

	.banner-info_agile_w3ls h3 span {
		background: rgb(255, 164, 31);
		padding: 0 15px;
		color: #000;
		
	}

	.banner-info_agile_w3ls h3 {
		font-size: 3em;
		color: black;
		font-weight: 100;
		letter-spacing: 1px;
	}
    .footer{
        clear:both;
            width:100%;
            height:100px;
        text-align: center;
        background-color:black;
        }
    .bt_center{
            margin:0;
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
        }

            
    </style>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript">  
        var a="ss";
        var str=a+"dsjhjn";
        window.onload = function create_seat_table() 
        {
          var seat_table= document.getElementById("seat_table");
          for(var i=1;i<10;i++)
            for(var j=1;j<10;j++)
            {
                var block=document.createElement("button");
                block.className='block';
                var n=10*i+j;
                block.id=n;
                seat_table.appendChild(block);
            }
          

          <?php
          function db_check() 
          {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $conn = new mysqli($servername, $username, $password);
            if ($conn->connect_error) 
            {
              die("Connection failed: " . $conn->connect_error);
            }
            $dbname = "eat_go";
            return  $conn = new mysqli($servername, $username, $password, $dbname);
          }
          function checkseat($conn,$ff_branch_id) 
          {
            $sql = "SELECT  x,y,x_people_table,is_start FROM seat WHERE f_branch_id='$ff_branch_id'";
            $result = mysqli_query($conn,$sql);
            while($r=mysqli_fetch_row($result))
            {
              $coord=$r[0]*10+$r[1];
              echo"var e = document.getElementById($coord); ";
              //===============================================================
              /*if($r[3]=="yes")
                { 
                  echo "e.className='seat_canuse';";
                  echo "e.innerHTML= \"可預訂 \";";             
                  echo "e.setAttribute(\"onclick\", \"maketip(this);\");";
                }
              if($r[3]=="no")
              {
                echo "e.className='seat_cannotuse';";
                echo "e.innerHTML= \"已預訂 \";";             
                //echo "e.setAttribute(\"onclick\", \"javascript:alert('不行喔');\");";
              }
              //===============================================================
              if($r[2]==2)
                echo "e.setAttribute('style','background-image:url(2人.png)');";
              if($r[2]==4)
                echo "e.setAttribute('style','background-image:url(4人.png)');";
              if($r[2]==6)
                echo "e.setAttribute('style','background-image:url(6人.png)');";*/
                if($r[2]==2)
                        {
                            if($r[3]=="yes")
                            { 
                              echo "e.className='seat_canuse';";
                               echo "e.setAttribute('style','background-image:url(a2.png)');";        
                              echo "e.setAttribute(\"onclick\", \"maketip(this);\");";
                            }
                              if($r[3]=="no")
                              {
                                echo "e.className='seat_cannotuse';";
                                echo "e.setAttribute('style','background-image:url(n2.png)');";        

                              }
                        }
                        
                         if($r[2]==4)
                        {
                            if($r[3]=="yes")
                            { 
                              echo "e.className='seat_canuse';";
                               echo "e.setAttribute('style','background-image:url(a4.png)');";        
                              echo "e.setAttribute(\"onclick\", \"maketip(this);\");";
                            }
                              if($r[3]=="no")
                              {
                                echo "e.className='seat_cannotuse';";
                                echo "e.setAttribute('style','background-image:url(n4.png)');";        

                              }
                        }
                        
                        if($r[2]==6)
                        {
                            if($r[3]=="yes")
                            { 
                              echo "e.className='seat_canuse';";
                               echo "e.setAttribute('style','background-image:url(a6.png)');";        
                              echo "e.setAttribute(\"onclick\", \"maketip(this);\");";
                            }
                            if($r[3]=="no")
                            {
                              echo "e.className='seat_cannotuse';";
                              echo "e.setAttribute('style','background-image:url(n6.png)');";        

                            }
                        }         
            }  
                      
          }
          $ff_branch_id=$_COOKIE['branch_id'];
          $conn=db_check();
          checkseat($conn,$ff_branch_id);
          ?>            
        }
    </script>

    <script>
      function setCookie(name,value)
      {
      var Days = 30;
      var exp = new Date();
      exp.setTime(exp.getTime() + Days*24*60*60*1000);
      document.cookie = name + "="+ escape (value) + ";expires=" + exp.toGMTString();
      }
      function getCookie(name)
      {
      var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
      if(arr=document.cookie.match(reg))
      return unescape(arr[2]);
      else
      return null;
      }  
      function delCookie(name)
      {
        var exp = new Date();
        exp.setTime(exp.getTime() - 1);
        var cval=getCookie(name);
        if(cval!=null)
        document.cookie= name + "="+cval+";expires="+exp.toGMTString();
      } 
      //=========================================================
      function maketip(element){
      if(document.getElementById("temp"))document.getElementById("temp").remove();
      if(getCookie("seat_x_y")) delCookie("seat_x_y");
      $(".tip").fadeIn(200);
      setCookie("seat_x_y",element.id);
      var tip= document.getElementById("tip");
      var label=document.createElement("label");
      var label_text1 = document.createTextNode("您選擇的是"+(Math.floor(element.id/10))+"排"+element.id%10+"座,當前狀態為可以預訂");

      label.className='text';
      label.id='temp';
      //label.value=element.id;
      tip.appendChild(label);
      label.appendChild(label_text1);
      //alert(element.id)
      //
    
     }
     //=========================================
    $(document).ready(function(){
      $(".tip_title a").click(function(){
      $(".tip").fadeOut(200);
    });

      $(".sure").click(function(){
      $(".tip").fadeOut(200); 
      
      window.location.href="/DB_finnal/reserve/success.php"; 
    });

      $(".cancel").click(function(){
      $(".tip").fadeOut(200);
    });
    });
    //================================================== 
      

    
    </script>

</head>
 
<body>
<div class="main">
        
    <!--top menu-->
    <div class="topnav">
    <a  href="http://localhost/DB_finnal/member_center/reserve_record.php">MEMBER</a>
    <a  href="http://localhost/DB_finnal/main_page/after.php">HOME</a>
    </div>
         <!--響食logo-->
                    <div>
                        <ul class="mark">
                                    <li>
                                        <div class="banner-top">
                                            <div class="banner-info_agile_w3ls">       
                                                <h3 style="color:white">饗  食  <span>GO</span></h3>           
                                            </div>
                                        </div>
                                    </li>
                               </ul>
                        </div>   
    <!--座位視窗-->
    <div id="seat_table">

<!--訂位對話框-->
    <div class="tip" style=" display:none;" id="tip">
        <div class="tip_title"><a>x</a></div>
        <div class="tip_info">
            <p style="font-family:'Microsoft JhengHei'; font-size:24px; text-align:center;">確定預訂這個餐位嗎？<br/></p> 
        </div>
        
        <div class="bt_center">
            <div >
                <button type="text" value="确定" name="sure" class="sure" onclick="myFunction()" style="width:80px;height:28px;position:relative;left:-35px;top:5px;">確定</button>
            
                <button type="text" value="取消" name="cancel" class="cancel"  onclick="myFunction()" style="width:80px;height:28px;position:relative;left:20px;top:5px;">取消</button>
            </div>
        </div>    
        
    </div>
    
</div>
</body>
 
</html>
