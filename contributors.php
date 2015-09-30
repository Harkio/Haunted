<!DOCTYPE HTML>

<head>

<title>Haunted.ie | Contributors</title>

<meta charset="utf-8">

<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">

<link rel="stylesheet" type="text/css" media="screen" href="menu/css/simple_menu.css">

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen">

<!-- Google fonts -->

<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />

<!--JS FILES STARTS-->

<script src="js/jquery.min.js"></script>

<script src="js/custom.js"></script>

<script src="js/slides/slides.min.jquery.js"></script>

<script src="js/cycle-slider/cycle.js"></script>

<script src="js/nivo-slider/jquery.nivo.slider.js"></script>

<script src="js/tabify/jquery.tabify.js"></script>

<script src="js/prettyPhoto/jquery.prettyPhoto.js"></script>

<script src="js/twitter/jquery.tweet.js"></script>

<script src="js/scrolltop/scrolltopcontrol.js"></script>

<script src="js/portfolio/filterable.js"></script>

<script src="js/modernizr/modernizr-2.0.3.js"></script>

<script src="js/easing/jquery.easing.1.3.js"></script>

<script src="js/kwicks/jquery.kwicks-1.5.1.pack.js"></script>

<script src="js/swfobject/swfobject.js"></script>

<!-- get fancybox -->

<link rel="stylesheet" type="text/css" itemprop="javascript" href="js/fancybox/jquery.fancybox.css" media="all">

<script src="js/fancybox/jquery.easing.1.3.js"></script>

<script src="js/fancybox/jquery.fancybox-1.2.1.js"></script>

</head>

<body>

<!-- top menu -->

<?php include_once("header.php")?>

    <div class="clr"></div>
    <!-- menu 2 -->
    <div class="clr"></div>
  </div>
</div>
  <div class="clr"></div>


<div id="container">

 

  <div id="news_content">

    
   

      <?php
 
  error_reporting(E_ALL);
 ini_set('display_errors','1');
 
 $con = mysqli_connect("localhost", "g559168_admin", "A05bf311", "g559168_events") or die(mysqli_connect_error());
 

 ?>


<h1>Site Contributors</h1>

<?php
 
  error_reporting(E_ALL);
 ini_set('display_errors','1');
 
 $con = mysqli_connect("localhost", "g559168_ad", "A05bf311", "g559168_ghost") 
 
 or die(mysqli_connect_error());
 
$query="SELECT * FROM contributors ORDER BY name";


$results = mysqli_query($con, $query);

$results = mysqli_query($con, $query);

while ($row = mysqli_fetch_assoc($results)) : 
$img = $row['image']
	
?>

<div class="news_feature">

<img src="http://haunted.ie/forms/upload/<?php echo $img; ?>" float:left; height=200px; width=200px; hspace="20"; />
<h2 align="right"size="1">Author: <?php echo $row['name']; ?></h2>
<h2 align="right">Title: <?php echo $row['speciality']; ?></h2>
<h2 align="right">Title: <?php echo $row['team']; ?></h2>
<p align="justify"><?php echo $row['bio']; ?></p>

<hr>

</div>

<?php
	endwhile;
?>



        
        
</div>
    </div>

</div>
    <div style="height:15px;">&nbsp;</div>

</div>


  <div style="height: 5px; clear:both"></div>

</div>

<div style="clear:both"></div>

<!-- close container -->

<div style="clear:both; height: 40px"></div>

<?php include_once("footer.php")?>

</body>

</html>