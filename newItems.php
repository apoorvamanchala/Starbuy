<?php $title="New Items Shopping Cart"; ?>
<?php include_once("header.php");?>
<style>
body  {
background-image: linear-gradient(rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5)),
                  url("4.jpg");
background-size: cover;

}</style>
<h2 class="heading">New Releases in Clothing, Shoes & Toys</h2>
 
<?php  
				$connect = mysqli_connect("localhost", "root", "", "starbuy"); 
                $query = "SELECT * FROM `tbl_product` WHERE  DiscountPrice<=0 OR DiscountPrice=price LIMIT 6";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
				<div class="rowname">
				<div class="columnname">
                                    <form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">  
                           
                               <img src="<?php echo "images/".$row["image"]; ?>" width="200px" height="100px" class="img-responsive" /><br />  
                               <h4 class="text-info"><?php echo $row["name"]; ?></h4> 
							   <h4 class="card-title"> <?php echo $row['Description']; ?></h4>							   
                               <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>  
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  

                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
							     <input type="hidden" name="hidden_DiscountPrice" value="<?php echo $row["DiscountPrice"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  <br /><br />
                         
                     </form> 
                                     </div>  
               
	   <?php  
                     }  
                }  
                ?>  
				 </div>
			 
          		
	     
             <?php include_once("template_footer.php");?>
        