<?php include("database.php")?>
<?php session_start();?>

<?php
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $password = $_POST["password"];

    $sql = "SELECT id_user from user where email = '$email' and password = md5('$password');";
    $result = mysqli_query($db_conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($row) {

      $id_user = $row["id_user"];

      $request = $_POST["document-type"];
      $request_delivery = $_POST["document-deliver"];
      $request_reason = $_POST["reason"];

      $_SESSION["document-type"] = $request;
      $_SESSION["id_user"] = $id_user;

      $sql = "INSERT into request(request, request_reason, request_delivery, id_user) values ('$request','$request_reason','$request_delivery', $id_user);";
      mysqli_query($db_conn, $sql);

      $sql = "SELECT id_request from request where id_user= $id_user order by request_date desc , id_request desc limit 1;";
      $result = mysqli_query($db_conn, $sql);
      $row = mysqli_fetch_assoc($result);

      $_SESSION["id_request"] = $row["id_request"];

      header("location: verified.php");
      mysqli_close($db_conn);
      die();
      
    } else {
      echo "<script type='module'>document.querySelector('.error').style.display = 'block';</script>";
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
  <link rel="stylesheet" href="styles/request.css">
  <link rel="stylesheet" href="styles/footer.css">
  <title>WARQTEK/REQUEST</title>
</head>
<body>
  <?php require "splits/header.html"?>
  <?php require "splits/aside.html"?>
  <form action="request.php" method="post">
    <h1>Administrative Documents</h1>
    <div class="document-types">
      <label for="1" class="document-type" style="color: var(--button);background-color: var(--navbar);border: 2px solid var(--button);">School Certificate</label>
      <input type="radio" value="School Certificate" id="1" name="document-type" checked>
      <label for="2" class="document-type">Baccalaureate Certificate</label>
      <input type="radio" value="Baccalaureate Certificate" id="2" name="document-type">
      <label for="3" class="document-type">Diploma</label>
      <input type="radio" value="Diploma" id="3" name="document-type">
      <label for="4" class="document-type">Boarding School</label>
      <input type="radio" value="Boarding School" id="4" name="document-type">
      <label for="5" class="document-type">Scholarship</label>
      <input type="radio" value="Scholarship" id="5" name="document-type">
      <label for="6" class="document-type">Student Health Insurance (AMO)</label>
      <input type="radio" value="Student Health Insurance (AMO)" id="6" name="document-type">
      <label for="7" class="document-type">Transcript</label>
      <input type="radio" value="Transcript" id="7" name="document-type">
      <label for="8" class="document-type">Extracurricular Activities</label>
      <input type="radio" value="Extracurricular Activities" id="8" name="document-type">
      <label for="9" class="document-type">Complaint</label>
      <input type="radio" value="Complaint" id="9" name="document-type">
      <label for="10" class="document-type">Medical Certificate</label>
      <input type="radio" value="Medical Certificate" id="10" name="document-type">
    </div>
    <div class="request-form">
      <h1 class="the-request">School Certificate</h1>
      <p>Request</p>
      <h4 class="error" style="color: red; display: none; text-align: center;">Check Your Email Or Password</h4>
      <section>
        <div>
          <label for="">Email : </label>
          <input type="email" name="email" placeholder="Email..." required>
        </div>
        <div>
          <label for="">Password : </label>
          <input type="password" name="password" placeholder="Password..." minlength="5" required>
        </div>
        <div>
          <label for="">City : </label>
          <select name="">
            <option value="">Ben Slimane</option>
            <option value="">Bouznika</option>
            <option value="">Skhirat</option>
            <option value="">Rabat</option>
          </select>
        </div>
        <div>
          <label for="">School : </label>
          <select name="">
            <option value="">Ista Ben Slimane</option>
            <option value="">Ista Bouznika</option>
            <option value="">Ista Skhirat</option>
            <option value="">Ista Rabat</option>
          </select>
        </div>
        <div>
          <label for="">Formation Type : </label>
          <select name="">
            <option value="">Developement Digital</option>
            <option value="">Infrastructure Digital</option>
            <option value="">Gestion D'entreprise</option>
          </select>
        </div>
        <div>
          <label for="">Group : </label>
          <select name="">
            <option value="">101</option>
            <option value="">102</option>
            <option value="">103</option>
            <option value="">201</option>
            <option value="">202</option>
            <option value="">203</option>
          </select>
        </div>
      </section>
      <section>
        <div>
          <label for="">Reason for Request : </label>
          <textarea name="reason" placeholder="Reason for Request.."></textarea>
          <p>Preferred Delivery Method : </p>
        </div>
        <div>
          <input type="radio" value="Pickup" id="Pickup" name="document-deliver" checked>
          <label for="Pickup" class="document-deliver" style="color: var(--button);background-color: var(--navbar);border: 2px solid var(--button);">Pickup</label>
          <input type="radio" value="Email" id="Email" name="document-deliver">
          <label for="Email" class="document-deliver">Email</label>
          <input type="radio" value="Mail" id="Mail" name="document-deliver">
          <label for="Mail" class="document-deliver">Mail</label>
        </div>
      </section>
      <section>
        <input type="submit">
      </section>
    </div>
  </form>
  <?php require "splits/footer.html"?>
</body>
<script type="module" src="scripts/aside.js"></script>
<script type="module" src="scripts/request.js"></script>
</html>