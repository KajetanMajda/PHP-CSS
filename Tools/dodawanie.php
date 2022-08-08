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
		</nav>
	
	</header>
	
	<main>
		<div class="text-center">
        <form action="" method="post">
            <br><select name="narzedzia" id="narzedzia">

                <optgroup label="Toczenie">
                   <option value="1" >Toczenie</option>
                </optgroup>

                <optgroup label="Wiercenie">
                   <option value="2">W pelnym materiale</option>
                   <option value="3">Wytwarzanie zgrubne i dokladne</option>
                   <option value="4">Rozwiercanie</option>
                </optgroup>

                <optgroup label="Gwintowanie">
                   <option value="5">Gwintowniki</option>
                   <option value="6">Frezowanie gwintow</option>
                </optgroup>

                <optgroup label="Frezowanie">
                   <option value="7">Frezowanie</option>
                </optgroup>

               <optgroup label="Oprawki Stale">
                   <option value="8">Elementy i wyposarzenie</option>
                   <option value="9">Dodatkowe</option>
               </optgroup>

               <optgroup label="Oprawki Obrotowe">
                   <option value="10">SK 50</option>
                   <option value="11">SK 60</option>
                   <option value="12">Capto</option>
                   <option value="13">D 'Andrea</option>
                   <option value="14">Inne</option>
               </optgroup>

                <optgroup label="Roztaczanie">
                   <option value="15">Roztaczanie</option>
                </optgroup>
            </select><br>

            <br><input type="text" name="name" placeholder="Nazwa narzedzia" class="text-center" style="width: 295px;">
            <br><input type="text" name="prox"  placeholder="Numer Katalogowy Wlasny" class="text-center" style="width: 295px;">
            <br><input type="text" name="prod"  placeholder="Numer Katalogowy Producent" class="text-center" style="width: 295px;">
            <br><input type="text" name="link" placeholder="Link Do Strony Producenta" class="text-center" style="width: 295px;">
            <br><input type="submit" name="save" onclick="myFunction()" class="text-center">
        </div>

                <?php
                    include_once "BD.php";
                    if(isset($_POST['save'])){
                    $narzedzia = $_POST['narzedzia'];
                    $name = $_POST['name'];
                    $prox = $_POST['prox'];
                    $prod = $_POST['prod'];
                    $link = $_POST['link'];
                    $sql ='INSERT INTO Home (`dzial`, `nazwa`, `numer_narzedzia`, `numer_katalogowy`, `link`) VALUES ("'.$narzedzia.'","'.$name.'","'.$prox.'","'.$prod.'","'.$link.'")';
                	$result = $baza->query($sql);
                    }
                ?>
                    <script>
                        function myFunction() {
                        alert("Dodano Pomyślnie");
                        }
                    </script>

        </form>
		
	</main>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>