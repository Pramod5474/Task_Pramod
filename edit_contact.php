<?php
include_once ('config.php');
include_once ('apis/user_login.php');
$contact_details = get_contact_details($_REQUEST['id']);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit User</title>

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
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            height: 80%;
            width: 60%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .contact-container h1 {
            text-align: center;
            color: #333;
        }

        .contact-container form {
            margin-top: 20px;
            width: 80%;
            display: flex;
            flex-direction: column;
        }

        .contact-container form label {
            margin-top: 10px;
            color: #333;
        }

        .contact-container form input,
        textarea,
        select,
        button {
            margin-top: 5px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .contact-container form button {
            background-color: #007bff;
            color: white;
            cursor: pointer;
            border: none;
            width: 50%;
            margin-top: 20px;
            border-radius: 15px;
            font-weight: bold;
        }

        .contact-container form button:hover {
            background-color: #555;
        }

        .required {
            color: red;
            margin-left: 5px;
        }
    </style>

</head>

<body>

    <!-- To Update Contact Us Form -->

    <div class="contact-container">
        <h1>Contact Us</h1>
        <form method="post" enctype="multipart/form-data">
            <label for="name"> Your Name <span class="required">*</span></label>
            <input type="text" name="name"
                value="<?php if (isset($contact_details['name'])) {
                    echo $contact_details['name'];
                } ?>">

            <label for="address"> Your Address <span class="required">*</span></label>
            <input type="text" name="address"
                value="<?php if (isset($contact_details['address'])) {
                    echo $contact_details['address'];
                } ?>">

            <label for="city"> Your City <span class="required">*</span></label>
            <select id="city" name="city" required>
                <option value="" disabled selected>Select your city</option>
                <option value="kolhapur" <?php if (isset($contact_details['city']) && $contact_details['city'] == 'kolhapur')
                    echo 'selected'; ?>>Kolhapur</option>
                <option value="sangli" <?php if (isset($contact_details['city']) && $contact_details['city'] == 'sangli')
                    echo 'selected'; ?>>Sangli</option>
                <option value="satara" <?php if (isset($contact_details['city']) && $contact_details['city'] == 'satara')
                    echo 'selected'; ?>>Satara</option>
                <option value="pune" <?php if (isset($contact_details['city']) && $contact_details['city'] == 'pune')
                    echo 'selected'; ?>>Pune</option>
            </select>

            <?php

            ?>

            <label for="message">Your Message <span class="required">*</span></label>
            <textarea name="message"
                required><?php if (isset($contact_details['message'])) {
                    echo htmlspecialchars($contact_details['message']);
                } ?></textarea>

            <button type="submit">Update</button>

            <input type="hidden" name="page_action" value="edit_contact">
            <input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>">
        </form>
    </div>

</body>

</html>