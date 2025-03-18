<?php include("database.php")?>
<?php session_start()?>

<?php

  $id_user = $_SESSION["id_user"];

  $sql = "SELECT id_request, request, request_date, request_status from request where id_user = $id_user;";
  $result = mysqli_query($db_conn, $sql);

  if (isset($_POST["remove"])) {

    $id_request = $_POST["remove"];
    $sql = "DELETE from request where id_request = {$id_request};";
    mysqli_query($db_conn, $sql);
    header("location: requests.php");

  }

  if (isset($_POST["enter"])) {

    $_SESSION["id_request"] = $_POST["enter"];

    header("location: status.php");
    mysqli_close($db_conn);
    die();

  }

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
  <link rel="stylesheet" href="styles/requests.css">
  <link rel="stylesheet" href="styles/footer.css">
  <title>WARQTEK/REQUESTS</title>
</head>
<body>
  <?php require "splits/header.html"?>
  <?php require "splits/aside.html"?>
  <main>
    <h1>TRACK YOUR REQUESTS</h1>
    <form action="" method="get">
      <button type="submit" class="logout" name="logout">Log Out</button>
    </form>
    <div class="container">
      <div class="header">
        <div>REQUEST</div>
        <div>STATUE</div>
        <div>ACTION</div>
      </div>
      <?php
        while($row = mysqli_fetch_assoc($result)) {

          $id_request = $row['id_request'];
          $request = $row["request"];
          $request_status = $row["request_status"];
    
          switch ($request_status) {
            case 1:
              $request_status = "Submission of Request";
              break;
            case 2:
              $request_status = "Verification & Processing";
              break;
            case 3:
              $request_status = "Approval & Validation";
              break;
            case 4:
              $request_status = "Document Preparation";
              break;
            case 5:
              $request_status = "Delivery & Notification";
              break;
          }
    
          $ONE_REQUEST = "
            <div class='one-request'>
              <div>
                <form action='' method='post'>
                  <button type='submit' value='$id_request' name='enter'>$request</button>
                </form>
              </div>
              <div>$request_status</div>
              <div>
                <form action='requests.php' method='post'>
                  <button type='submit' value='$id_request' name='remove'>Remove</button>
                </form>
              </div>
            </div>
          ";

          echo $ONE_REQUEST;
        }
      ?>
    </div>
  </main>
  <?php require "splits/footer.html"?>
</body>
<script type="module" src="scripts/aside.js"></script>
</html>