<?php
		$id = $_GET['id'];
		include_once "baza_danych.php";
		$sql = 'SELECT * FROM opinions WHERE id='.$id;
			$result = $baza->query($sql);

  						if ($result->num_rows > 0) {
      					while ($row = $result->fetch_assoc()) {							  
						echo '	<div class="text-center">
                            <figure>				
                            <figcaption>'.$row['name'].' --> '.$row['opinion'].'<br> STARS: '.$row['stars'].'</figcaption>
							</figure>
							</div>';
                          }
                        }
?>
