<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register page</title>

    <!-- The login.css includes all the custom styles used on the login page -->
    <link rel="stylesheet" href="./stylesheets/login.css">

    <!-- The login.css includes all the custom styles used on the register page -->
    <link rel="stylesheet" href="./stylesheets/register.css">

    <link rel="stylesheet" href="./stylesheets/style.css">
</head>
<body>

    <!-- Start of the main content section for the login page-->
    <main>
    
        <!-- Start of the register page structure -->
        <section class="login-section">
    
            <!-- Start of the register page inputs section-->
            <div class="login-section-item-one">
                <div class="register-section-inputs">
                    <div>
                        <h2>Register Now!</h2>
                        <form method="post" action="./assets/includes/actions/register-action.php">
                            <p>Email Adress</p>
                            <input 
                                name="email-input" 
                                type="text" 
                                placeholder="Email Adress"
                                required>
                            <br>
                            <p>Full name</p>
                            <input 
                                name="full-name-input" 
                                type="text" 
                                placeholder="Full name"
                                required>
                            <br>
                            <p>Username</p>
                            <input 
                                name="username-input" 
                                type="text" 
                                placeholder="Username"
                                required><br>
                            <p>Password</p>
                            <input 
                                name="password-input" 
                                type="text" 
                                placeholder="Password"
                                required>
                            <br>
                            <p>Password Confirm</p>
                            <input type="text" placeholder="Password Confirm">
                            <button name="register-button" type="submit" class="login-button">Register</button>
                        </form>
                        <p>Already an account? <a href="login.php">Login</a></p>
                    </div>
                </div>
            </div>
            <!-- End of the register page inputs section-->
    
            <!-- Start of the register page image section -->
            <div class="login-section-item-two">
                <img src="./assets/img/login-image.webp" alt="">
            </div>
            <!-- End of the register page image section -->
    
        </section>
        <!-- End of the register page structure -->
    
    </main>
    <!-- End of the main content section for the login page-->

    
</body>
</html>