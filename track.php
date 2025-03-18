<?php include("database.php")?>
<?php session_start()?>
<?php

  if(isset($_SESSION["id_user"])) {
    header("Location: requests.php");//khdam khasni ghi nzid kifax tdir log out
  }

  if(isset($_SESSION["id_admin"])) {
    header("Location: admin.php");//khdam khasni ghi nzid kifax tdir log out
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $password = $_POST["password"];

    $sql = "SELECT id_user from user where email = '$email' and password = md5('$password')";
    $result = mysqli_query($db_conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $admin_sql = "SELECT id_admin from admins where email = '$email' and password = md5('$password')";
    $admin_result = mysqli_query($db_conn, $admin_sql);
    $admin_row = mysqli_fetch_assoc($admin_result);

    if(!$row && !$admin_row) {
      echo "<script type='module'>document.querySelector('.error').style.display = 'block';</script>";
    } else if ($row) {
      $_SESSION["id_user"] = $row["id_user"];

      header("Location: requests.php");
      mysqli_close($db_conn);
      die();
    } else {
      $_SESSION["id_admin"] = $admin_row["id_admin"];

      header("Location: admin.php");
      mysqli_close($db_conn);
      die();
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="media/logos/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="styles/root.css">
  <link rel="stylesheet" href="styles/header.css">
  <link rel="stylesheet" href="styles/aside.css">
  <link rel="stylesheet" href="styles/track.css">
  <link rel="stylesheet" href="styles/footer.css">
  <title>WARQTEK/TRACK</title>
</head>
<body>
  <?php require "splits/header.html"?>
  <?php require "splits/aside.html"?>
  <main>
    <form action="" method="post">
      <h1>Track Your Requests</h1>
      <h4 class="error" style="color: red; display: none;">Check Your Email Or Password</h4>
      <label for="">Email : </label>
      <input type="email" name="email" placeholder="Email.." required>
      <label for="">Password : </label>
      <input type="password" name="password" placeholder="Password.." required>
      <a href="https://www.myway.ac.ma">Did You Forget Your Password ?</a>
      <input type="submit" value="TRACK">
    </form>
  </main>
  <?php require "splits/footer.html"?>
</body>
<script type="module" src="scripts/aside.js"></script>
</html>