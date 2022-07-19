<?php   
	include_once "baza_danych.php";
	
	if(isset($_POST['sercz']) && !empty($_POST['sercz'])){
		$sql = 'SELECT id, title,`image`,price,price_ship,amount,short_op FROM products WHERE title = "'.$_POST['sercz'].'"';
	}
	else if(isset($_POST['smol']) && !empty($_POST['smol']) && (isset($_POST['bik']) && !empty($_POST['bik']))){
		$sql = 'SELECT id, title,`image`,price,price_ship,amount,short_op FROM products WHERE price >='. $_POST['smol'] .' AND price <=' . $_POST['bik'];
	} else{
		$sql = 'SELECT id, title,`image`,price,price_ship,amount,short_op FROM products';	
	}
		
		if(isset($_POST['walju'])==true){
			
			switch($_POST['walju']){
				case "1":
					$sql = 'SELECT * FROM products ORDER BY price DESC';
					break;
				case "2":
					$sql = 'SELECT * FROM products ORDER BY price';
					break;
				case "3":
					$sql = 'SELECT * FROM products ORDER BY price_ship DESC';
					break;
				case "4":
					$sql = 'SELECT * FROM products ORDER BY price_ship';
					break;
			}
		}

	$result = $baza->query($sql);
	if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		  echo '
		<div class="col-sm-6 col-md-3">
		<figure>
		<div class="idk">
		<img src="img/'.$row['image'].'.jpg" class="shy" alt="">
			<div class="middle">
				<form method="post" action="opinie.php?id='.$row["id"].'">
				<button class="slide"  >&nbsp;</button>
				</form>
				<button class="slide2 add-cart">&nbsp;</button>
			</div>	
		</div>						
		<figcaption><b>'.$row['title'].'</b></figcaption>
            <figcaption> Normal Price: '.$row['price'].' zł</figcaption>
            <figcaption> Price & Shipment: '.$row['price_ship'].' zł</figcaption>
            <figcaption> In stock: '.$row['amount'].' </figcaption>
            <figcaption><i>'.$row['short_op'].'</i></figcaption>
		</figure>
		</div>';
	  }
	}
?>