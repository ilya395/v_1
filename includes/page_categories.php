<ul class="categories__list">
	
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
					if ($_GET['categorie'] == $cat['id']) $curr = "categories__list__active";
					else $curr = "";
				}
					?>
		    			<li class="categories__list-item <?php echo "$curr" ?>"><a class="categorie__choose__item" href="movements.php?categorie=<?php echo $cat['id'] ?>"><?php echo $cat['title']; ?></a></li>
		    		<?php	
		}		
	?>
</ul>