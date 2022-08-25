<?php $title="Register Page"; ?>
<?php include_once("headerlogin.php");?><!DOCTYPE html>

<style>
		body  {
		background-image: linear-gradient(rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5)),
                  url("3.jpg");
		background-size: cover;}
	</style>
 
		<div class="box-root" style="flex-grow: 1; z-index: 7;">
		<div class="formbg1">
                    <div class="formbg-inner padding-horizontal--48">
                     <h2 style="margin-top: 0px">Let's create your account!</h2>
                        <form id="stripe-login" action="registerprocess.php" method="post">
                            <div class="field padding-bottom--24">

                                <label for="name">First Name</label>
                                <input type="text" id="fname" name="fusername" required>

                            </div>

                            <div class="field padding-bottom--24">
                                <label for="name">Last Name</label>
                                <input type="text" id="lname" name="lusername" required>
                            </div>
                      
                            <div class="field padding-bottom--24">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div class="field padding-bottom--24">
                                <label for="phone">Phone number</label>
                                <input type="tel" id="phone" name="userphone" placeholder="123-456-7890" 
                                       pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                            </div>
                            <div class="field padding-bottom--24">                             
                                <label for="password">Password</label>                              
                                <input type="password" id="pass" name="password" required>
                            </div>
                            <div class="field padding-bottom--24">                             
                                <label for="birthday">Date of Birth</label>                            
                                <input type="date" id="birthday" name="birthday" required>
                            </div>
                            <div class="field padding-bottom--24">                             
                                <label>Gender</label>                            
                            </div>
							<div class ="wrapper">
                                <input type="radio" id="option-1" value="Female" name="gender" checked>
                                <input type="radio"  name="gender" id="option-2">
                                <label for="option-1" class="option option-1">
                                    <div class="dot"></div>

                                    <span>Female</span>
                                </label>
                                <label for="option-2" class="option option-2">
                                    <div class="dot"></div>

                                    <span>Male</span>
                                </label>
                            </div>   
                            <div class="field padding-bottom--24">                             
                                <label>Interest</label>    
                            </div>
                            <div class="padding-bottom--24">
                                <?php
                                $con = mysqli_connect("localhost", "root", "", "starbuy");
                                $sql = "SELECT department_name FROM department";
                                $query_run = mysqli_query($con, $sql);
                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $interest) {
                                        ?>
                                        <label for="checkbox">
                                            <input type="checkbox" name="data[]" value="<?= $interest['department_name']; ?>" /> <?= $interest['department_name']; ?> 
                                        </label>

        <?php
    }
} else {
    echo "No record found";
}
?>
                            </div>
                            <div class="field padding-bottom--24">                             
                                <label>Country</label>                             
                                <input type="text" name="country" value="United States"  disabled>
                            </div>
                            <div class="field padding-bottom--24">                             
<?php
include("connect_to_mysql.php");
$query = "SELECT state_name FROM state";
$result = $conn->query($query);
if ($result->num_rows > 0) {
    $options = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
?>    
                            </div>
                            <div class="field padding-bottom--24"> 
                                <label for="state">State</label>
                                <select name="state" id="state" required>
                                    <option>Choose state</option>
<?php
foreach ($options as $option) {
    ?>
                                        <option><?php echo $option['state_name']; ?> </option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="field padding-bottom--24">                             
                                <label for="city">City</label>                         
                                <input type="text" id="city" name="city" required>
                            </div>
                            <div class="field padding-bottom--24">                             
                                <label>Zip Code</label>                       
                                <input type="text" name="userzip" placeholder="12345" pattern="[0-9]{5}" title="Five digit zip code" required/>
                            </div> 
                            <div class="field padding-bottom--24">                             
                                <label>Address</label>                       
                                <textarea rows="4" cols="40" name="useraddress" required></textarea>
                            </div>


                            <div class="field padding-bottom--24">
                                <input type="submit" name="Submit" value="Submit">

                            </div>

                        </form>

                        <div class="footer-link padding-top--24">


                        </div>
                    </div>


                </div>
            </div>





<?php include_once("template_footer.php"); ?>


