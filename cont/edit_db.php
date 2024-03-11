<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<?php
session_start();
require_once("condb.php");
date_default_timezone_set('Asia/bangkok');


if (isset($_POST['update_db'])) {
    $id_update = $_GET["ID"];
    $ip = $_POST["ip"];
    $port = $_POST["port"];
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    $room = $_POST["room"];



    try {
        if (!isset($_SESSION['error'])) {
            $check_data = $conn->prepare("UPDATE ipcam 
        SET ip = :ip, 
        port = :port, 
        user = :user, 
        pass = :pass, 
        room = :room,
        update_at = CURRENT_TIMESTAMP WHERE id = :id_update ");
            $check_data->bindParam(":ip",$ip);
            $check_data->bindParam(":port",$port);
            $check_data->bindParam(":user",$user);
            $check_data->bindParam(":pass",$pass);
            $check_data->bindParam(":room",$room);
            $check_data->bindParam(":id_update",$id_update);
            $check_data->execute();

            // $_SESSION['success'] = "Edit Camera Complete ";
            echo "<script>
    $(document).ready(function() {
    Swal.fire({
       title:'success',
       text:'Edit Camera Success',
       icon:'success',
       showConfirmButton: false,
       timer: 1500

      });
});

</script>";
                header("refresh:1.5; url=../add_cctv.php");
            
        } else {
            $_SESSION['error'] = "มีข้อผิดพลาด";
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
