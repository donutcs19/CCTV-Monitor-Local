<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<?php
session_start();
require_once("condb.php");
date_default_timezone_set('Asia/bangkok');


if(isset($_POST['insert_db'])){
    $ip = $_POST['ip'];
    $port = $_POST['port'];
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $room = $_POST['room'];
    // $time_at = date('Y-m-d H:i:s');

    try{
if (!isset($_SESSION['error'])){
$ins = $conn->prepare("INSERT INTO ipcam(ip, port, room, user, pass, update_at, create_at ) 
VALUES (:ip, :port, :room, :user, :pass, CURRENT_TIMESTAMP,CURRENT_TIMESTAMP )");
$ins->bindParam(":ip",$ip);
$ins->bindParam(":port",$port);
$ins->bindParam(":room",$room);
$ins->bindParam(":user",$username);
$ins->bindParam(":pass",$password);
$ins->execute();

// $_SESSION['success'] = "Add Camera Complete ";
echo "<script>
    $(document).ready(function() {
    Swal.fire({
       title:'success',
       text:'Add Camera Complete',
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
?>