<!-- In this file is code stored to check if the user can login based on the given credentials -->
<?php 

if(isset($_POST['login-button'])){

  $usernameField = $_POST["username"];
  $passwordField = $_POST["password"];

  require_once '../../helpers/connectdb.php';

  $sql = "SELECT * FROM User WHERE username='$usernameField' AND password='$passwordField'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
       session_start();
       $_SESSION["username"] = $usernameField;

       // Var dump used in development to test if the sessions get information
       // echo '<pre>';
       // var_dump($_SESSION);
       // echo '</pre>';

       // output data of each row for development purpose
       // while($row = $result->fetch_assoc()) {
       // echo "<br> id: ". $row["id"]. " - Name: ". $row["username"]. " " . $row["password"] . "<br>";
       // }
       header("location: ../../../index.php");

  } else {
    header("location: ../../../login.php");
  }

$conn->close();

} else {
    ?>
    <div>
        <h1>No rights to enter this page</h1>
    </div>
    <?php
}


?>