<?php $title="Login Page"; ?>
<?php include_once("headerlogin.php");?>
<style>
body{

		background-image: linear-gradient(rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5)),
                  url("2.jpg");
		background-size: cover;

}</style>

<div class="login_1" align ="center" id="mainWrapper">
    <div class="box-root padding-top--24 flex-flex flex-direction--column">
	<div class="formbg" style="margin-left: calc(50%)">
    <div class="formbg-inner padding-horizontal--48">
        <?php
			if (@$_GET['Empty'] == true) {
		?>
	<div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>                                
		<?php
		}
		?>

		<?php
            if (@$_GET['Invalid'] == true) {
        ?>
    <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>                                
        <?php
        }
        ?>
<?php 
if(isset($_COOKIE['usertype'])){
echo $_COOKIE['username'];
echo $_COOKIE['password'];
setcookie("user", $row['username'], time() + (86400 * 30)); 
setcookie("pass", $row['password'], time() + (86400 * 30)); 
}

?>
    <span class="padding-bottom--15">Sign in to your account</span>
        <form id="stripe-login" action="processlogin.php" method="post">
        <div class="field padding-bottom--24">
        <label for="username">Username</label>
        <input type="text" name="username">
        </div>
        <div class="field padding-bottom--24">
        <div class="grid--50-50">
        <label for="password">Password</label>

    </div>
    <input type="password" name="password">
    </div>
	<div class="field padding-bottom--24">
		<input type="submit" name="Login" value="Login">
    </div>
	</form>
	<div class="footer-link padding-top--24">
    <span>Don't have an account? <a href="register.php">Sign up</a></span>
	<div class="listing padding-top--24 padding-bottom--5 flex-flex center-center">
	</div>
    </div>
    </div>
    </div>
    </div></body>
	<br/><br/>
	<?php include_once("template_footer.php"); ?>

       
