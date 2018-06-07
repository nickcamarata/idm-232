<?php
    $dbhost = "localhost";
    $dbuser ="root";
    $dbpass = "root";
    $dbname="cuttingboard";
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if (mysqli_connect_errno()) {
        die("Database connection failed: " .
          mysqli_connect_error() .
          " (" . mysqli_connect_errno() . ")"
        );
    }
    //Everything above this is standard and should almost always be this way

?>