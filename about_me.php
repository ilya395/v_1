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
			<section class="top-container">
				<div class="top-container__background-img">
					<div class="top-container__filter">
						<div class="top-container__title">
							<h1>СПРАВОЧНИК ПО ATS!</h1>
						</div>
					</div>
				</div>
			</section>
			<section class="gallery">
				<div class="container-fluid">
					<h2 class="gallery__title">Основные движения</h2>
					<ul class="gallery__chits">
						<il class="gallery__chits__list-item">Главная</il>
						<il class="gallery__chits__list-item">Галерея движений</il>
					</ul>
					<div class="gallery__content">
						<div class="row">
							<div class="col-xl-3 col-md-12">
								<div class="gallery__content__categories">
									<h4 class="categories__title">Категории</h4>
									<ul class="categories__queue-lists">
										<li class="filtr-message">Выбери категорию:</li>
                                        <li class="filtr-bottom">
                                        	<div class="filtr-bottom__click-btm">
	                                        	<div class="dropdown">
	                                    		  	<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														Фильтер
													</button>
													<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
													    <?php
															include "includes/filter_categories.php";
														?>
													</div>
	                                        	</div>
                                        	</div>
                                	        <?php
												include "includes/page_categories.php";
											?>
                                        </li>
									</ul>
								</div>
							</div>
							<div class="col-xl-9">
								<div class="gallery__content__elements">
									<div class="row">
										<div class="col-12 col-md-6 col-xl-4 elements__items">
											<span>Информация о сайте!</span>
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