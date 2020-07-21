<?php 
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "forma");
/*prisijungimas prie duomenu bazes*/
$mysqli=new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

if($mysqli->connect_error) {
        echo "Atsiprasome, bet svetaine susidure su problema.\n";
        echo 'Klaida: ' . $mysqli->connect_error . '\n';
        exit();
    }
/*kliento issiusta informacija ivedama i duomenu baze*/
mysqli_query($mysqli, "INSERT INTO klientai (vardas, email, message) VALUES('$_POST[vardas]', '$_POST[email]', '$_POST[message]')");