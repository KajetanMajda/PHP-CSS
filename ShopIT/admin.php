<div class="container-fluid">
  <div class="text-center">
  <p>Welcome to the admin panel. Here you can delete comments 
    as well as add and remove products from our website.            <!--co ja mam w glowie-->
    Be careful what you do because you are the chosen one 
    and you have great power. xD</p>
  </div>
  <div class="text-center">
    <p id="demo"></p>
      <script>
        document.getElementById("demo").innerHTML = "Hi again, it's me"; //JS no juz +1 pkt jest
      </script>
  </div>
  <div class="text-center">
    <form action="logout.php" method="post">
        <input type="submit" class="logout" name="logout" value="LOGOUT"> <!-- przycisk logout-->
    </form>
  </div>
  <div class="row text-center">
  <div class="col text-center">
  
  <h1><b><i>PRODUCTS</i></b></h1>
    <?php
        include_once "baza_danych.php";
        $sql = 'SELECT * FROM products';
        $result = $baza->query($sql);
  				if ($result->num_rows > 0) {
      			while ($row = $result->fetch_assoc()) {
						  echo '
							    <figure>						
							      <figcaption><b>'.$row['title'].'</b></figcaption>
                    
                    <figcaption> Price: '.$row['price'].' zł</figcaption>
                    <figcaption> In stock: '.$row['amount'].' </figcaption>';
                   echo' <form method="post" action="dell_prod.php?id='.$row["id"].'">';
                   echo' <button>Delete</button>';
                   echo' </form>';
                   echo' </figure>';
						  }
						}
    ?>
    </div>
    <div class="col text-center">
          <h1><b><i>OPINIONS</i></b></h1>
          <?php
        include_once "baza_danych.php";
        $sql = 'SELECT * FROM opinions';
        $result = $baza->query($sql);
                          if ($result->num_rows > 0) {
                          while ($row = $result->fetch_assoc()) {
                              echo '
                            <figure>						
                            <figcaption><b>ID='.$row['id'].'</b><i> '.$row['opinion'].'</i></figcaption>';
                            echo' <form method="post" action="dell_opinie.php?opinion='.$row["opinion"].'">';
                            echo' <button>Delete</button>';
                            echo' </form>';
                            echo' </figure>';
                                   }
                        }
        ?>
        </div>
  </div> <!--to jest do 2 kolumn pierwszych-->
  <div class="text-center">
        <form method="post">  
          <h1><b><i>ADDING NEW PRODUCTS</i></b></h1>
            <script>
              input.setAttribute('size',input.getAttribute('placeholder').length);
            </script>
            <input type="text" name="title" placeholder="Enter title" class = "text-center">
            <input type="text" name="image" placeholder="Enter image name" value = "default" class = "text-center">
            <input type="number" name="price" placeholder="Enter Normal price" class = "text-center" min="1">
            <input type="number" name="price_ship" placeholder="Enter price with shipment" class = "text-center" min="1">
            <input type="numbre" name="amongus" placeholder="Enter amound " class = "text-center">
            <input type="text" name="szort" placeholder="Enter a short description" class = "text-center">
            <input type="text" name="long" placeholder="Enter a long description" class = "text-center"><br>
            <button type="subbmit">Just Click On It</button><br>
          </div>
          <?php
          if(isset($_POST['title'])&&!empty($_POST['title'])&&isset($_POST['image'])&&!empty($_POST['image'])&&isset($_POST['price'])&&!empty($_POST['price'])&&isset($_POST['price_ship'])&&!empty($_POST['price_ship'])&&isset($_POST['amongus'])&&!empty($_POST['amongus'])&&isset($_POST['szort'])&&!empty($_POST['szort'])&&isset($_POST['long'])&&!empty($_POST['long']))
          {
            $title=$_POST['title'];
            $image=$_POST['image']; 
            $price=$_POST['price'];
            $price_ship=$_POST['price_ship'];
            $amongus=$_POST['amongus'];
            $szort=$_POST['szort'];
            $long=$_POST['long'];
            include_once "baza_danych.php";
            $sql ='INSERT INTO `products`(`title`, `image`, `price`, `price_ship`, `amount`, `short_op`, `long_op`) VALUES ("'.$title.'","'.$image.'",'.$price.','.$price_ship.','.$amongus.',"'.$szort.'","'.$long.'")';
			      $result = $baza->query($sql);
          }
          ?>
          <br>
          <br>
          <br>
        </form>   
</div>
