<?php
include 'config.php';
include ("apis/user_login.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <title>Task</title>
</head>

<style>
  body {
    background-image: url("./img/wp.jpg");
    background-size: cover;
    margin: 0;
    font-family: Arial, sans-serif;
    overflow: hidden;
    /* Remove scrollbar */
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

<!-- To show Alert Messages -->
 
<script>
  document.addEventListener('DOMContentLoaded', (event) => {
    const urlParams = new URLSearchParams(window.location.search);
    const msg = urlParams.get('msg');
    if (msg) {
      let alertMessage = '';
      switch (msg) {
        case '1':
          alertMessage = 'User registered successfully...!!!';
          break;
        case '2':
          alertMessage = 'Contact added successfully...!!!';
          break;
        case '3':
          alertMessage = 'User deleted successfully...!!!';
          break;
        case '4':
          alertMessage = 'Contact deleted successfully...!!!';
          break;
        case '5':
          alertMessage = 'Image Upload successfully...!!!';
          break;
        case '6':
          alertMessage = 'User Updated successfully...!!!';
          break;
      }
      if (alertMessage) {
        alert(alertMessage);
      }
    }
  });
</script>

<body>