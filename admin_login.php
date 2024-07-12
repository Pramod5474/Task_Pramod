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
    <link rel="stylesheet" href="css/admin_login.css">
    <title>Admin Login</title>
    
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