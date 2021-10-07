function no(item){
    
    //alert('帳號或密碼錯誤');
    window.location.href="line_service_action.php?value="+item;
}

$(function(){
    setInterval(getalarm,1000)
    
   })
   function getalarm (){
    
    $.ajax({
        type : 'GET',
        url:  'http://localhost/DB_finnal/lineupmysql.php',
        cache: false,   //是否使用快取
        dataType : 'html',
        success: function(result){   //處理回傳成功事件，當請求成功後此事件會被呼叫
        //alert(result);
        //$('#title').text(result);
        $('#alarm').html(result);
        },
        error: function(result){   //處理回傳錯誤事件，當請求失敗後此事件會被呼叫
        //your code here
        alert("發生錯誤");
        console.log(result);
        },
            });
}


   
