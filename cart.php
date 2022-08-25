<?php $title="Cart"; ?>
<?php include_once("header.php");?>
<style>
body  {
background-image: linear-gradient(rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5)),
                  url("112.webp");
background-size: cover;

}

</style>
<?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "starbuy");  
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
					 'item_DiscountPrice'          =>     $_POST["hidden_DiscountPrice"],
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="cart.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],
				'item_DiscountPrice'          =>     $_POST["hidden_DiscountPrice"],				
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="cart.php"</script>';  
                }  
           }  
      }  
 }  
 ?>  	
<body>

<h2 class="heading">Shopping Cart</h2>
 
 <div style="width:100%"></div>    
		<h3>Order Details</h3>  
		
                <div class="container">  
                     <table>  
					
                          <tr>  
                               <th>Item Name</th>  
                               <th>Quantity</th>  
                               <th>Price</th>  
							   <th>Discount Price </th>
                               <th>Total </th>  
                               <th>Action</th>  
                          </tr>  
						 
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                            <td><?php echo $values["item_name"]; ?></td>  
                            <td><?php echo $values["item_quantity"]; ?></td>  
                            <td>$ <?php echo $values["item_price"]; ?></td> 
							<td>$ <?php echo $values["item_DiscountPrice"]; ?></td>  							   
							<td>$ <?php if($values["item_DiscountPrice"]>0) { echo $values["item_quantity"] * $values["item_DiscountPrice"];} else { echo $values["item_quantity"] * $values["item_price"];} ?></td>  							   
                               <td><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * ($values["item_DiscountPrice"]));  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="4" align="right">Total</td>  
                               <td colspan="1" align="right">$ <?php echo number_format($total, 2); ?></td>  
                               <td></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
						
                     </table>  
                </div> 
				 
             <?php include_once("template_footer.php");?>
        