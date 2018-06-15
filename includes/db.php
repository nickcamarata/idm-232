<?php
    // $host = $_SERVER['nickcamarata.com'];
    if ($host == 'localhost:8888') {
      // Local database credentials
      $dbhost = "localhost";
      $dbuser = "root";
      $dbpass = "root";
      $dbname = "cuttingboard";
    }
    else {
      // Remote database credentials
      $dbhost = "nickcamarata.com";
      $dbuser = "nickcama_idm232";
      $dbpass = "{fmg+Et!9V^v";
      $dbname = "nickcama_idm232";
    }
    
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
?>