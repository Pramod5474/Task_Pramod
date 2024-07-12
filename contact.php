<?php
include_once 'config.php';
include_once ("apis/user_login.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css">
    <title>Contact Us</title>
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