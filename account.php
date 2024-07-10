<?php
include 'config.php';
include ("apis/user_login.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            height: 50%;
            width: 30%;
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
        button {
            margin-top: 5px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .contact-container form input[type="file"] {
            padding: 3px;
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

        .contact-container form .required {
            color: red;
            margin-left: 5px;
        }

        .second-container {
            margin-left: 5%;
        }
    </style>
</head>
<body>
    <!-- My Account Form -->
    <div class="contact-container">
        <h1>My Account</h1>
        <form method="post" enctype="multipart/form-data">
            <label for="name">Name <span class="required">*</span></label>
            <input type="text" id="name" name="name" required>

            <label for="image">Image <span class="required">*</span></label>
            <input type="file" id="image" name="image" accept="image/*" required>

            <button type="submit">Submit</button>

            <input type="hidden" name="page_action" value="my_account">
        </form>
    </div>

    <!-- List of My Account Form  -->
    <div class="second-container">
        <table class="table table-bordered table-hover table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                $query = "SELECT * FROM tbl_account";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    ?>
                    <td><?php echo $i; ?> </td>
                    <td><?php echo $row['name']; ?></td>
                    <td><img width='50px' height='30px' src='img/<?php echo $row['image']; ?>' alt=''></td>
                    <td>
                        <form action="delete_user.php" method="post" style="display:inline;">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <input type="submit" name="delete" class="btn btn-danger" value="Delete">
                        </form>
                    </td>
                    <td>
                        <form action="edit_user.php" method="post" style="display:inline;">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <input type="submit" class="btn btn-primary" value="EDIT">
                        </form>
                    </td>
                    <?php
                    $i++;
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>