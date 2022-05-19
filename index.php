<?php include_once './assets/helpers/connectdb.php'?>

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

    <title>Home page</title>

    <!-- The nav.css includes all the custom styles used in the nav component/tag -->
    <link rel="stylesheet" href="./stylesheets/nav.css">

    <!-- The vision.css includes all the custom styles used in the vision section -->
    <link rel="stylesheet" href="./stylesheets/vision.css">

    <!-- The plastic-soup.css includes all the custom styles used in the plastic soup section -->
    <link rel="stylesheet" href="./stylesheets/plastic-soup.css">

    <!-- The poachers.css includes all the custom styles used in the poacher section -->
    <link rel="stylesheet" href="./stylesheets/poachers.css">

    <link rel="stylesheet" href="./stylesheets/style.css">
</head>
<body> 

    <!-- Start of the header section -->
    <header>
        <!-- Start of the navbar section-->
        <div class="navbar-wrapper">
            <nav id="navbar">
                <input type="checkbox" id="check">
                <label for="check" class="checkbtn">
                    <i class="fas fa-bars"></i>
                </label>
                <div class="logo">
                    <div class="logo-text"><img src="assets/img/logowithoutbackground.png"></div>
                </div>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="login.html">Login</a></li>
                </ul>
            </nav>
        </div>
        <!-- End of the navbar section-->
        <div>
            <img src="./assets/img/thumbnail_img.jpeg" alt="">
        </div>
    </header>
    <!-- End of the header section-->

    <!-- Start of the main content section of the index page -->
    <main>

        <!-- Start of the vision section -->
        <section class="vision-section container grid">
            <div class="vision-text-area">
                <h2>Our vision for the future</h2>
                <p class="vision-main-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis varius odio lectus, eu congue magna elementum ac. Nullam
                    molestie erat sem, at porttitor nibh ullamcorper et. Nulla tincidunt sodales pellentesque. Quisque gravida in ipsum eget
                    interdum. In pretium posuere euismod. Donec erat lacus, euismod eu ornare at, malesuada vel sem. Mauris quis dolor
                    mattis, blandit ex non, ultrices dui.
                </p>
                <p>
                    Cras sem purus, porta at dictum in, pulvinar ac nibh. Nam ante sapien, tempus et libero lobortis, volutpat rhoncus
                    justo. Sed nec maximus risus. Nullam mollis nisi at leo pharetra lobortis. Mauris nisi purus, congue a lectus non,
                    tempus auctor ex. Fusce tortor mauris, luctus vitae faucibus gravida, aliquet in tortor. Nam at felis in mi auctor
                    fringilla. Duis dignissim est eget nisl condimentum, nec elementum purus interdum. Mauris semper, neque ac ullamcorper
                    auctor, purus purus auctor est, vitae faucibus quam mauris non tortor. Suspendisse sagittis dolor quis bibendum pretium.
                    Vivamus vel nisl eleifend, laoreet sapien eget, tempor nisi.
                </p>
                <p>
                    Nulla in commodo erat, nec finibus libero. Ut eu neque diam. Mauris non luctus libero, et placerat ligula. Class aptent
                    taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam quis tincidunt augue. Aliquam
                    ultrices velit velit. Proin dignissim felis nisi, quis pretium neque aliquam et. Fusce pulvinar nisl libero, nec
                    molestie magna mattis id.
                </p>
            </div>
            <div class="vision-img-area">
                <img src="./assets/img/vision-image.jpeg" alt="">
            </div>
        </section>
        <!-- End of the vision section -->

        <!-- Start of the plastic soup area -->
        <section class="plastic-soup-section">
            <div>
                <img src="./assets/img/plasticsoup-image.jpeg" alt="">
                <h2>In order to save the world we must act now</h2>
            </div>
        </section>
        <!-- End of the plastic soup area-->

        <!-- Start of the poachers section -->
        <section class="poachers-section container grid">
            <div class="poachers-img-area">
                <img src="./assets/img/poachers-image.jpeg" alt="">
            </div>
            <div class="poachers-text-area">
                <h2>Poaching must end now to save the last remaing wild animals</h2>
                <p class="poachers-main-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis varius odio lectus, eu congue magna elementum
                    ac. Nullam
                    molestie erat sem, at porttitor nibh ullamcorper et. Nulla tincidunt sodales pellentesque. Quisque gravida
                    in ipsum eget
                    interdum. In pretium posuere euismod. Donec erat lacus, euismod eu ornare at, malesuada vel sem. Mauris quis
                    dolor
                    mattis, blandit ex non, ultrices dui.
                </p>
                <p>
                    Cras sem purus, porta at dictum in, pulvinar ac nibh. Nam ante sapien, tempus et libero lobortis, volutpat
                    rhoncus
                    justo. Sed nec maximus risus. Nullam mollis nisi at leo pharetra lobortis. Mauris nisi purus, congue a
                    lectus non,
                    tempus auctor ex. Fusce tortor mauris, luctus vitae faucibus gravida, aliquet in tortor. Nam at felis in mi
                    auctor
                    fringilla. Duis dignissim est eget nisl condimentum, nec elementum purus interdum. Mauris semper, neque ac
                    ullamcorper
                    auctor, purus purus auctor est, vitae faucibus quam mauris non tortor. Suspendisse sagittis dolor quis
                    bibendum pretium.
                    Vivamus vel nisl eleifend, laoreet sapien eget, tempor nisi.
                </p>
                <p>
                    Nulla in commodo erat, nec finibus libero. Ut eu neque diam. Mauris non luctus libero, et placerat ligula.
                    Class aptent
                    taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam quis tincidunt augue.
                    Aliquam
                    ultrices velit velit. 
                </p>
            </div>
        </section>
        <!-- End of the poachers section -->

    </main>
    <!-- End of the main content section of the index page-->
</body>
</html>