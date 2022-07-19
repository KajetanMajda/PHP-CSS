<?php
    session_start();
    unset($_SESSION['user']);
    session_destroy();
    echo '<script>alert("You just logged out")</script>';
    echo '<script>window.location="index.php"</script>';