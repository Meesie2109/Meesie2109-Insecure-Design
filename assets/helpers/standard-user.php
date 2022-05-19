<!-- In this file is code stored that adds a standard user to the project when starting up -->
<?php 

    //Statment to get records from the database
    $sql = "SELECT username, email FROM User";
    $result = $conn->query($sql);  
    
    //If statment to check if there aren't any user in the database already
    if ($result->num_rows === 0) {

        //Statment that inserts a user into the databasex
        $sql = "INSERT INTO User (username, email, password)
        VALUES ('insecure-admin', 'insecureAdmin@horizon.nl', '1234')";

        // Only for development purpuses
        // if ($conn->query($sql) === TRUE) {
        //     echo "New record created successfully";
        // } else {
        //     echo "Error: " . $sql . "<br>" . $conn->error;
        // }
    } 
?>