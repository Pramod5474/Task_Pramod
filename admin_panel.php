<?php
include_once ('apis/user_login.php');
require 'config.php';
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .heading {
            font-size: 30px;
            margin-bottom: 20px;
            text-align: center;
            justify-content: center;
            color: green;
            font-weight: bold;
        }

        .logout {
            margin-bottom: 20px;
        }

        .table-container {
            margin-top: 20px;
        }

        .btn-danger,
        .btn-primary {
            margin-right: 10px;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .table-dark th {
            background-color: #343a40;
            color: white;
        }
    </style>
</head>

<body>
    <!-- List of Contact Us Form -->
     
    <div class="heading">
        Welcome <?php echo $_SESSION['username']; ?>
    </div>
    <div class="logout">
        <a href="logout_admin.php" class="btn btn-secondary">Logout</a>
    </div>
    <div class="table-container">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Id</th>
                    <th>Username</th>
                    <th>City</th>
                    <th>Address</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                $sql = "SELECT * FROM tbl_contact";
                $query_run = mysqli_query($conn, $sql);

                if ($query_run) {
                    while ($row = mysqli_fetch_array($query_run)) {
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['city']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['message']; ?></td>
                            <td>
                                <form action="delete_contact.php" method="post" style="display:inline;">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <input type="submit" name="delete_contact" class="btn btn-danger" value="Delete">
                                </form>
                                <form action="edit_contact.php" method="post" style="display:inline;">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <input type="submit" class="btn btn-primary" value="EDIT">
                                </form>
                            </td>
                        </tr>
                        <?php
                        $i++;
                    }
                } else {
                    echo "<tr><td colspan='6'>No record found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>