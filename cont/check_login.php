<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<?php
session_start();
require_once("condb.php");
date_default_timezone_set('Asia/bangkok');

if (isset($_POST[('login')])) {
    $username = $_POST[('username')];
    $password = $_POST[('password')];
}
try {
    $check_data = $conn->prepare("SELECT * FROM login WHERE username = :username");
    $check_data->bindParam(':username', $username);
    $check_data->execute();
    $row = $check_data->fetch(PDO::FETCH_ASSOC);

    if ($check_data->rowCount() > 0) {
        if ($username == $row['username']) {
            // if(password_verify($password , $row['password'])){
            if ($password == $row['password']) {
                if ($row['urole'] == '1') {
                    $_SESSION['admin_login'] = $row['id'];

                    echo "<script>
                        $(document).ready(function() {
                            
                           Swal.fire({
                            title: 'Welcome Admin ^^',
                            timerProgressBar: true,
                            timer: 2000,
                            showConfirmButton: false
                           });
                        });
                        </script>";

                    header("refresh:2; url= ../add_cctv.php");
                } else {
                    header("location: ../login.php");
                }
            } else {
                // $_SESSION['error'] = "Password not match";
                // header("location: ../login.php");
                echo "<script>
                    $(document).ready(function() {
                    Swal.fire({
                       title:'Oops...',
                       text:'Incorrect username or password.',
                       icon:'error',
                       showConfirmButton: false,
                       timer: 1500
                      });
                });
                </script>";
                header("refresh:1.5; url=../login.php");
            }
        } else {
            // $_SESSION['error'] = "Username not match";
            // header("location: ../login.php");
            echo "<script>
                    $(document).ready(function() {
                    Swal.fire({
                       title:'Oops...',
                       text:'Incorrect username or password.',
                       icon:'error',
                       showConfirmButton: false,
                       timer: 1500
                      });
                });
                </script>";
            header("refresh:1.5; url=../login.php");
        }
    } else {
        // $_SESSION['error'] = "You not admin, Please contact to admin  ";
        // header("location: ../login.php"); 

        echo "<script>
                $(document).ready(function() {
                Swal.fire({
                   title:'Oops...',
                   text:'Incorrect username or password.',
                   icon:'error',
                   showConfirmButton: false,
                   timer: 1500
                  });
            });
            </script>";
        header("refresh:1.5; url=../login.php");
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}




?>