<!-- Start of the head section -->
<?php include './assets/includes/head.php'; ?>
<!-- End of the head section -->
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
                                type="password" 
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