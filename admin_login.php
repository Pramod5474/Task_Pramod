<?php 
include_once 'config.php';
// include_once 'index.php';
include_once ("apis/user_login.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

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
            height: 42%;
            width: 30%;
            max-width: 900px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .container .admin-login {
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
        }

        .container .admin-login form{
            margin-top: 15px;
        }

        .container .admin-login .form-header {
            margin-bottom: 20px;
        }

        .container .admin-login .form-header h2 {
            text-align: center;
            margin-top: 5%;
        }

        .log-head {
            margin: 0;
            color: #555;
        }

        .container .admin-login form{
            height: 50%;
        }

        .container .admin-login form .form-group {
            margin-bottom: 20px;
        }

        form input[type="text"],
        input[type="password"] {
            width: 80%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        form input[type="text"]:focus{
            border: 3px solid blue;
        }

        form input[type="password"]:focus{
            border: 3px solid blue;
        }

        form .btn {
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

    </style>
</head>

<body>
    <!-- Login Page for Admin -->
     
    <div class="container">
        <div class="admin-login">
            <div class="form-header">
                <h2 class="log-head">Login</h2>
            </div>
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" id="login-email" name="username" placeholder="Name *" required>
                </div>
                <div class="form-group">
                    <input type="password" id="login-password" name="password" placeholder="Your Password *" required>
                </div>
                <input type="hidden" name="page_action" value="admin_login">
                <button type="submit" class="btn">Login</button>    
            </form>
        </div>
    </div>
</body>

</html>