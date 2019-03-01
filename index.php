<?php
  header('Content-Type: text/html; charset=utf-8');
  require "includes/config.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Кодировка веб-страницы -->
	<meta charset="UTF-8">
	<!-- Настройка viewport -->
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  	<!-- Подключаем css -->
	<link rel="stylesheet" href="css/style.css">
  	<!-- Подключаем шрифт -->
  	<link href="https://fonts.googleapis.com/css?family=Playfair+Display|Questrial" rel="stylesheet"> 
  	<!-- Подключаем иконки -->
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  	<!-- meta -->
	<title>American Tribal Style. Справочник движений. | <?php echo $config['title']; ?></title>
	<meta name="description" content="Основные движения American Tribal Style (ATS). Как они выглядят и как их танцевать."/>
	<meta name="keywords" content="Двиэения American Tribal Style танцевать ats dance"/>
</head>
<body>
	<div class="wrapper">
		<?php
	  		include "includes/header.php";
		?>
		<main class="page-content">
			<section class="section-relative">
				<div class="container-fluid">
					<div class="row">
						<div class="carousel-slide__background-img">	
							<div id="carouselExampleIndicators" class="carousel slide carousel-slide__container" data-ride="carousel">
							  	<ol class="carousel-indicators">
							    	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							    	<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							    	<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
							 	</ol>
							  	<div class="carousel-inner">
							    	<div class="carousel-item active carousel-item_first-slide">
							    	</div>
							    	<div class="carousel-item carousel-item_second-slide">
						    		</div>
							    	<div class="carousel-item carousel-item_third-slide">
							    	</div>
							  	</div>  	
							</div> 
							<div class="carousel-slide__filter">
								<div class="swiper-container">
									<div class="carousel-slide__title">
										<div class="row">
											<div class="col-12">
												<h1>СПРАВОЧНИК ПО ATS!</h1>
												<h5 class="carousel-slide__subtitle">Здесь ты узнаешь, какие движения есть  в ATS:)</h5>
												<div class="carousel-slide__button">
													<div class="row">
														<div class="col-md-9 col-lg-8 col-xl-6 button_main">
															<a href="page.php" class="button_link">ПРОЙТИ В ГАЛЕРЕЮ</a>
														</div>	
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>	
			</section>
		</main>
	</div>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>