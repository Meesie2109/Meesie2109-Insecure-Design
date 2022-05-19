<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700&amp;display=swap"
        rel="stylesheet">

    <title>Contact page</title>

    <!-- The nav.css includes all the custom styles used in the nav component/tag -->
    <link rel="stylesheet" href="./stylesheets/nav.css">

    <!-- The contact.css includes all the custom styles used in the contact section -->
    <link rel="stylesheet" href="./stylesheets/contact.css">

    <!-- The plastic-soup.css includes all the custom styles used in the plastic soup section -->
    <link rel="stylesheet" href="./stylesheets/plastic-soup.css">

    <link rel="stylesheet" href="./stylesheets/style.css">
</head>
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
                        <input type="text" placeholder="Username"><br>
                        <p>Email</p>
                        <input type="text" placeholder="Password"><br>
                        <p>Country</p>
                        <input type="text" placeholder="Password"><br>
                        <p>Message</p>
                        <textarea type="text" placeholder="Password"></textarea><br>
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
    
</body>
</html>