<?php include("database.php")?>
<?php session_start()?>

<?php

  $id_admin = $_SESSION["id_admin"];

  $sql = "SELECT id_request, filiere, upper(concat(f_name , ' ', l_name)) as full_name, request, request_date from filiere inner join user on user.id_filiere = filiere.id_filiere inner join request on request.id_user = user.id_user;";
  $result = mysqli_query($db_conn, $sql);

  // if (isset($_POST["remove"])) {

  //   $id_request = $_POST["remove"];
  //   $sql = "DELETE from request where id_request = {$id_request};";
  //   mysqli_query($db_conn, $sql);
  //   header("location: requests.php");

  // }

  // if (isset($_POST["enter"])) {

  //   $_SESSION["id_request"] = $_POST["enter"];

  //   header("location: status.php");
  //   mysqli_close($db_conn);
  //   die();

  // }

  if (isset($_GET["logout"])) {

    session_unset();
    session_destroy();

    header("location: track.php");
    
    mysqli_close($db_conn);
    die();

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
  <link rel="stylesheet" href="styles/admin.css">
  <link rel="stylesheet" href="styles/footer.css">
  <title>ADMIN</title>
</head>
<body>
  <?php require "splits/header.html"?>
  <?php require "splits/aside.html"?>
  <main>
    <h1>CURRENT REQUESTS</h1>
    <form action="" method="get">
      <button type="submit" class="logout" name="logout">Log Out</button>
    </form>
    <div class="container">
      <div class="header">
        <div>FILIERE</div>
        <div>FULL NAME</div>
        <div>REQUEST</div>
        <div>DATE</div>
        <div>ACTION</div>
      </div>
      <?php
        while($row = mysqli_fetch_assoc($result)) {

          $id_request = $row["id_request"];
          $filiere = $row["filiere"];
          $full_name = $row["full_name"];
          $request = $row["request"];
          $request_date = $row["request_date"];
    
          $ONE_REQUEST ="
            <div class='one-request'>
              <div>$filiere</div>
              <div>$full_name</div>
              <div>$request</div>
              <div>$request_date</div>
              <div>
                <form action='' method='post'>
                  <button type='submit' value='$id_request'>MORE</button>
                  <button type='submit'  value='$id_request'>APPROVE</button>
                </form>
              </div>
            </div>
          ";

          echo $ONE_REQUEST;
        }
      ?>
      <div>
        
      </div>
    </div>
  </main>
  <?php require "splits/footer.html"?>
</body>
</html>