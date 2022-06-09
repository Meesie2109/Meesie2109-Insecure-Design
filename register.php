<!-- Start of the head section -->
<?php include './assets/includes/head.php'; ?>
<!-- End of the head section -->
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
                                type="password" 
                                placeholder="Password"
                                required>
                            <br>
                            <p>Password Confirm</p>
                            <input type="password" placeholder="Password Confirm">
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