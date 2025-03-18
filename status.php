<?php include("database.php")?>
<?php session_start();?>
<?php 
  $id_request = $_SESSION["id_request"];

  $sql = "SELECT request, request_status from request where id_request = $id_request;";
  $result = mysqli_query($db_conn, $sql);
  $row = mysqli_fetch_assoc($result);

  $request = $row["request"];
  $request_status = $row["request_status"];

  mysqli_close($db_conn);
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
  <link rel="stylesheet" href="styles/status.css">
  <link rel="stylesheet" href="styles/footer.css">
  <title>WARQTEK/STATUS</title>
</head>
<body>
  <?php require "splits/header.html"?>
  <?php require "splits/aside.html"?>
  <main>
    <h1 data-request-status = <?php echo $request_status?> id = "request"><?php echo $request?></h1>
    <p>Request</p>
    <ul>
      <li>
        <p><svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#e8eaed"><path d="M320-240h320v-80H320v80Zm0-160h320v-80H320v80ZM240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v480q0 33-23.5 56.5T720-80H240Zm280-520v-200H240v640h480v-440H520ZM240-800v200-200 640-640Z"/></svg></p>
        <div class="one bar">1</div>
        <p>Submission <br> of <br> Request</p>
      </li>
      <li>
        <p><svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#e8eaed"><path d="m576-160-56-56 104-104-104-104 56-56 104 104 104-104 56 56-104 104 104 104-56 56-104-104-104 104Zm79-360L513-662l56-56 85 85 170-170 56 57-225 226ZM80-280v-80h360v80H80Zm0-320v-80h360v80H80Z"/></svg></p>
        <div class="two bar">2</div>
        <p>Verification <br> & <br> Processing</p>
      </li>
      <li>
        <p><svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#e8eaed"><path d="m344-60-76-128-144-32 14-148-98-112 98-112-14-148 144-32 76-128 136 58 136-58 76 128 144 32-14 148 98 112-98 112 14 148-144 32-76 128-136-58-136 58Zm34-102 102-44 104 44 56-96 110-26-10-112 74-84-74-86 10-112-110-24-58-96-102 44-104-44-56 96-110 24 10 112-74 86 74 84-10 114 110 24 58 96Zm102-318Zm-42 142 226-226-56-58-170 170-86-84-56 56 142 142Z"/></svg></p>
        <div class="three bar">3</div>
        <p>Approval <br> & <br> Validation</p>
      </li>
      <li>
        <p><svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#e8eaed"><path d="M160-120q-33 0-56.5-23.5T80-200v-560q0-33 23.5-56.5T160-840h640q33 0 56.5 23.5T880-760v560q0 33-23.5 56.5T800-120H160Zm0-80h640v-560H160v560Zm40-80h200v-80H200v80Zm382-80 198-198-57-57-141 142-57-57-56 57 113 113Zm-382-80h200v-80H200v80Zm0-160h200v-80H200v80Zm-40 400v-560 560Z"/></svg></p>
        <div class="four bar">4</div>
        <p>Document <br> Preparation</p>
      </li>
      <li>
        <p><svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#e8eaed"><path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h404q-4 20-4 40t4 40H160l320 200 146-91q14 13 30.5 22.5T691-572L480-440 160-640v400h640v-324q23-5 43-14t37-22v360q0 33-23.5 56.5T800-160H160Zm0-560v480-480Zm600 80q-50 0-85-35t-35-85q0-50 35-85t85-35q50 0 85 35t35 85q0 50-35 85t-85 35Z"/></svg></p>
        <div class="five bar">5</div> 
        <p>Delivery <br> & <br> Notification</p>
      </li>
    </ul>
    <h2>We are currently verifying your request and checking all provided documents. If any additional information is needed, we will contact you.</h2>
  </main>
  <?php require "splits/footer.html"?>
</body>
<script type="module" src="scripts/aside.js"></script>
<script type="module" src="scripts/status.js"></script>
</html>