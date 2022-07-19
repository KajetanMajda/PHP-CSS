<?php
  include_once "baza_danych.php";
  $sql = 'DELETE FROM products WHERE id = "'.$_GET['id'].'"';
  $result = $baza->query($sql);
  echo '<script>alert("Product has been removed")</script>';  
  echo '<script>window.location="index.php"</script>';
?>