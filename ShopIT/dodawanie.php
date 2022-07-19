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

    <form method="post">
		<div class="text-center">
    	    <br><input type="text" name="name" placeholder="Enter you name" class="text-center w-25"><br>
    	    <input type="text" name="text" placeholder= "Here enter your opinion" class="text-center w-25"></textarea><br>
    	    <input type="number" name="number" max="5" min="1" placeholder="Minimum 1   Maximum 5" class="text-center w-25"><br><br>
    	    <button type="subbmit" class="text-center w-25">ADD IT</button>
		</div>

<?php
    include_once "baza_danych.php";
    $id = $_GET['id'];
    if(isset($_POST['name'])&& isset($_POST['text'])&&!empty($_POST['name'])&&!empty($_POST['text'])&& isset($_POST['number'])&&!empty($_POST['number'])){
    $name = $_POST['name'];
    $text = $_POST['text'];
    $star = $_POST['number'];
    $sql ='INSERT INTO opinions (`id`, `name`, `opinion`, `stars`) VALUES ('.$id.',"'.$name.'","'.$text.'",'.$star.')';
	$result = $baza->query($sql);
	echo '<script>window.location="index.php"</script>';
    }
?>
   </form>
	
	</main>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>