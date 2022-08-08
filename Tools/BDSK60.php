<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>Home</title>
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="main.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	
</head>

<body>

	<header>
		
		<nav class="navbar navbar-dark bg-primary justify-content-between">
  			<a href="index.php"class="navbar-brand">Home</a>
			  <div class="text-center">
				<h1>SK 60</h1>
			</div>
  				<form class="form-inline">
    				<input class="form-control mr-sm-2" type="search" placeholder="Wyszukaj" aria-label="Wyszukaj">
   					<button class="button" type="submit">ENTER</button>
  				</form>
		</nav>
	
	</header>
	
	<main>
		
		<?php
    	    include_once "BD.php";

			if(isset($_POST['sercz']) && !empty($_POST['sercz'])){
			
				$sql='SELECT `dzial`, `nazwa`, `numer_narzedzia`, `numer_katalogowy`, `link` 
				FROM `tools` WHERE dzial=11 AND numer_katalogowy 
				LIKE "%'.$_POST['sercz'].'%"';

				$result = $baza->query($sql);
				if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {

				echo'
				  <br>
				  <div class="container">
				  <form method="post" action="dell.php?numer_narzedzia='.$row["numer_narzedzia"].'">

				<div class="row justify-content-center">

				  <div class="col-lg-3">
					  <figcaption>
						  <figure>
							  '.$row['nazwa'].'
						  </figure>
					  </figcaption>
				  </div>

				  <div class="col-lg-3">
				  <figcaption>
					  <figure>
						  '.$row['numer_narzedzia'].'
					  </figure>
					  </figcaption>
				  </div>

				  <div class="col-lg-3">
				  <figcaption>
					  <figure>
					  <a href="'.$row['link'].'">'.$row['numer_katalogowy'].'</a>
					  </figure>
					  </figcaption>
				  </div>

				  <div class="col-lg-3">
				  <figcaption>
					  <figure>
						  <button>Usun</button>
					  </figure>
					  </figcaption>
				  </div>

				</div>
				</form>
				</div>';

			  
					}
	  			}
			}
			else{

			
    	    	$sql = 'SELECT `nazwa`, `numer_narzedzia`, `numer_katalogowy`, `link` 
				FROM `tools` WHERE dzial=11 ORDER BY `numer_narzedzia`';
    	    	$result = $baza->query($sql);
  					if ($result->num_rows > 0) {
    	  			while ($row = $result->fetch_assoc()) {

						echo'
						<br>
						<div class="container">
						<form method="post" action="dell.php?numer_narzedzia='.$row["numer_narzedzia"].'">
					
					<div class="row justify-content-center">
					
						<div class="col-lg-3">
							<figcaption>
								<figure>
									'.$row['nazwa'].'
								</figure>
							</figcaption>
						</div>
	
						<div class="col-lg-3">
						<figcaption>
							<figure>
								'.$row['numer_narzedzia'].'
							</figure>
							</figcaption>
						</div>
	
						<div class="col-lg-3">
						<figcaption>
							<figure>
							<a href="'.$row['link'].'">'.$row['numer_katalogowy'].'</a>
							</figure>
							</figcaption>
						</div>
	
						<div class="col-lg-3">
						<figcaption>
							<figure>
								<button>Usun</button>
							</figure>
							</figcaption>
						</div>
	
					</div>
					</form>
				</div>';

									
			  }
			}
		}	
			
    	?>
		
	</main>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>