<?php
include_once 'config.php';
include_once ("apis/user_login.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

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

        .contact-container {
            background-color: white;
            /* padding: 20px; */
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            height: 80%;
            width: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .contact-container h1 {
            text-align: center;
            color: #333;
        }

        form {
            margin-top: 20px;
            width: 90%;
            display: flex;
            flex-direction: column;
        }

        form label {
            margin-top: 10px;
            color: #333;
        }

        form input,
        textarea,
        select,
        button {
            margin-top: 5px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form button {
            background-color: #962810;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border: none;
            width: 20%;
            margin-top: 20px;
            border-radius: 15px;
            font-weight: bold;
        }

        form button:hover {
            background-color: #555;
        }

        .required {
            color: red;
            margin-left: 5px;
        }
    </style>
</head>
<body>

    <!-- Contact Us Form -->
     
    <div class="contact-container">
        <h1>Contact Us</h1>
        <form method="post" enctype="multipart/form-data">
            <label for="name"> Your Name <span class="required">*</span></label>
            <input type="text" id="name" name="name" required>

            <label for="address"> Your Address <span class="required">*</span></label>
            <input type="text" id="address" name="address" required>

            <label for="city"> Your City <span class="required">*</span></label>
            <select id="city" name="city" required>
                <option value="" disabled selected>Select your city</option>
                <option value="kolhapur">Kolhapur</option>
                <option value="sangli">Sangli</option>
                <option value="satara">Satara</option>
                <option value="pune">Pune</option>
            </select>

            <label for="image">Image <span class="required">*</span></label>
            <input type="file" id="image" name="image" accept="image/*" required>

            <label for="message">Your Message <span class="required">*</span></label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Submit</button>

            <input type="hidden" name="page_action" value="add_contact">
        </form>
    </div>
</body>

</html>