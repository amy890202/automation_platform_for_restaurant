
<?php
    $branch = $_POST['f_branch_id'];
    $cookieexpiry = (time() + 21600);
    setcookie("branch",$branch, $cookieexpiry);

    header("Location: http://localhost/DB_finnal/test.php");
    ?> 
    