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
    <title>Edit User</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            border: 1px solid;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .contact-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            height: 60%;
            width: 30%;
            display: flex;
            flex-direction: column;
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
            row-gap: 10px;
        }

        .contact-container form label {
            margin-top: 10px;
            color: #333;
        }

        .contact-container form input,
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

        button:hover {
            background-color: #555;
        }

        .required {
            color: red;
            margin-left: 5px;
        }
    </style>
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