<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<link rel="stylesheet" href="css/fontello.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>JustShopIT.com</title>
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="main.css">
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
			
				<ul class="navbar-nav mr-auto">
				
					<li class="nav-item active">
						<a class="icon-home" href="index.php"> </a>
					</li>
					<li class="nav-item active">
						<a class="icon-basket" href="kosz.php"> </a>
					</li>
					<li class="nav-item active">
						<a class="icon-user" href="account.php"> </a>
					</li>
				
				</ul>
			
			</div>
		
		</nav>
	
	</header>
	
	<main>
	<div class="container-fluid">
	<?php
		$id = $_GET['id'];
		include_once "baza_danych.php";
		$sql = "SELECT * FROM products WHERE id=".$id;
			$result = $baza->query($sql);

  						if ($result->num_rows > 0) {
      					while ($row = $result->fetch_assoc()) {
							  echo '
							<div class="row text-center">
							<div class="col text-center" style = "margin:50px 110px 50px 110px;">
							<figure>
							<div class="idk">
							<br><img src="img/'.$row['image'].'.jpg" class="shy" alt="">
							</div>						
							<figcaption><b>'.$row['title'].'</b></figcaption>
                            <figcaption> Normal Price: '.$row['price'].' zł</figcaption>
                            <figcaption> Price & Shipment: '.$row['price_ship'].' zł</figcaption>
                            <figcaption> In stock: '.$row['amount'].' </figcaption>
							</div>
							<div class="col text-center" style = "margin:50px 110px 50px 110px;">
								<br><figcaption> Long description: '.$row['long_op'].' </figcaption>
								<form method="post" action="kosz.php?add_to_cart='.$row["id"].'">
									<button>ADD TO BASKET</button><br>	
								</form>
							</figure>
							</div>
							</div>';
                          }
                        }
							echo '<div class="text-center">
								<h1><i><b>Opinions so far:</h1></i></b><br>
								</div>';					
								include_once "opiniekli.php";
							echo  '<div class="text-center">
									<a>U want new review?</a><br>
								<form method="post" action="dodawanie.php?id='.$id.'">
								<button>JUST ADD IT</button>
								</form>
								</div>';
?>
	</div>
	
		
	</main>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>