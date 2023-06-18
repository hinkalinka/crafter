<?php
	require "Php/db.php";

	$db_cranes = R::findAll('cranes');
	$cranes = array();
	foreach ($db_cranes as $row) {
	$cranes[] = $row;
}
?>
<!DOCTYPE html>
<html lang=ru>
	<head>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/media.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <title>CRAFTER</title>
	</head>
<body>

	<header class="header">
        <div class="container header__container">
          			<div class="nav__menu">
          				<div class="logo__img">
          				</div>
          				<div class="logo__text">
              			<h1 class="hero__title">CRAFTER</h1>
                		<h1 class="hero__title__down">CRAFT BAR</h1>
              		</div>
              		<div class="logo__nav">
              			<a href="" class="nav__link">БРОНЬ</a>
              			<a href="#katalog" class="nav__link" id="nav__link">КОНТАКТЫ</a>
              			<a href=".about" class="nav__link" id="nav__link">О НАС</a>
              			<a href="#beer_cran" class="nav__link" id="nav__link">CEЙЧАС</a>
              		</div>
          			</div>
        </div>
	</header>
	<main>
		<section class="about">
			<div class="head__wrap">
				<div class="head__row">
					
				</div>
				<div class="row">
					<h1 class="hero">
						Крафтер. Гастрономический Бар. Еда & Крафтовое Пиво
					</h1>
				</div>
			</div>
			<div class="head__wrap_second">
				<div class="row row_wrap">
					<div class="mini__row">
						<a href="https://www.flaticon.com/ru/free-icons/" title="напитки иконки">
							<img src="image/chef-h.png"></a><br>
						<h1>КУХНЯ</h1><br>
						<h3>Собственная кухня со своими рецептами, попробуйте закуски или полноценные блюда</h3>
					</div>
					<div class="mini__row">
						<a href="https://www.flaticon.com/ru/free-icons/" title="напитки иконки">
							<img src="image/worker.png"></a><br>
						<h1>ПЕРСОНАЛ</h1><br>
						<h3>Персонал который всегда поможет с&nbsp;выбором, разбереться в&nbsp;ваших вкусах, чтобы вы&nbsp;могли провести своей вечер незабываемо</h3>
					</div>
					<div class="mini__row">
						<a href="https://www.flaticon.com/ru/free-icons/" title="напитки иконки">
							<img src="image/drink.png"></a><br>
						<h1>ВЫБОР</h1><br>
						<h3>Широкий ассортимент напитков, с выбором которым мы вам всегда поможем</h3>
					</div>
				</div>
			</div>
			<div class="head__wrap" id="beer_cran">
				<h1 class="hero hero__beer">
						ПИВО НА КРАНАХ
				</h1>
					<div class="id_beer">
								<h1>Название</h1>
								<h1>Градус</h1>
								<h1>0.3</h1>
								<h1>0.5</h1>
					</div>
					<?php for($i = 1; $i < 9; $i++) :?>
						<div class="id_beer">
							<h1><?php echo $db_cranes[$i]->title; ?></h1>
							<h1><?php echo $db_cranes[$i]->degree; ?>.0 %</h1>
							<h1><?php echo $db_cranes[$i]->price; ?> р</h1>
							<h1><?php echo $db_cranes[$i]->price_two; ?> р</h1>
						</div>
					<?php endfor; ?>
				<div class="head__row_second"></div>
			</div>
			<div class="head__wrap">
				<div class="head__row_third">
					
				</div>
			</div>		
			<div class="head__wrap">
				<h1 class="hero hero__beer">
						БРОНИРОВАНИЕ
				</h1>
			</div>	
		</section>
	</main>

	

	<footer>
		
	</footer>

</body>
</html>