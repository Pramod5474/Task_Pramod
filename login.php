<?php
include 'config.php';
include ("apis/user_login.php");


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
    <title>Login and Sign Up</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            display: flex;
            height: 40%;
            width: 80%;
            max-width: 900px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .container .form-container {
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 50%;
        }

        #signup-container {
            background-color: #007bff;
        }

        .container .form-container .form-header {
            margin-bottom: 20px;
        }

        .container .form-container .form-header h2 {
            text-align: center;
            margin: 0;
            color: #555;
        }

        #sign-head {
            margin: 0;
            color: white;
        }

        .form-container form .form-group {
            margin-bottom: 15px;
        }

        .form-container form label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .form-container form .form-group input[type="email"],
        input[type="password"] {
            width: 80%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-container form .form-group input[type="email"]:focus {
            border: 3px solid blue;
        }

        .form-container form .form-group input[type="password"]:focus {
            border: 3px solid blue;
        }

        .form-container form .btn {
            width: 40%;
            padding: 10px;
            background: #007bff;
            border: none;
            color: white;
            border-radius: 15px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }

        #signup-button {
            background: white;
            color: #007bff;
        }
    </style>
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
                    <input type="email" id="login-email" name="username" placeholder="Name *">
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
                    <input type="email" id="signup-email" name="username" placeholder="Your Email *">
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