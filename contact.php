<!-- Start of the head section -->
<?php include './assets/includes/head.php'; ?>
<!-- End of the head section -->
<body>

    <!-- Start of the header section -->
    <?php include './assets/includes/headers/small-header.php'; ?>
    <!-- End of the header section-->

    <!-- Start of the main content section for the login page-->
    <main>

        <!-- Start of the contact section -->
        <section class="contact-section container grid">
            <div class="contact-section-item-one">
                <div class="contact-section-margin">
                    <p>
                        Pellentesque a felis et eros convallis molestie. In congue urna nulla, at varius velit rutrum eu. Morbi porttitor erat a
                        purus faucibus laoreet. Vivamus hendrerit arcu eget enim rhoncus, non aliquet diam faucibus. 
                    </p>
                    <form action="#">
                        <p>Name</p>
                        <input type="text"><br>
                        <p>Email</p>
                        <input type="text"><br>
                        <p>Country</p>
                        <input type="text"><br>
                        <p>Message</p>
                        <textarea type="text"></textarea><br>
                        <button type="submit" class="login-button">Send your message</button>
                    </form>
                </div>
            </div>
            <div class="contact-section-item-two">
                <img src="./assets/img/contact-image.webp" alt="">
            </div>
        </section>
        <!-- End of the contact section -->

        <!-- Start of the plastic soup area -->
        <section class="plastic-soup-section">
            <div>
                <img src="./assets/img/plasticsoup-image.jpeg" alt="">
                <h2>In order to save the world we must act now</h2>
            </div>
        </section>
        <!-- End of the plastic soup area-->

    </main>
    <!-- End of the main content section for the login page-->

    <!-- Start of the footer section -->
    <?php include './assets/includes/footer.php'; ?>
    <!-- End of the footer section -->
    
</body>
</html>