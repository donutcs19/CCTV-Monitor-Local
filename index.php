<?php
session_start();
require_once("cont/condb.php");
?>
<html>

<head>
  <title>Monitor IP CCTV</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="img/favicon-32x32.png" type="image/x-icon">
  <link rel="stylesheet" href="css/w3.css">
  <link href="css/bootstrap@5.3.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="font/font-awesome@4.7.0/css/font-awesome.min.css">

</head>

<body>

 





  <?php
  $load_data = $conn->prepare("select * from ipcam");
  $load_data->execute();
  $show = $load_data->fetchAll();
  foreach ($show as $data) {
  ?>

    <div class="responsive">
      <div class="gallery">
        <a target="_blank" href="">
          <img src="http://<?php echo $data['ip'] ?>:<?php echo $data['port'] ?>/videostream.cgi?user=<?php echo $data['user'] ?>&pwd=<?php echo $data['pass'] ?>" alt="Cinque Terre" width="600" height="400">
        </a>
        <div class="desc"><?php echo $data['room'] ?></div>
      </div>
    </div>


  <?php } ?>

  <div class="responsive">
    <div class="gallery">

      <div class="desc">
        <a href="login.php">
          <button type="button" class="btn btn-outline-primary me-2">Add CCTV</button>
        </a>
      </div>
    </div>
  </div>
</body>

</html>






<!-- <tr>
    <th>Lab 2</th>
    <th>ช้องนาง 1</th>
	  <th>80-308</th>
    <th>70-205</th>
    
  </tr>
  <tr>
<td><img id="videoC" name="videoC" src="rtsp://admin:888888@10.1.48.200:10554/udp/av0_0" 
width="390"></td>
<td><img id="videoC" name="videoC" src="http://10.1.48.182:52047/videostream.cgi?user=admin&pwd=mjucctv2020" 
width="390"></td>
<td><img id="videoC" name="videoC" src="http://10.1.48.181:48040/videostream.cgi?user=admin&pwd=mjucctv2020" 
width="390"></td>
<td><img id="videoC" name="videoC" src="http://10.1.48.180:41686/videostream.cgi?user=admin&pwd=mjucctv2020" 
width="390"></td>
  </tr> -->