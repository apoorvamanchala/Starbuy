<?php $title="Footwear"; ?>
<?php include_once("header.php");?>
<style>
body{

		background-image: linear-gradient(rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5)),
                  url("8.jpg");
		background-size: cover;

}</style>
<h2 class="heading">Footwear</h2>

<?php  
				$connect = mysqli_connect("localhost", "root", "", "starbuy"); 
                $query = "SELECT * FROM tbl_product WHERE department_name='Footwear' LIMIT 6";  
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
        <div class="Sale" style="color: rgb(255, 255, 255); width: 120px; background: rgb(204, 12, 57);"><?php echo 'Upto '.$row['DiscountPer']; ?></div>
			<h4 class="card-title"> <?php echo $row['name']; ?></h4>
			<h4 class="card-title"> <?php echo $row['Description']; ?></h4>
			<h5 class="card-title"><s> <?php echo $row['price']; ?></s><?php echo ' '.$row['DiscountPrice']; ?></h5>

 <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
							   <input type="hidden" name="hidden_DiscountPrice" value="<?php echo $row["DiscountPrice"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  <br /><br />
                          </div>  
                     </form>  
               
	   <?php  
                     }  
                }  
                ?>  
				 </div>
		
             <?php include_once("template_footer.php");?>
       