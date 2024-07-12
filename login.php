<?php
include_once 'config.php';
include_once ("apis/user_login.php");
include_once ('header.php');

// check messgae 
if(isset($_GET["err_msg"])){
    echo "<script>alert('". $_GET["err_msg"]. "')</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login and Sign Up</title>
</head>
<body>

    <!-- Login Container -->

    <div class="container">
        <div class="form-container">
            <div class="form-header">
                <h2 class="log-head">Login</h2>
            </div>
            <form method="post" enctype="multipart/form-data" onsubmit="return validateLoginForm()">
                <div class="form-group">
                    <input type="text" id="login-email" name="username" placeholder="Name *">
                </div>
                <div class="form-group">
                    <input type="password" id="login-password" name="password" placeholder="Your Password *">
                </div>
                <button type="submit" class="btn">Login</button>
                <input type="hidden" name="page_action" value="user_login">
            </form>
        </div>


        <!-- Sign Up container -->

        <div class="form-container" id="signup-container">
            <div class="form-header">
                <h2 id="sign-head">Sign Up</h2>
            </div>
            
            <form method="post" enctype="multipart/form-data" onsubmit="return validateSignupForm()">
                <div class="form-group">
                    <input type="text" id="signup-email" name="username" placeholder="Username *">
                </div>
                <div class="form-group">
                    <input type="password" id="signup-password" name="password" placeholder="Your Password *">
                </div>
                <button type="submit" class="btn" id="signup-button">Sign Up</button>
                <input type="hidden" name="page_action" value="add_user">
            </form>
        </div>
    </div>


    <script>
        //Validation For Login Form

        function validateLoginForm() {
            var username = document.getElementById("login-email").value.trim();
            var password = document.getElementById("login-password").value.trim();

            if (username === "") {
                alert("Please enter your username.");
                return false;
            }
            return true; 
        }

        //Validation for Sign Up Form
        function validateSignupForm() {
            var username = document.getElementById("signup-email").value.trim();
            var password = document.getElementById("signup-password").value.trim();

            
            if (username === "") {
                alert("Please enter your email.");
                return false;
            }
            if (password.length < 8) {
                alert("Password must be at least 8 characters long.");
                return false;
            }
            return true; // Form will submit if all validations pass
        }
    </script>
</body>
</html>