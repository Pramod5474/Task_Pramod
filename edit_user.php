<?php
include_once ('config.php');
include_once ('apis/user_login.php');

$user_details = get_user_details($_REQUEST['id']);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/edit_user.css">
    <title>Edit User</title>
</head>

<body>

    <!-- To Update My Account Details -->

    <div class="contact-container">
        <h1>My Account</h1>
        <form method="post" enctype="multipart/form-data">
            <label for="name">Name</label>
            <input type="text" name="name" value="<?php if (isset($user_details['name'])) {
                echo $user_details['name'];
            } ?>">

            <?php
            $img_name = "default.png";
            if ($user_details['image'] != '' && file_exists('img/' . $user_details['image'])) {
                $img_name = $user_details['image'];
            }

            ?>
            <img src="img/<?php echo $img_name; ?>" style="height:50px !important; width:50px !important;">

            <label for="image">Upload Image </label>
            <input type="file" id="image" name="image" accept="image/*">

            <button type="submit">Submit</button>

            <input type="hidden" name="page_action" value="edit_user">
            <input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>">
        </form>
    </div>
</body>

</html>