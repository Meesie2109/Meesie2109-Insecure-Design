<!-- In this file is code stored to connect to the database -->
<?php 

    //Varabieles used to store the information for connecting to the db
    $servername = "localhost";
    $username = "Insecure-admin";
    $password = "1234";
    $dbname = "insecure-design";

    // Conmection string for the php database
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // If statment to check if the database is connected

    //Only for development porpuse
    // if (!$conn) {
    //     die("Connection failed: " . mysqli_connect_error());
    // }
    // echo "Connected successfully";

    // Includes a file that inserts a user on startup
    include_once 'standard-user.php';

?>

