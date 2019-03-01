<header class="page-header">
	<nav class="navbar fixed-top navbar-background-color">

				<button class="navbar-toggler navbar-toggler__background" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<div class="navbar-toggler-icon__click">
					<i class="fas fa-bars"></i>
				</div>
				</button>

	  	<div class="collapse navbar-collapse navbar__container" id="navbarSupportedContent">
	  		<div class="row">
		  		<div class="col-9 col-sm-6 col-md-4 col-lg-3 navbar__list">
		  			<div class="navbar__list__brand">
		  				<a class="navbar-brand" href="index.php"><?php echo $config['title']; ?></a>
		  			</div>
			  		<div class="navbar__list__categories">
			  			<ul class="navbar-nav mr-auto">
					      	<li class="nav-item">
					        	<a class="nav-link" href="index.php">Главная</a>
					      	</li>
					      	<li class="nav-item">
					        	<a class="nav-link" href="about_me.php">О сайте</a>
					      	</li>
					      	<li class="nav-item nav-item-active dropdown">

					        	<a class="nav-link dropdown-toggle nav-item-active__toggle" href="page.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Галерея движений</a>
								<?php
										include "categories.php";
								?>
					      	</li>
					      	<li class="nav-item">
					        	<a class="nav-link" href="contacts.php">Контакты</a>
					      	</li>
				    	</ul>
			  		</div>
				    <div class="navbar__list__footer">
				    	<div class="navbar__list__adress">
				    		<span class="adress__email"><i class="fas fa-envelope-open fa-lg"></i></span>
				    		<span>mail@yandex.ru</span>
				    	</div>
				    </div>
			    </div>
			</div>
	  	</div>
	</nav>
</header>