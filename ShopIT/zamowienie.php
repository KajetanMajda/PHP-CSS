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
        <div class="text-center"><br>
            <h1>Enter your personal data</h1>
            <p>Delivery details:</p>
				<form action="przechowalnia.php" method="post"></form>
            	     <input type="text" name="name" placeholder="Enter your name" class="text-center">
            	     <input type="text" name="surname" placeholder="Enter your surname"  class="text-center"><br>
            	     <input type="email" name = "email" placeholder="Enter your address e-mail ex. john.wick@gmail.com" style="width: 422px;"><br>
            	     <input type="text" name="prefix" value="+ 48" class="text-center" style="width: 122px;">
            	     <input type="number" name = "number"  placeholder="Enter your phone number" class="text-center" style="width: 295px;" maxlength="9"><br>
            	     <input type="text" name="address" placeholder="Enter your address" class="text-center" style="width: 295px;">
            	     <input type="number" name="flat" placeholder="flat number" class="text-center" style="width: 122px;"><br>
            	     <input type="text" name="postal" placeholder="Postcode"  maxlength="6" class="text-center" style="width: 122px;">
            	     <input type="text" name="city" placeholder="Enter your city" class="text-center" style="width: 295px;"><br>
            	     <select class="text-center" style="width: 422px;">
            	         <option value="0">Type of delivery:</option>
            	         <option value="1">Prime</option>
            	         <option value="2">Inpost</option>
            	         <option value="3">DHL</option>
            	     </select><br><br>
            	     <input type="submit" name="submit" value="SUBMIT YOUR ORDER" class="text-center" style="width: 422px;">
				</form>
        </div>
	</main>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>

