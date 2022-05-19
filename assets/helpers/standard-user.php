<?php 
    $sql = "INSERT INTO User (username, email, password)
    VALUES ('insecure-admin', 'insecureAdmin@horizon.nl', '1234')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>