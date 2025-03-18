<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="media/logos/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="styles/root.css">
  <link rel="stylesheet" href="styles/header.css">
  <link rel="stylesheet" href="styles/aside.css">
  <link rel="stylesheet" href="styles/verified.css">
  <link rel="stylesheet" href="styles/footer.css">
  <title>WARQTEK/VERIFIED</title>
</head>
<body>
  <?php require "splits/header.html"?>
  <?php require "splits/aside.html"?>
  <div class="submitted">
    <h1 class="the-request"><?php echo $_SESSION["document-type"]?></h1>
    <p>request</p>
    <img src="media\images\Icon (Stroke) (5).png" alt="">
    <h3>Your request has been successfully submitted and is now being processed. You will be notified once it is completed. If you would like to track the progress, click the button below.</h3>
    <a href="requests.php"><input type="submit" value="TRACK REQUEST"></a>
  </div>
  <?php require "splits/footer.html"?>
</body>
<script type="module" src="scripts/aside.js"></script>
</html>