<?php define('TITLE', " Contact") ?>

<?php include('header.php'); ?>


<?php 


	 function validate($data)
	{
		$data = htmlspecialchars($data);
		$data = stripslashes($data);
		$data = trim($data) ;
		return $data;
	}
	$TelErr=$AdrErr=$MsgErr = $MailErr = $UserErr = $user = $mail = $msg =$Adr=$Tel="";
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (empty($_POST['user'])) {
			$UserErr = "this field is required";
		}else{
			$user = validate($_POST['user']);
		}
		if (empty($_POST['email'])) {
			$MailErr = "this field is required";
		}else{
			$email = validate($_POST['email']);
		}
		if (empty($_POST['message'])) {
			$MsgErr = "this field is required";
		}else{
			$msg = validate($_POST['message']);
		}
		if (empty($_POST['adress'])) {
			$AdrErr = "this field is required";
		}else{
			$Adr = validate($_POST['user']);
		}
		if (empty($_POST['tel'])) {
			$TelErr = "this field is required";
		}else{
			$Tel = validate($_POST['user']);
		}		
	}




 ?>






<div class="contact-message">
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">	
		<label for="user">Name</label><br>
		<input type="text" id="user" name="user"><span><?php echo $UserErr; ?></span><br>

		<label for="email">Email</label><br>
		<input type="email" id="email" name="email"><span><?php echo $MailErr; ?></span><br>

		<label for="adress">Adress</label><br>
		<input type="text" id="adress" name="adress"><span><?php echo $AdrErr; ?></span><br>

		<label for="tel">Phone</label><br>
		<input type="tel" id="tel" name="tel"><span><?php echo $TelErr; ?></span><br>

		<label for="message">Message</label><br>
		<textarea type="text" id="message" name="message" placeholder="the dishes you want"></textarea><span><?php echo $MsgErr; ?></span>

		<label for="submit"> </label><br>
		<input type="submit" id="submit" name="submit" value="send"><br>
	</form>
</div>



<?php include('footer.php'); ?>