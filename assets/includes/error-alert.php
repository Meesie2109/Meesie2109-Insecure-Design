<?php 

if (isset($_GET['error'])) { ?>

    <!-- Start of the alert error section-->
    <div class="error-alert">
        <div>
            <h4>Error</h4>
            <h5>
                <?php 
                    if($_GET['error'] === "passwordincorrect"){
                        echo "Password has been enterd inccorect";
                    } 
                    if($_GET['error'] === "usernameincorrect"){
                        echo "Incorrect username please enter a valid one";
                    } 
                ?>
            </h5>
        </div>
    </div>
    <!-- End of the alert error section-->
    
<?php  
} else {
    // Fallback behaviour goes here
} 

?>