<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta http-equiv="Content-Type" content=""text/html; charset="utf-8">
            <title>
               <?=$title;?>
            </title>
			
			<link rel="stylesheet" href="style/stylejquery.css" type="text/css" media="screen"/>
            <meta name="viewport" content=""width="device-width", initial-scale="1.0">
			<meta charset="UTF-8">
			<meta http-equiv ="X-UA-Compatible" content="IE=edge">
			<link href ="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
			<link rel ="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
			<link rel ="stylesheet" href="css/stylejquery.css">
		
        <?php if ($title=="Add Product"){ ?>	<link rel="stylesheet" href="style/form.css" type="text/css" media="screen"/> <?php } ?>
		
		
			<link rel="stylesheet" href="style/stylejquery.css" type="text/css"/>
		
		
		
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="app.js"></script>
     <script type="text/javascript" src="dropdown.js"></script>

    </head>
    <body>
    <div align ="center" id="mainWrapper">
	<header class="header-area">
    <div class ="header-container">
        <div class="site-logo">
             <a>Star<span>buy</span></a>
            <!--<a href = "index.php"><img src ="style/starbuylogo.png" alt="Logo" width="252" height="50" border="0"/></a>-->

        </div>


        <div class ="site-nav-menu">
            <ul class="primary-menu">
 
                <li><a href="admin.php" class="active">Dashboard</a></li>
                 <li><a  href="add_product.php">Add Products</a></li>
               <li>  <a href="logout.php?logout">Logout</a></li>
               
            </ul>
        </div>
    </div>
	
</header >
</div>
</body>