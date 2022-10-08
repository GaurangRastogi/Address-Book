<?php
    $localhost = "localhost";
    $username = "root";
    $password = "gaurang";

    // Create connection
    $conn = mysqli_connect($localhost, $username, $password);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    mysqli_select_db($conn,"iwp");

?>