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
  				<form class="form-inline">
    				<input class="form-control mr-sm-2" type="search" placeholder="Wyszukaj" aria-label="Wyszukaj">
   					<button class="button" type="submit">ENTER</button>
  				</form>
		</nav>
	
	</header>
	
	<main>
    <?php
        include_once "BD.php";
        $sql = 'SELECT numer_narzedzia FROM `tools` WHERE numer_narzedzia = "'.$_GET['numer_narzedzia'].'"';
        $result = $baza->query($sql);
                  if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                          echo '<div class="text-center">
                                    <figure>
                                    <br>
                                        <form method="post" action="dellzbazy.php?numer_narzedzia='.$row["numer_narzedzia"].'">						
                                            <figcaption>	
                                                <button>Tak, chce usunac ten produkt</button>	
                                            </figcaption>
                                        </form>
                                        <br>
                                        <form action="index.php">
                                            <button>Nie, powracam do strony glownej</button>
                                        </form>
                                         </figure>
                                </div>';
                          }
                        }

        ?>
		
	</main>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>