<?php define('TITLE', "Menu") ?>

<?php include('header.php'); ?>

<?php include('array.php') ?>
	
<div class="menu">
	<h3>Come on here! and get your best dish .</h3>
	<p>we present delicious dishes <br>check anyone here to get more information</p>
	
	<ul>
		<?php foreach ($menuItems as $key => $value) {?>
			<li><a href="dish.php?item=<?php echo $key; ?>"><?php echo($value['title']); ?></a></li>
		<?php } ?>
	</ul>
	
	
</div>



<?php include('footer.php'); ?>