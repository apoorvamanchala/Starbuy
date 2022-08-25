<style>

 
	.fadein {
position:relative;
height:100%;
width: 100% ;
margin:0 auto;
background: #ebebeb;
padding: 10px;
margin-top: 6px;
text-align: center;
 }
.fadein img{

position: relative;
top: 0px;
margin:0 auto;
width: 80vw;
height: 70vh;

}

</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<script>
$(function(){
	//$('.fadein img').hide();
	$('.fadein :first-child').show();
	setInterval(function(){$('.fadein :first-child').hide().next('img').fadeIn().end().appendTo('.fadein');}, 3000);
});
</script>
<body>

<div class="fadein">


	<?php 
	// display images from directory
	// directory path
	$dir = "./slider/";
	 
	$scan_dir = scandir($dir);
	foreach($scan_dir as $img):
		if(in_array($img,array('.','..')))
		continue;
	?>
	<img style="display:none" src="<?php echo $dir.$img ?>" alt="<?php echo $img ?>">
	<?php endforeach; ?>
	
	</div>

</body>
</html>