<?php 
if(isset($_POST['register-button'])){

    $email_input = $_POST["email-input"];
    $full_name_input = $_POST["full-name-input"];
    $username_input = $_POST["username-input"];
    $password_input = $_POST["password-input"];

    require_once '../../helpers/connectdb.php';

    $sql = "INSERT INTO User (username, fullname, email, password)
        VALUES ('$username_input', '$full_name_input' , '$email_input', '$password_input')";
    $result = $conn->query($sql);

    session_start();
    $_SESSION["username"] = $username_input;

    header("location: ../../../index.php");
    $conn->close();

} else {

}

?>