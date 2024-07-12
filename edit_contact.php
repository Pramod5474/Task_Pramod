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
    <link rel="stylesheet" href="css/edit_contact.css">
    <title>Edit User</title>
</head>

<body>
    <!-- To Update Contact Us Form -->

    <div class="contact-container">
        <h1>Contact Us</h1>
        <form method="post" enctype="multipart/form-data">
            <label for="name"> Your Name <span class="required">*</span></label>
            <input type="text" name="name" value="<?php if (isset($contact_details['name'])) {
                echo $contact_details['name'];
            } ?>">

            <label for="address"> Your Address <span class="required">*</span></label>
            <input type="text" name="address" value="<?php if (isset($contact_details['address'])) {
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

            <label for="message">Your Message <span class="required">*</span></label>
            <textarea name="message" required><?php if (isset($contact_details['message'])) {
                echo htmlspecialchars($contact_details['message']);
            } ?></textarea>

            <button type="submit">Update</button>

            <input type="hidden" name="page_action" value="edit_contact">
            <input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>">
        </form>
    </div>

</body>

</html>