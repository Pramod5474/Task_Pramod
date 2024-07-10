<?php include_once 'header.php';
include_once 'apis/user_login.php';
include_once 'config.php';
session_start();
?>

<!-- Navigation Bar -->

<div class="navbar">
    <?php if (!isset($_SESSION['username']) || !$_SESSION['username']): ?>
        <a href="login.php">Login</a>
    <?php else: ?>
        <a href="index.php">Home</a>
        <a href="contact.php">Contact Us</a>
        <a href="account.php">My Account</a>
        <a href="admin_login.php">Admin Login</a>
        <div class="dropdown">
            <a href="javascript:void(0)"><?php echo htmlspecialchars($_SESSION['username']); ?></a>
            <div class="dropdown-content">
                <a href="logout.php">Logout</a>
            </div>
        </div>
    <?php endif; ?>
</div>


<!-- Dynamic Slider  -->
 
<?php if (isset($_SESSION['username']) && $_SESSION['username']) : ?>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="position: absolute; top: 12%; left: 0; width: 100%;">
    <div class="carousel-inner">

        <?php
        $i = 0;
        $query = "SELECT * FROM tbl_account";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $activeClass = ($i === 0) ? 'active' : '';
            ?>
            <div class="carousel-item <?php echo $activeClass; ?>" style="background-image: url('img/<?php echo $row['image']; ?>');">
            </div>
            <div class="carousel-caption">
                <h1>Welcome <?php echo htmlspecialchars($_SESSION['username']); ?></h1>
            </div>>
            <?php
            $i++;
        }
        ?>
        
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<?php endif; ?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>