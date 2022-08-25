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
		
        <?php if ($title=="About Us"){ ?>	<link rel="stylesheet" type="text/css" href="style/styleau.css"> <?php } ?>
		<?php if ($title=="New Items Shopping Cart" || $title=="Today's Deal Shopping Cart" || $title=="Clothing" || $title=="Accessories" || $title=="Footwear")
		{ ?>	<link rel="stylesheet" type="text/css" href="style/styleni.css"> <?php } ?>
		<?php if ($title=="Coupon Code"){ ?>	<link rel="stylesheet" type="text/css" href="style/stylecc.css"> <?php } ?>
		<?php if ($title=="Customer Services"){ ?>	<link rel="stylesheet" type="text/css" href="style/stylecs.css"> <?php } ?>
		<?php if ($title=="Cart"){ ?>	<link rel="stylesheet" type="text/css" href="style/stylecart.css"> <?php } ?>
		<?php if ($title=="Payment"){ ?>	<link rel="stylesheet" type="text/css" href="style/stylep.css"> <?php } ?>
		<?php if ($title=="Thank You"){ ?>	<link rel="stylesheet" type="text/css" href="style/stylety.css"> <?php } ?>
		
		<?php if ($title=="Contact Us"){ ?>
		 <link rel="stylesheet" type="text/css" href="m7style.css">
         <link rel="stylesheet" href="style/stylecontact.css" type="text/css" media="screen"/> 
		 <?php } ?>
		 
		 	
		
	
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

                <li><a class="active" href="home.php">Home</a></li>
                <li><a href="contact.php">Contact Us</a></li>    
                <li><a href="Aboutus.php">About Us</a></li>
                <li><a href="newItems.php">New Items</a></li>
                <li><a href="todayDeals.php">Today's Deals</a></li>
                <li><a href="couponcode.php">Gift Cards</a></li>
                <li><a href="customerservices.php">Customer Service</a></li>
                <li><a>Categories</a>
                    <ul class="dropdown">
</br>
                        <li>    <a href="clothing.php">Clothing</a></li></br></br>
                       
                        <li>    <a href="accessories.php">Accessories</a></li></br></br>
                   
                        <li>    <a href="footwear.php">Footwear</a></li></br></br>
                    </ul> 

                </li>
                <li><a><img src ="style/menu.png" alt="Account" width="50" height="50" border="0"/></a>




                    <ul class="dropdown">
                        <li> <a href="cart.php">Cart</a></li></br>
                         <li>    <a></a></li>
                        <li>  <a href="payment.php">Payment Details</a></li></br>
                         <li>    <a></a></li>
                        <li>  <a href="logout.php">Logout</a></li></br>
                    </ul>
                </li>


            </ul>
        </div>
    </div>
</header >
<div id="pageContent"> 
