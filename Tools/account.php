<?php
    session_start();
?>

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
		
		<br>
	
	</header>
	
	<main>


		<?php if(empty($_SESSION['user'])): ?>
		    <form  action="login.php" method="post">
				<div>
		        	<fieldset class="text-center">
		        	    <label for="login"> LOGIN: </label><br>
		        	    <input type="text" name="login" class="insert"><br>
		        	    <label for="password"> HASLO:</label><br>
		        	    <input type="password" name="password" class="insert"><br>
		        	</fieldset>
				</div>
				<div class="text-center my-2">
					<button type="submit">Zaloguj sie</button>
				</div>
		    </form>
		<?php else: ?>
		<?php include_once "index.php"; ?>
		<?php endif;?>
		
	</main>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>