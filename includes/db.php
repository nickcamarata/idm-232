<?php
    $host = $_SERVER['nickcamarata.com'];
      // Remote database credentials
      $dbhost = "nickcamarata.com";
      $dbuser = "nickcama_final";
      $dbpass = "qpwoeiru";
      $dbname = "nickcama_idm232";

    
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    
    if (mysqli_connect_errno()) {
      die("Database connection failed: " .
        mysqli_connect_error() .
        " (" . mysqli_connect_errno() . ")"
      );
    }
?>