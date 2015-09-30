<!DOCTYPE HTML>
<head>
<title>Haunted.ie | Register</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="menu/css/simple_menu.css">
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen">
<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />
<!--JS FILES STARTS-->
<?php include_once("scripts.php")?>
</head>
<body>


<!-- connection -->

<?php
 
  error_reporting(E_ALL);
 ini_set('display_errors','1');
 
 $con = mysqli_connect("localhost", "g559168_admin", "A05bf311", "g559168_events") or die(mysqli_connect_error());
 

 ?>
 
<!-- top menu -->
<?php include_once("header.php")?>
<!-- end header -->

<?php include_once("footer.php")?>

</body>
</html>