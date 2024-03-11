<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<?php
session_start();
require_once("condb.php");
date_default_timezone_set('Asia/bangkok');

$id_del = $_GET["ID"];


try {
    if (!isset($_SESSION['error'])) {
        $ins = $conn->prepare("DELETE FROM ipcam WHERE id = $id_del ");
        $ins->execute();

        // $_SESSION['success'] = "Delete Camera Complete ";
        echo "<script>
    $(document).ready(function() {
    Swal.fire({
       title:'success',
       text:'Delete Camera Success',
       icon:'success',
       showConfirmButton: false,
       timer: 1500

      });
});

</script>";
        header("refresh:1.5; url=../add_cctv.php");
    } else {
        // $_SESSION['error'] = "มีข้อผิดพลาด";
        echo "<script>
    $(document).ready(function() {
    Swal.fire({
       title:'error',
       text:'Not Delete Camera',
       icon:'error',
       showConfirmButton: false,
       timer: 1500

      });
});

</script>";
        header("refresh:1.5; url=../add_cctv.php");
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}


?>