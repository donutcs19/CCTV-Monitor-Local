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
  <link rel="stylesheet" href="font/font-awesome@4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="DataTables/DataTables-1.13.8/css/dataTables.bootstrap5.min.css">
  <link href="DataTables/datatables.min.css" rel="stylesheet">
  <link href="css/bootstrap@5.3.2/css/bootstrap.min.css" rel="stylesheet">




  <title>Add CCTV</title>
</head>

<body>

  <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
        <use xlink:href="#bootstrap"></use>
      </svg>
    </a>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
      <li><a href="#" class="nav-link px-2 link-secondary">Welcome to CCTV MJU for Exam</a></li>

    </ul>

    <div class="col-md-3 text-end">
      <a href="preview.php">
        <button type="button" class="btn btn-outline-success me-2">Preview</button></a>
      <a href="cont/logout.php">
        <button type="button" class="btn btn-outline-primary me-2">Logout</button></a>

    </div>
  </header>


  <div width="5%">
    <form action="cont/add_db.php" method="post" align="center">
      IP Address <input type="text" name="ip" required>
      Port <input type="text" name="port" required>
      Username <input type="text" name="user" required>
      Password <input type="text" name="pass" required>
      Room <input type="text" name="room" required> <br><br>
      <input class="btn btn-primary" type="submit" value="Add" name="insert_db"><br><br>
    </form>
  </div>

  <!-- <div><?php if (isset($_SESSION['success'])) { ?>
      <div class="alert alert-success" role="alert" align="center">
        <?php
              echo $_SESSION['success'];
              unset($_SESSION['success']);

        ?>
      <?php } ?>
      </div>
      <?php if (isset($_SESSION['error'])) { ?>
        <div class="alert alert-danger" role="alert" align="center">
          <?php

          echo $_SESSION['error'];
          unset($_SESSION['error']);


          ?>
        <?php } ?>
        </div>

        <?php if (isset($_SESSION['warning'])) { ?>
          <div class="alert alert-danger" role="alert" align="center">
            <?php
            echo $_SESSION['warning'];
            unset($_SESSION['warning']);
            ?>
          <?php } ?></div> -->


  <div class="container">

    <table id="myTable" class="table table-striped" align="center">
      <thead>
        <tr>
          <th>Id</th>
          <th>IP Address</th>
          <th>Room</th>
          <th>User</th>
          <th>Pass</th>
          <th>date update</th>
          <th>date at</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $check_data = $conn->prepare("SELECT * FROM ipcam");
        $check_data->execute();
        $show = $check_data->fetchALL();
        foreach ($show as $data) {

        ?>

          <tr>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['ip']; ?>:<?php echo $data['port']; ?></td>
            <td><?php echo $data['room']; ?></td>
            <td><?php echo substr($data['user'], 0, 3) ?>***</td>
            <td><?php echo substr($data['pass'], 0, 3) ?>***</td>
            <td><?php echo $data['update_at']; ?></td>
            <td><?php echo $data['create_at']; ?></td>
            <td><a href="edit_cctv.php?ID=<?php echo $data["id"]; ?>"><button type="button" name="edit" class="btn btn-outline-warning btn-edit" onclick="return confirm('ต้องการแก้ไขห้อง <?php echo $data['room']; ?> ???')">
                  <i class="fa fa-pencil-square-o"></i></button></a></td>
            <td><a href="cont/delete_db.php?ID=<?php echo $data["id"]; ?>"><button type="button" name="delete" class="btn btn-outline-danger btn-del" onclick="return confirm('ต้องการแก้ไขห้อง <?php echo $data['room']; ?> ???')">
                  <i class="fa fa-trash"></i></button></a></td>
          </tr>

        <?php } ?>
      </tbody>
    </table>
  </div>




  <script src="DataTables/jQuery-3.7.0/jquery-3.7.0.js"></script>
  <script src="DataTables/DataTables-1.13.8/js/jquery.dataTables.min.js"></script>
  <script src="DataTables/DataTables-1.13.8/js/dataTables.bootstrap5.min.js"></script>
  <script src="DataTables/DataTables-1.13.8/datatables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });
  </script>

</html>