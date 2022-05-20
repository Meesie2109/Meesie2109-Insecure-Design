<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login page</title>

    <!-- The login.css includes all the custom styles used on the login page -->
    <link rel="stylesheet" href="./stylesheets/login.css">

    <!-- The alerts.css includes all the custom styles used on the alerts displayed -->
    <link rel="stylesheet" href="./stylesheets/alerts.css">

    <link rel="stylesheet" href="./stylesheets/style.css">
</head>
<body>

    <!-- Start of the main content section for the login page-->
    <main>

       <!-- Start of the login page structure -->
       <section class="login-section">

           <!-- Start of the login page inputs section-->
           <div class="login-section-item-one">
               <div class="login-section-inputs">
                   <div>
                        <h2>Login</h2>
                        <form method="post" action="./assets/includes/actions/login-action.php">
                            <!-- Start of the alert error section-->
                            <?php include './assets/includes/error-alert.php'; ?>
                            <!-- End of the alert error section-->
                            <p>Username</p>
                            <input 
                                type="text" 
                                name="username" 
                                placeholder="Username" 
                                required>
                            <br>
                            <p>Password</p>
                            <input 
                                type="text" 
                                name="password" 
                                placeholder="Password" 
                                required>
                            <br>
                            <button type="submit" name="login-button" class="login-button">Login</button>
                        </form>
                        <p>No account yet? <a href="register.php">Register</a></p>
                   </div>
               </div>
           </div>
           <!-- End of the login page inputs section-->

           <!-- Start of the login page image section -->
           <div class="login-section-item-two">
               <img src="./assets/img/login-image.webp" alt="">
           </div>
            <!-- End of the login page image section -->

       </section>
       <!-- End of the login page structure -->

    </main>
    <!-- End of the main content section for the login page-->

</body>
</html>