<?php 

$navbar = array(

				array('title'=>"Home",'dir' => 'index.php'),
				array('title'=>"Team",'dir' => 'team.php'),
				array('title'=>"Menu",'dir' => 'menu.php'),
				array('title'=>"Contact",'dir' => 'contact.php')
			);
 ?>

<ul>
<?php 
	foreach ($navbar as $key) {
?>
 <li><a href="<?php echo($key['dir']);?>"><?php echo($key['title']); ?></a></li>

 <?php } ?>
</ul>