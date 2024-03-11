<?php
session_start();
if (!isset($_SESSION['admin_login'])) {
  header("location: login.php");
}
require_once('cont/condb.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="img/favicon-32x32.png" type="image/x-icon">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/w3.css">
  <link href="css/bootstrap@5.3.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="font/font-awesome@4.7.0/css/font-awesome.min.css">

  <title>Edit CCTV</title>
</head>

<body>

  <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
        <use xlink:href="#bootstrap"></use>
      </svg>
    </a>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
      <li><a href="#" class="nav-link px-2 link-secondary">Welcome to Edit CCTV MJU for Exam</a></li>

    </ul>

    <div class="col-md-3 text-end">
      <a href="add_cctv.php">
        <button type="button" class="btn btn-outline-primary me-2">Home</button></a>
    </div>
  </header>


  <?php
  $id_edit = $_GET['ID'];
  $check_data = $conn->prepare("SELECT * FROM ipcam WHERE id = $id_edit");
  $check_data->execute();
  $show = $check_data->fetchAll();
  foreach ($show as $data) {

    $id = $data['id'];
    $ip = $data['ip'];
    $port = $data['port'];
    $user = $data['user'];
    $pass = $data['pass'];
    $room = $data['room'];;
  }

  ?>

  <form action="cont/edit_db.php?ID=<?php echo $id ?>" method="post" align="center">
    IP Address <input type="text" name="ip" value="<?php echo $ip; ?>" required>
    Port <input type="text" name="port" value="<?php echo $port; ?>" required>
    Username <input type="text" name="user" value="<?php echo $user; ?>" required>
    Password <input type="text" name="pass" value="<?php echo $pass; ?>" required>
    Room <input type="text" name="room" value="<?php echo $room; ?>" required> <br><br>
    <input class="btn btn-primary" type="submit" name="update_db"><br><br>
  </form>




</body>

</html>