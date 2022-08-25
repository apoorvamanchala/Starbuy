<?php $title="Payment"; ?>
<?php include_once("header.php");?>

<div class="container">

    <div class="card-container">

        <div class="front">
            <div class="image">
                <img src="image/chip.png" alt="">
                <img src="image/visa.png" alt="">
            </div>
            <div class="card-number-box">################</div>
            <div class="flexbox">
                <div class="box">
                    <span>card holder</span>
                    <div class="card-holder-name" >full name</div>
                </div>
                <div class="box">
                    <span>expires</span>
                    <div class="expiration">
                        <span class="exp-month">mm</span>
                        <span class="exp-year">yy</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="back">
            <div class="stripe"></div>
            <div class="box">
                <span>cvv</span>
                <div class="cvv-box"></div>
                <img src="visa.png" alt="">
            </div>
        </div>

    </div>

    <form action="paymentDetails.php" method="post">
        <div class="inputBox">
            <span>card number</span>
            <input type="text" maxlength="16" class="card-number-input" name="cardNumber">
        </div>
        <div class="inputBox">
            <span>card holder</span>
            <input type="text" class="card-holder-input" name="name">
        </div>
		<div class="inputBox">
            <span>address</span>
            <input type="text" class="card-holder-input" name="address">
        </div>
        <div class="flexbox">
            <div class="inputBox">
                <span>expiration mm</span>
               
				         <?php
$con =  mysqli_connect("localhost","root","","starbuy");
 $monthquery ="SELECT Month FROM month";
 $monthresult = mysqli_query($con,$monthquery);
    //$monthresult = $conn->query($monthquery);
    if($monthresult->num_rows> 0){
      $options= mysqli_fetch_all($monthresult, MYSQLI_ASSOC);
    }
?>	 <select id="Month" class="month-input" name="Month">
           <option>Choose Month</option>
  <?php 
  foreach ($options as $option) {
  ?>
    <option><?php echo $option['Month']; ?> </option>
    <?php 
    }
   ?>         
					
                </select>
            </div>
            <div class="inputBox">
                <span>expiration yy</span>
				<?php
include("connect_to_mysql.php");
 $yearquery ="SELECT Year FROM year";
    $yearresult = $conn->query($yearquery);
    if($yearresult->num_rows> 0){
      $options= mysqli_fetch_all($yearresult, MYSQLI_ASSOC);
    }
?>
                <select id="Year" class="year-input" name="Year">
                 
   <option>Choose Year</option>
  <?php 
  foreach ($options as $option) {
  ?>
    <option><?php echo $option['Year']; ?> </option>
    <?php 
    }
   ?>
</select>
                </select>
            </div>
            <div class="inputBox">
                <span>cvv</span>
                <input type="text" maxlength="4" class="cvv-input" name="cvv">
            </div>
        </div>
        <input type="submit" value="submit" class="submit-btn">
    </form>

</div>    
   

<script>

document.querySelector('.card-number-input').oninput = () =>{
    document.querySelector('.card-number-box').innerText = document.querySelector('.card-number-input').value;
}

document.querySelector('.card-holder-input').oninput = () =>{
    document.querySelector('.card-holder-name').innerText = document.querySelector('.card-holder-input').value;
}

document.querySelector('.month-input').oninput = () =>{
    document.querySelector('.exp-month').innerText = document.querySelector('.month-input').value;
}

document.querySelector('.year-input').oninput = () =>{
    document.querySelector('.exp-year').innerText = document.querySelector('.year-input').value;
}

document.querySelector('.cvv-input').onmouseenter = () =>{
    document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(-180deg)';
    document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(0deg)';
}

document.querySelector('.cvv-input').onmouseleave = () =>{
    document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(0deg)';
    document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(180deg)';
}

document.querySelector('.cvv-input').oninput = () =>{
    document.querySelector('.cvv-box').innerText = document.querySelector('.cvv-input').value;
}

</script>
