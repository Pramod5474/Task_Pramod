<?php
include_once 'config.php';
include_once ("apis/user_login.php");
include_once("header.php");
?>
    <link rel="stylesheet" href="css/account.css">
    <title>Contact Us</title>

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