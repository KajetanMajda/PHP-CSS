<?php
    session_start();
    unset($_SESSION['user']);
    session_destroy();
    echo '<script>alert("Wylogowano sie poprawnie")</script>';
    echo '<script>window.location="account.php"</script>';