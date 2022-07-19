<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<link rel="stylesheet" href="css/fontello.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>JustShopIT.com</title>
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="batons.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	
	
	
</head>

<body>

	<header>
	 
		<nav class="navbar navbar-dark bg-devices navbar-expand-lg">
		
			<a class="navbar-brand" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley"><img src="img/comp.png" width="50" height="50" class="d-inline-block mr-1 align-bottom" alt=""></a>
			<b>JustShopIT</b>
		
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Przełącznik nawigacji">
				<span class="navbar-toggler-icon"></span>
			</button>
		
			<div class="collapse navbar-collapse" id="mainmenu">
			
				<div class="navbar-nav mr-auto">
				
					<li class="nav-item active">
						<a class="icon-home" href="index.php"> </a>
					</li>
					<li class="nav-item active">
						<a class="icon-basket" href="kosz.php"> </a>
					</li>
					<li class="nav-item active">
						<a class="icon-user" href="account.php"> </a>
					</li>
				
				</div>
			
				<form class="form-inline" method = "post">
				
					<input class="form-control mr-1" type="search" placeholder="Search" aria-label="Search" name = "sercz">	<!--BY NAZAWA XD-->
					<select class="form-control mr-1" placeholder="Sort by" aria-label="Sort by" name="walju" > <!--MAX MIN PRICE-->
						<option value="0">Sort by:</option>
						<option value="1">Normal Price H->L</option> <!--SELECT * FROM products ORDER BY price DESC;-->
						<option value="2">Normal Price L->H</option>	<!--SELECT * FROM products ORDER BY price;-->
						<option value="3">Price & Shipment H->L</option> <!--SELECT * FROM products ORDER BY price_ship DESC;-->
						<option value="4">Price & Shipment L->H</option>	<!--SELECT * FROM products ORDER BY price_ship;-->
					</select>
					<input class="form-control mr-1" type="search" placeholder="Min_Price" aria-label="Min_Price" name="smol">
					<input class="form-control mr-1" type="search" placeholder="Max_Price" aria-label="Max_Price" name="bik">
					<button class="fill" type="submit">Enter</button>
  
				
				</form>
			
			</div>
		
		</nav>
	
	</header>
	
	<main>
		
		<section class="devices">
		
			<div class="container">
				
				<header>
					<br>
					<br>
					<br>	
				</header>
				
				<div class="row">

					<?php
					include_once "navbar.php";
					?>

				</div>
				
			</div>	
				
		</section>
		
	</main>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<script src="js/bootstrap.min.js"></script>

	
</body>
</html>