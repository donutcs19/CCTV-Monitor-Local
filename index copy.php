<?php

//http://10.1.6.189:8080/videostream.cgi?user=admin&pwd=mjulib3500
// $ipcctv = array("10.1.26.194", "10.1.26.195");
// $countcctv = count($ipcctv);

// $username = "";
// $password = "";
// //echo $countcctv;
// ?>
<html>
<head>
	<title>Monitor IP CCTV</title>
	<link rel="stylesheet" type="text/css" href="plugins/bootstrap/css/bootstrap-40.css">

</head>
<body>

<!-- 	<div class="row">
	<?php
for ($loopcctv = 0; $loopcctv < $countcctv; $loopcctv++) {
    $getip = $ipcctv[$loopcctv];
    ?>

		<div class="col-md-3"><img id="videoC" name="videoC" src="http://<?php echo $getip; ?>:8080/videostream.cgi?user=<?php echo $username; ?>&amp;pwd=<?php echo $password; ?>" style="width: 300px;" width="300" vspace="0" hspace="0"></div>

	<?php }?>
 -->
	<table>
  <tr>
    <th>COM-B 70th</th>
    <th>COM-C 70th</th>
	<th>E-tesing</th>
    <th>70-205</th>
	
	
  </tr>
  <tr>
<td><img id="videoC" name="videoC" src="http://10.8.13.22:53450/videostream.cgi?user=admin&pwd=mjucctv2023" 
width="420"></td>
<td><img id="videoC" name="videoC" src="http://10.8.14.79:47031/videostream.cgi?user=admin&pwd=mjucctv2023" 
width="420"></td>
<td><img id="videoC" name="videoC" src="http://10.8.22.91:8243/videostream.cgi?user=admin&pwd=mjucctv2023" 
width="420"></td>
<td><img id="videoC" name="videoC" src="http://10.8.21.80:34405/videostream.cgi?user=admin&pwd=mjucctv2023" 
width="420"></td>

  </tr>

  <tr>
    <th>80-310</th>
    <th>80-309</th>
	<th>80-308</th>
	<th>BAMJU-204</th>
	
    
  </tr>
  <tr>
<td><img id="videoC" name="videoC" src="http://10.80.13.46:37124/videostream.cgi?user=admin&pwd=mjucctv2023" 
width="420"></td>
<td><img id="videoC" name="videoC" src="http://10.80.13.45:49924/videostream.cgi?user=admin&pwd=mjucctv2023" 
width="420"></td>
<td><img id="videoC" name="videoC" src="http://10.80.13.47:38412/videostream.cgi?user=admin&pwd=mjucctv2023" 
width="420"></td>
<td><img id="videoC" name="videoC" src="http://10.1.45.125:19614/videostream.cgi?user=admin&pwd=mjucctv2023" 
width="420"></td>

  </tr>

  <tr>
    <th>LIB-ช้องนาง-1</th>
    <th>LIB-ช้องนาง-1</th>
	<th>2222</th>
    <th>Savings</th>
  </tr>
  <tr>
<td><img id="videoC" name="videoC" src="http://10.1.24.50:81/videostream.cgi?user=admin&pwd=mjucctv2023" 
width="420"></td>
<td><img id="videoC" name="videoC" src="http://10.1.24.48:50693/videostream.cgi?user=admin&pwd=mjucctv2023" 
width="420"></td>
<td><img id="videoC" name="videoC" src="http://10.8.14.79:47031/videostream.cgi?user=admin&pwd=mjucctv2023" 
width="420"></td>
<td><img id="videoC" name="videoC" src="http://10.8.14.79:47031/videostream.cgi?user=admin&pwd=mjucctv2023" 
width="420"></td>
  </tr>

  <tr>
    <th>LIB-ช้องนาง-1</th>
    <th>LIB-ช้องนาง-1</th>
	<th>2222</th>
    <th>Savings</th>
  </tr>
  <tr>
<td><img id="videoC" name="videoC" src="http://10.1.24.50:81/videostream.cgi?user=admin&pwd=mjucctv2023" 
width="420"></td>
<td><img id="videoC" name="videoC" src="http://10.1.24.48:50693/videostream.cgi?user=admin&pwd=mjucctv2023" 
width="420"></td>


  </tr>
</table>







<!-- <div class="col-md-3">
<img id="videoC" name="videoC" src="http://10.80.13.46:37124/videostream.cgi?user=admin&pwd=mjucctv2023" 
width="400" vspace="0" hspace="0">
</div>

<div class="col-md-3">
<img id="videoC" name="videoC" src="http://10.80.13.45:49924/videostream.cgi?user=admin&pwd=mjucctv2023" 
width="400" vspace="0" hspace="0">
</div>

<div class="col-md-3">
<img id="videoC" name="videoC" src="http://10.80.13.47:38412/videostream.cgi?user=admin&pwd=mjucctv2023" 
width="400" vspace="0" hspace="0">
</div>

<div class="col-md-3">
<img id="videoC" name="videoC" src="http://10.1.45.125:19614/videostream.cgi?user=admin&pwd=mjucctv2023" 
width="400" vspace="0" hspace="0">
</div>

<div class="col-md-3">
<img id="videoC" name="videoC" src="http://10.1.45.125:19614/videostream.cgi?user=admin&pwd=mjucctv2023" 
width="400" vspace="0" hspace="0">
</div>

<div class="col-md-3">
<img id="videoC" name="videoC" src="http://10.1.24.50:81/videostream.cgi?user=admin&pwd=mjucctv2023" 
width="400" vspace="0" hspace="0">
</div>

<div class="col-md-3">
<img id="videoC" name="videoC" src="http://10.1.24.48:50693/videostream.cgi?user=admin&pwd=mjucctv2023" 
width="400" vspace="0" hspace="0">
</div>

<div class="col-md-3">
<img id="videoC" name="videoC" src="http://10.1.48.49:39988/videostream.cgi?user=admin&pwd=888888" 
width="400" vspace="0" hspace="0">
</div>

<div class="col-md-3">
<img id="videoC" name="videoC" src="http://10.1.48.47:23393/videostream.cgi?user=admin&pwd=888888" 
width="400" vspace="0" hspace="0">
</div> -->


</body>
</html>