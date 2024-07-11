<?php
include_once 'config.php';
include_once ("apis/user_login.php");
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
        case '7':
          alertMessage = 'Contact Updated successfully...!!!';
          break;
      }
      if (alertMessage) {
        alert(alertMessage);
      }
    }
  });
</script>

<body>