<?php $title="ThankYou"; ?>
<?php include_once("header.php");?>
<style>
body  {
background-image: linear-gradient(rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5)),
                  url("1.jpg");
background-size: cover;
}
</style>
<div id="pageContent">
<center>

 <?php
    require 'PHPMailer-master/PHPMailerAutoload.php';
        if(isset($_POST['submit'])) {
			
    $mail = new PHPMailer();
    
    $mail->SMTPDebug = 0;                               // Enable verbose debug output
    
    
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->IsSMTP();
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'starbuy9@gmail.com';                 // SMTP username
    $mail->Password = 'zjmbdzulybtyddel';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
	
    $mail->From = 'starbuy9@gmail.com';

    $mail->addAddress($_POST['email']); 
	$mail->addAddress("starbuy9@gmail.com");   	// Name is optional
    $mail->addReplyTo($_POST['email'], $_POST['name']);
    
    $mail->isHTML(true);                                  // Set email format to HTML
    
    $mail->Subject = $_POST['subject'];
    $mail->Body    = $_POST['message'];
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
          try {
            $mail->send();
			//"<br> Data of State Table : ". "<br>"
            echo "<br> Your message was sent successfully!"."<br>";
			header("location:ty.php");
        } catch (Exception $e) {
            echo "Your message could not be sent! PHPMailer Error: {$mail->ErrorInfo}";
        }
        
    } else {
        echo "There is a problem with the contact.html document!";
    }
    
  ?>
  
  </center>
</div>
<br><br>
  <?php include_once("template_footer.php");?>