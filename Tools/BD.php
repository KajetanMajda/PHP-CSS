    <?php
    $dbhost = "localhost";
    $dbname = "tools";
    $dbuser = "root";
    $dbpass = "";
    
    $baza = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    
    if ($baza->connect_error) {
        die("Błąd połączenia: " . $baza->connect_error);
    }

    $baza->set_charset("utf8");
    ?>