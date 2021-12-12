<?php 
	define('TITLE', 'Dishes');
	include('header.php');
 ?>
<?php include('array.php') ?>

<?php 
	function validate($var){
		$output = preg_replace('[^a-bA-B0-9_-]','',$var);
		return $output;
	}

	if (isset($_GET['item'])) {
		$menuItem = validate($_GET['item']) ;

		$items = $menuItems[$menuItem] ;
	}
 ?>
<div class="dish-body">
 <h4><?php echo $items['title'] ?></h4>
 <div class="dish">

 	<div class="img">
 		<img src="<?php echo 'img/'.$items['image'].'.png' ?>".>
 	</div>
 	<div class="descp">
	 	
	 	<p><?php echo $items['description']; ?></p>
	 	
	 </div>
 </div>
 <div class="notice">
	 <p>Now you can cook it yourself, but if you see it is hard to do at home, we can bring it for you. and it will cost you only
	 : <strong><?php echo $items['price']; ?>$</strong></p>
	  <a href="contact.php"> purchase </a>
	 <br><br>
	 <a href="menu.php">return to Menu</a>
</div>
</div>
 <?php include('footer.php') ?>