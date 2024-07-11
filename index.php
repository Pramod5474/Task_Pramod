<?php 
include_once 'header.php';
include_once 'apis/user_login.php';
include_once 'config.php';
session_start();
?>

<!-- Style for body of index page -->
<style>
  body {
    background-image: url("./img/wp.jpg");
    background-size: cover;
    margin: 0;
    font-family: Arial, sans-serif;
    overflow: hidden;
  }

  .navbar {
    position: absolute;
    right: 10px;
    top: 10px;
    padding: 10px;
    background-color: rgba(0, 0, 0, 0.5);
    border-radius: 5px;
    z-index: 2;
    /* Ensure navbar appears on top */
  }

  .navbar a {
    color: white;
    text-decoration: none;
    padding: 10px 15px;
    display: inline-block;
    transition: background-color 0.3s ease;
  }

  .navbar a:hover {
    background-color: rgba(255, 255, 255, 0.2);
  }

  a:active {
    color: yellow;
  }

  .dropdown {
    display: inline-block;
    position: relative;
  }

  .dropdown a {
    cursor: pointer;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: rgba(0, 0, 0, 0.7);
    min-width: 100px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    z-index: 1;
  }

  .dropdown-content a {
    color: white;
    padding: 10px 15px;
    text-decoration: none;
    display: block;
  }

  .dropdown-content a:hover {
    background-color: rgba(255, 255, 255, 0.2);
  }

  .dropdown:hover .dropdown-content {
    display: block;
  }

  .carousel-item {
    height: 90vh;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }

  .carousel-inner {
    height: 100%;
  }

  .carousel-control-prev-icon,
  .carousel-control-next-icon {
    background-color: rgba(0, 0, 0, 0.5);
    border-radius: 50%;
    padding: 10px;
  }

  .carousel-caption {
    position: absolute;
    top: 60%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    font-weight: bold;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    /* opacity: 0.1; */
  }
  </style>

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