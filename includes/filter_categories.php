<?php
    $categories_q = mysqli_query($connection, "SELECT * FROM `categories_movements`");
	$categories = array();
	while( $cat = mysqli_fetch_assoc($categories_q) )
	{
		$categories[] = $cat;
	}
?>	

<?php 
	foreach( $categories as $cat)
	{
		if (isset($_GET['categorie'])) 
			{
				if ($_GET['categorie'] == $cat['id']) $curr = "dropdown-item__item-active";
				else $curr = "";
			}
				?>
	    			<a class="dropdown-item dropdown-menu__item <?php echo "$curr" ?>" href="movements.php?categorie=<?php echo $cat['id'] ?>"><?php echo $cat['title']; ?></a>
	    		<?php	
	}		
?>