<?php session_start(); ?>
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
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <?php 
                if(isset($_SESSION["username"])){
                    echo "<li><a href='info.php'>Info</a></li>";
                    echo "<li><a href='./assets/includes/actions/logout-action.php'>Logout</a></li>"; 
                } else {
                    echo "<li><a href='login.php'>Login</a></li>";
                }
                ?>
            </ul>
        </nav>
    </div>