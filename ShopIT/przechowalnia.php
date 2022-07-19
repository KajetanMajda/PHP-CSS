<?php
    if(isset
        ($_POST['name'])&& !empty($_POST['name'])&&
        ($_POST['surname'])&& !empty($_POST['surname'])&&
        ($_POST['email'])&& !empty($_POST['email'])&&
        ($_POST['prefix'])&& !empty($_POST['prefix'])&&
        ($_POST['number'])&& !empty($_POST['number'])&&
        ($_POST['address'])&& !empty($_POST['address'])&&
        ($_POST['flat'])&& !empty($_POST['flat'])&&
        ($_POST['postal'])&& !empty($_POST['postal'])&&
        ($_POST['city'])&& !empty($_POST['city'])){

        
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $email = $_POST['email'];
            $prefix = $_POST['prefix'];
            $number = $_POST['number'];
            $address = $_POST['address'];
            $flat = $_POST['flat'];
            $postal = $_POST['postal'];
            $city = $_POST['city'];
            // type of delivery
    }
?>