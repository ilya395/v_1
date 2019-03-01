<div class="dropdown-menu categories_inner" aria-labelledby="navbarDropdown">
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
		  ?>
		    <a class="dropdown-item" href="movements.php?categorie=<?php echo $cat['id'] ?>"><?php echo $cat['title']; ?></a>
		  <?php
		}
				
	?>

</div>