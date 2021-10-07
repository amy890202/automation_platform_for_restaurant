<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>排隊登記</title>

</head>
<body>
	<EMBED src="image/背景音乐.mp3"autostart="true" loop="true" hidden="true"> 

        <!--頂部menu-->
        <div class="topnav">
          <a href="http://localhost/DB_finnal/member_center/reserve_record.php">MEMBER</a>
          <a href="http://localhost/DB_finnal/main_page/after.php">HOME</a>
        </div>
        
        <!--圖片輪播-->
        <div class="coverflow">
           	<a href="#"><img width= 740 height=370 src="picture/7.jpg"></a>
    		<a href="#"><img width= 740 height=400 src="picture/8.jpg"></a>
            <a href="#"><img width= 740 height=370 src="picture/9.jpg"></a>
		 </div>
        
        <!--響食logo-->
        
            <div class="logo" >
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
        
        
    <!--表單部分-->       
           <div class="flexible_container">
                <form name="form1" class="form-signin" method="POST" action="reserve_cookie.php">



                <!--選擇分店selectbox-->
                    <div class="custom-select" style="width:200px;">
                      <select name="f_branch_id" >
                        <option value="0">請選擇分店:</option>
                        <option value="1">台北市中正區</option>
                        <option value="2">台北市板橋區</option>
                        <option value="3">台北市松山區</option>
                        <option value="4">台北市大同區</option>
                        <option value="5">新竹市東區大學路</option>
                      </select>
                    </div>
    
                    <script>
                        var x, i, j, l, ll, selElmnt, a, b, c;
                        /*look for any elements with the class "custom-select":*/
                        x = document.getElementsByClassName("custom-select");
                        l = x.length;
                        for (i = 0; i < l; i++) 
                        {
                          selElmnt = x[i].getElementsByTagName("select")[0];
                          ll = selElmnt.length;

                            /*for each element, create a new DIV that will act as the selected item:*/
                            a = document.createElement("DIV");
                              a.setAttribute("class", "select-selected");
                              a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
                              x[i].appendChild(a);

                          /*for each element, create a new DIV that will contain the option list:*/
                          b = document.createElement("DIV");
                          b.setAttribute("class", "select-items select-hide");

                          for (j = 1; j < ll; j++) 
                          {
                            /*for each option in the original select element,
                            create a new DIV that will act as an option item:*/
                            c = document.createElement("DIV");
                            c.innerHTML = selElmnt.options[j].innerHTML;

                              c.addEventListener("click", function(e) {
                                /*when an item is clicked, update the original select box,
                                and the selected item:*/
                                var y, i, k, s, h, sl, yl;
                                s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                                sl = s.length;
                                h = this.parentNode.previousSibling;
                                for (i = 0; i < sl; i++) {
                                  if (s.options[i].innerHTML == this.innerHTML) {
                                    s.selectedIndex = i;
                                    h.innerHTML = this.innerHTML;
                                    y = this.parentNode.getElementsByClassName("same-as-selected");
                                    yl = y.length;
                                    for (k = 0; k < yl; k++) {
                                      y[k].removeAttribute("class");
                                    }
                                    this.setAttribute("class", "same-as-selected");
                                    break;
                                  }
                                }
                                h.click();
                            });
                            b.appendChild(c);
                          }
                          x[i].appendChild(b);
                          a.addEventListener("click", function(e) {
                              /*when the select box is clicked, close any other select boxes,
                              and open/close the current select box:*/
                              e.stopPropagation();
                              closeAllSelect(this);
                              this.nextSibling.classList.toggle("select-hide");
                              this.classList.toggle("select-arrow-active");
                            });
                        }
                        function closeAllSelect(elmnt) {
                          /*a function that will close all select boxes in the document,
                          except the current select box:*/
                          var x, y, i, xl, yl, arrNo = [];
                          x = document.getElementsByClassName("select-items");
                          y = document.getElementsByClassName("select-selected");
                          xl = x.length;
                          yl = y.length;
                          for (i = 0; i < yl; i++) {
                            if (elmnt == y[i]) {
                              arrNo.push(i)
                            } else {
                              y[i].classList.remove("select-arrow-active");
                            }
                          }
                          for (i = 0; i < xl; i++) {
                            if (arrNo.indexOf(i)) {
                              x[i].classList.add("select-hide");
                            }
                          }
                        }

                        /*if the user clicks anywhere outside the select box,
                        then close all select boxes:*/
                        document.addEventListener("click", closeAllSelect);

                    </script>


                    <!--輸入基本資料-->
                    <div class=pos>
                        <div>                                                               <!--需增加日期在資料庫-->
                            <br><span class="word" type="text" id="date" >訂位日期:</span>
                            <input name="reserving_date" type="date" id="date">
                        </div>

                        <div>
                            <br><span class="word">訂位時間:</span>                              <!--需增加時間在資料庫-->
                            <input  name="reserving_time" type="time" id="time"  >   
                        </div>

                        <div>
                            <br><span class="word">真實姓名:</span>
                            <input  name="realname" type="text" id="realname" placeholder="Real name" required="">
                        </div>
                        
                        <div>
                            <br><span class="word">用餐人數:</span>
                            <input name="customer_num" type="number" id="customer_num" placeholder="Customer number" required="">
                        </div>

                        <div>
                            <br><span class="word">連絡電話:</span>
                                <input name="cellphone" type="text" id="cellphone" placeholder="Cellphone" required="">   
                        </div>


                            <button type="submit" class="btn"  name="submit" ><span style="font-family:Microsoft JhengHei;" >確定 </span></button>
                    </div>
                    
                                        
                    
         
			</form>
        </div>
    

</body>
</html>
    
<style>
    .pos
    {
      position:relative;
      top:15px;
    }
    .custom-select
    {
      position:relative;
      left:40px;
    }
    .word                      /*label 樣式*/
	{
        font-size: 24px;
        font-weight:500;
        position:relative;
        top:5px;
        left:-20px;
        font-family:"Microsoft JhengHei",PMingLiU,SimHei;
        color:whitesmoke;
        text-align:center;
        cursor:context-menu;
        line-height:50px;
        
    }
   
    .flexible_container     /*選單div*/
    {
        display:flex;
        flex-direction:colume;
        margin:10% 25%;
        padding: 2% 2%;
        position:relative;
        top:-40px;
        
        justify-content: center;
        align-items:center;
        background-color:rgba(255,255,255,0.25);
        border-radius:10px;
      
    }
    
    
    .flexible_container>div       /*無法顯示?因為label是<span> 先用<br>隔開，置中*/  
    {
        display:inline-block;
        margin:20px 20px 20px 20px;
        padding: 20px 20px;
        width:50%;
        background-color:rgb(233, 150, 122);
        text-align:center;
    }
    .flex_div
    {
        display:inline-block;
        margin:0px auto;
        padding: 20px 20px;
        width:50%;
        background-color:rgb(233, 150, 122);
        text-align:center;
    }
   
    .mark
	{
		position:absolute;
		width:500px;
		left:300px;
		top:170px;
    z-index:100;
	}

	.banner-info_agile_w3ls {
		text-align: left;
		padding: 23em 5em 0 4em;
		width: 80%;
        
	}

	.banner-info_agile_w3ls h3 span {
		background: rgb(255, 164, 31);
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
  top:50px;
  left:30px;
	width: 100%;
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
    .coverflow>a:nth-child(4){
        -webkit-animation-delay:15s;
                animation-delay:15s;
        
    }
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
    
/*    
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
*/
h2{
	color: rgb(0, 0, 0); 
  font-size: 16px;
  line-height: 20px;
  letter-spacing: 1px;
}
.btn{
    display: inline-block;
  border-radius: 8px;
  background-color:#ffa41f;
  border: none;
  color: #000000;
  text-align: center;
  font-size: 20px;
font-weight:bold;
  padding: 2%;
margin:10% 25%;
    width:50%;
  transition: all 0.5s;
  cursor: pointer;
  position:relative;
  top:15px;
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

/* 分店select box */
.custom-select {
  position: relative;
  font-family:"Microsoft JhengHei";
  font-size:20px;
    font-weight:bold;
}

.custom-select select {
  display: none; 
}

/* appear when clicked*/
.select-selected {
  background-color:#ffa41f;	
}

/* 小箭頭 */
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: black;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color:#ffa41f;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
    
/*頂部menu*/
.topnav {
  overflow: hidden;
  background-color: transparent;
}

.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
  font:sans-serif;
  text-decoration:underline;
}

.topnav a:hover {
  background-color: rgba(221, 221, 221,0.4);
  color: white;
} 
.topnav a.active {
  background-color:#ffa41f;
  color: white;
}
    

 
</style>