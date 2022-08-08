<?php
  include_once "BD.php";
  $sql = 'DELETE FROM tools WHERE numer_narzedzia = "'.$_GET['numer_narzedzia'].'"';
  echo $sql;
  $result = $baza->query($sql);
  echo '<script>alert("Usuniecie produktu powiodlo sie")</script>';  
  echo '<script>window.location="index.php"</script>';
?>


<?php