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
  			<a href=""class="navbar-brand">Home</a>
		</nav>
	
	</header>
	
	<main>

	<?php
    session_start();
    if (!empty($_POST['login']) && !empty($_POST['password'])) {
        $login = "admin";
        $password = "admin123";
        $hash = password_hash($password, PASSWORD_DEFAULT);

        if ($_POST['login'] == $login){
            if (password_verify($_POST['password'], $hash))
            {
                $_SESSION['user'] = htmlspecialchars($_POST['login']);
                header("Location: account.php");
            }else
            echo' 	<script>alert("Zle haslo.")</script>
					<script>window.location="account.php"</script>';
			
        }
        else if($_POST['login'] != $login)
		echo'	<script>alert("Zly login.")</script>
				<script>window.location="account.php"</script>';
    }
	?>
	</main>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>