<?php 
    session_start();
    if(isset($_GET['logout']))
    {
        session_destroy();   
    }
?>
<?php include_once("login.php")?>;