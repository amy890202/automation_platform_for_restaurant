
   
   <?php
        $phone= $_GET['value'];

    ?>
      
       <script>
           
            var str='<?php echo $phone?>';
            alert('撥打'+str);           
       </script>
      <a href="tel:1243433"> <?php echo $phone ?></a>
      <br/>
      <br/>
      <button type="button" class="btn btn-light" onclick="location.href='http://localhost/DB_finnal/test.php'">回前頁

      

