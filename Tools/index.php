<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>Home</title>
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="main.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	
	<style>
		figure {
    		text-align: center;
		}

		IMG {
		  display:block;
		  width:255px;
		  height:207px;
		}
	</style>

</head>

<body>

	<header>
		
		<nav class="navbar navbar-dark bg-primary justify-content-between">
  			<a href="index.php"class="navbar-brand">Home</a>
			  <div class="text-center">
    			<form action="logout.php" method="post">
        			<input type="submit" class="logout" name="logout" value="LOGOUT"> <!-- przycisk logout-->
    			</form>
  			  </div>
			<a href="dodawanie.php"class="navbar-brand">Dodawanie Nowego Produktu</a>
		</nav>
	
	</header>
	
	<main>
		
		
			<div class="container">
				
				<div class="row justify-content-center">
				
					<div class="col-lg-3">
						
						<figure>
							<br><a href="BDtoczenie.php"><img src="img/tocznie.png"></a>
							<p>Toczenie</p>
						</figure>
					
					</div>

					<div class="col-lg-3">
					
						<figure>
							<br><a href="wiercenie.php"><img src="img/Wiercenie.jpg"></a>
							<p>Wiercenie</p>
						</figure>
					
					</div>

					<div class="col-lg-3">
					
						<figure>
							<br><a href="gwintowanie.php"><img src="img/Gwintowanie.png"></a>
							<p>Gwintowanie</p>
						</figure>
					
					</div>

				</div>

			</div>

			<div class="container">

				<div class="row justify-content-center">

					<div class="col-lg-3">
					
						<figure>
							<br><a href="BDfrezowanie.php"><img src="img/Frezowanie.jpg"></a>
							<p>Frezowanie</p>
						</figure>
					
					</div>

					<div class="col-lg-3">
					
						<figure>
							<br><a href="oprawki.php"><img src="img/Oprawki.jpg"></a>
							<p>Oprawki</p>
						</figure>
					
					</div>

					<div class="col-lg-3">
					
						<figure>
							<br><a href="BDRozwiercanie.php"><img src="img/wytaczanie.jpg"></a>
							<p>Roztaczanie</p>
						</figure>
					
					</div>

				
				</div>
				
			</div>	
		
	</main>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>