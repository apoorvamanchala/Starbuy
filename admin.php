<?php
    session_start();

    if(isset($_SESSION['User']))
    {
   ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin Page</title>
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
          <link rel="stylesheet" href="style/stylejquery.css" type="text/css" media="screen"/>
          <link rel="stylesheet" href="style/adminstyle.css" type="text/css" media="screen"/>
    </head>
    <body>
         
         <div class="main">
	<div class = "border">
		
			<h1 class="content">Welcome Admin!</h1>
		
	</div>
	
	
	 <a href="add_product.php" class="button">Add Products</a>
	<a href="logout.php?logout" class="button">Logout</a>
	 </div>
 <?php      
    }
    else
    {
        header("location:login.php");
    }

?>

                 
            <?php include_once("template_footer.php");?>
            
       
