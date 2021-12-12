<?php define('TITLE', "  Team") ?>

<?php include('header.php'); ?>



<?php 

	$team = array(
				array('name' => 'Mark' , 'functionnality' => 'He is the owner of this business, graduated from the school X .
					He is expert in marketing and advertising' ),
				array('name' => 'Anna' , 'functionnality' =>'She is Mark\'s sister. 21 years old. she can cook eveything. also your heart hhhhhh (just kidding). ' ),
				array('name' => "John", 'functionnality' => " the Comedian of the group. he works hard and also laught a lot. always he present their boring jokes."),

			)

 ?>
<div class="team">
	<?php foreach ($team as $key) { ?> 
			<div class="member">
				<h3><?php echo($key['name']) ?></h3>
				<p><?php echo($key['functionnality']) ?></p>
			</div>
			<hr class="hr">

	<?php } ?>
</div>



<?php include('footer.php'); ?>