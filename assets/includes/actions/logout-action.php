<!-- In this file is all the code stored to logout the user  -->
<?php 
    session_start();
    if(isset($_SESSION['username'])){
        session_destroy();

        header("location: ../../../index.php");
        exit();

    } else {
        header("location: ../../../login.php");
        exit();
    } 
?>