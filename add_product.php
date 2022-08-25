<?php $title="Add Product"; ?>
<?php include_once("adminheader.php");?>
<style>
body{

		background-image: linear-gradient(rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5)),
                  url("3.jpg");
		background-size: cover;

}</style>
<div align ="center" id="mainWrapper">

            <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 7;">
			<div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
            <h2 class="padding-bottom--15">Add Product</h2>
            <form action="" method="post" enctype="multipart/form-data">
			<?php
                            $con = mysqli_connect("localhost", "root", "", "starbuy");
                            $query = "SELECT * FROM department";
                            $query_run = mysqli_query($con, $query);
                            if (mysqli_num_rows($query_run) > 0) {
                                $options = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
                            }
            ?>
            <label for="standard-select">Category</label>
            <div class="select">
            <select id="standard-select" name="category" required>
			<option selected>Select Category</option>
            <?php
                foreach ($options as $option) {
            ?>
            <option><?php echo $option['department_name']; ?> </option>
            <?php
            }
            ?>
            </select>
            <span class="focus"></span>
            </div>

<br/>
<div>
<div class="field padding-bottom--24">
            <label for="name" class="mb-0">Product Name</label>
			<input type="text" id="pname" name="pname" placeholder="Enter Product Name" required>
            </div>
            <div class="field padding-bottom--24">
            <label for="quantity" class="mb-0">Quantity</label>
            <input type="number" id="quantity" name="quantity" placeholder="Enter Quantity" required>
            </div>
			<div class="field padding-bottom--24">
            <label for="originalprice" class="mb-0">Original Price</label>
            <input type="text" id="originalprice" name="originalprice" placeholder="Original Price" required>
            </div>
            <div class="field padding-bottom--24">
            <label for="sellingprice" class="mb-0">Selling Price</label>
            <input type="text" id="sellingprice" name="sellingprice" placeholder="Selling Price" required>
            </div>
			<div class="field padding-bottom--24">
            <label for="discount%" class="mb-0">Discount%</label>
            <input type="text" id="Discount" name="DiscountPer" placeholder="Discount%" required>
            </div>
			<div class="field padding-bottom--24">
            <label for="image" class="mb-0">Upload Image</label>
            <input type="file" id="image" name="image" required>
            </div>
            <div class="field padding-bottom--24">
            <label for="description" class="mb-0">Description</label>
            <input type="description" id="description" name="Description" required>
            </div>
            <div class="field padding-bottom--24">
            <input type="submit" name="add_product_btn" value="Submit">
            </div>
			
            
            
            <?php
            if (isset($_POST['add_product_btn'])) {
                $department_name = $_POST['category'];
                $Description = $_POST['Description'];
                $quantity = $_POST['quantity'];
                $price = $_POST['originalprice'];
                $DiscountPrice = $_POST['sellingprice'];
                $name = $_POST['pname'];
				$DiscountPer = $_POST['DiscountPer'];
                $image = $_FILES['image']['name'];
                $tmp_name = $_FILES['image']['tmp_name'];
                $type = $_FILES['image']['type'];
                $size = $_FILES['image']['size'];
                $file = $image;
                

            if ($name != "" && $Description != "" && $price != "" && $DiscountPrice != "" && $image != "" 
				&& $quantity != "" && $department_name !== "" ) {
                    include("connect_to_mysql.php");
                    $product_query = "INSERT INTO tbl_product (name,Description,price,DiscountPrice,image,quantity,DiscountPer,department_name)
			VALUES('$name','$Description','$price','$DiscountPrice','$file','$quantity','$DiscountPer','$department_name')";
			$product_query_run = mysqli_query($con, $product_query);

            if ($product_query_run) {

			//redirect("add_product.php", "product added Successfully");
                echo "Success";
               
            } else {
            //redirect("add_product.php", "Something went wrong");
                echo "<br/> Image not uploaded";
                echo $file;
                }
                } else {
            //  redirect("add_product.php", "All fields are mandatory");
                echo "<br/> All fields are mandatory ";
                }
            }
            ?>           
</form> 
            </div></div></div></div></div>
 <?php include_once("template_footer.php");?>