<?php
  include_once "baza_danych.php";
  $sql = 'DELETE FROM opinions WHERE opinion = "'.preg_replace('[%20]', ' ', $_GET["opinion"]).'"';
  $result = $baza->query($sql);
  echo '<script>alert("Opinion has been removed")</script>';  
  echo '<script>window.location="index.php"</script>';
?> 